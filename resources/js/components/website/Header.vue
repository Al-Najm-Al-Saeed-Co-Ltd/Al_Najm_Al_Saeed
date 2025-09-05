<template>
  <nav class="fixed top-4 left-4 right-4 z-50 mx-auto max-w-7xl">
    <div class="backdrop-blur-xl bg-white/70 rounded-2xl shadow-2xl border border-white/20">
      <div class="px-6 py-2">
        <div class="flex justify-between items-center">
          <!-- Logo -->
          <div class="flex items-center">
            <div class="flex-shrink-0 flex items-center">
              <img src="/assets/website/logo-black.svg" alt="Al Najm Al Saeed" class="h-12 sm:h-14 w-auto"
                loading="eager" />
            </div>
          </div>

          <!-- Desktop Navigation -->
          <nav class="hidden md:flex items-center space-x-8" aria-label="Main navigation">
            <a v-for="item in navigationItems" :key="item.href" :href="item.href"
              :class="getNavLinkClasses(item.isButton, false)" @click="handleNavClick(false)">
              {{ item.label }}
            </a>
          </nav>

          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center">
            <button @click="toggleMobileMenu"
              class="text-gray-700 hover:text-brand-green transition-colors duration-300"
              :aria-expanded="isMobileMenuOpen" aria-label="Toggle mobile menu">
              <Menu class="w-6 h-6" />
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <Transition enter-active-class="transition-all duration-300 ease-out" enter-from-class="opacity-0 max-h-0"
        enter-to-class="opacity-100 max-h-96" leave-active-class="transition-all duration-300 ease-in"
        leave-from-class="opacity-100 max-h-96" leave-to-class="opacity-0 max-h-0">
        <div v-show="isMobileMenuOpen" class="md:hidden border-t border-white/20 overflow-hidden">
          <nav class="px-6 py-4 space-y-2" aria-label="Mobile navigation">
            <a v-for="item in navigationItems" :key="item.href" :href="item.href"
              :class="getNavLinkClasses(item.isButton, true)" @click="handleNavClick(true)">
              {{ item.label }}
            </a>
          </nav>
        </div>
      </Transition>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { Menu } from 'lucide-vue-next'

// Navigation data - centralized for maintainability
const navigationItems = [
  { href: '#home', label: 'Home', isButton: false },
  { href: '#about', label: 'About', isButton: false },
  { href: '#services', label: 'Services', isButton: false },
  { href: '#hvac', label: 'HVAC', isButton: false },
  { href: '#career', label: 'Career', isButton: false },
  { href: '#contact', label: 'Contact', isButton: false },
  { href: '#quote', label: 'Get A Quote', isButton: true }
]

// Reactive data
const isMobileMenuOpen = ref(false)

// Methods
const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}

// Close mobile menu when clicking outside (optional enhancement)
const closeMobileMenu = () => {
  isMobileMenuOpen.value = false
}

// NavLink component logic
const getNavLinkClasses = (isButton, isMobile) => {
  const baseClasses = 'font-medium transition duration-300'

  if (isButton) {
    if (isMobile) {
      return `${baseClasses} block py-3 px-4 bg-brand-green hover:bg-brand-green/90 text-white rounded-lg text-center`
    }
    return `${baseClasses} bg-brand-green hover:bg-brand-green/90 text-white px-6 py-2 rounded-xl`
  }

  if (isMobile) {
    return `${baseClasses} block py-2 text-gray-700 hover:text-brand-green`
  }

  return `${baseClasses} text-gray-700 hover:text-brand-green`
}

const handleNavClick = (isMobile) => {
  if (isMobile) {
    closeMobileMenu()
  }
}

// Close mobile menu when clicking outside
const handleClickOutside = (event) => {
  const nav = event.target.closest('nav')
  if (!nav && isMobileMenuOpen.value) {
    closeMobileMenu()
  }
}

// Lifecycle hooks
onMounted(() => {
  document.addEventListener('click', handleClickOutside)
})

onUnmounted(() => {
  document.removeEventListener('click', handleClickOutside)
})
</script>
