<template>
  <nav class="fixed top-4 left-4 right-4 z-40">
    <div class="backdrop-blur-xl bg-white/70 rounded-2xl shadow-2xl border border-white/20">
      <div class="px-6 py-2">
        <div class="flex justify-between items-center">
          <!-- Logo -->
          <div class="flex items-center">
            <div class="flex-shrink-0 flex items-center">
              <Link :href="home()" class="flex items-center">
              <img src="/assets/website/logo-black.svg" alt="Al Najm Al Saeed" class="h-12 sm:h-14 w-auto"
                loading="eager" />
              </Link>
            </div>
          </div>

          <!-- Desktop Navigation -->
          <div class="hidden md:flex items-center space-x-8" aria-label="Main navigation">
            <Link v-for="item in navigationItems" :key="item.href" :href="item.href"
              :class="getNavLinkClasses(item.isButton, false, item.href)" @click="handleNavClick(false)">
            {{ item.label }}
            </Link>
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center">
            <button @click="toggleMobileMenu"
              class="text-gray-700 hover:text-brand-green transition-all duration-200 ease-out relative w-6 h-6 hover:scale-105 active:scale-98"
              :aria-expanded="isMobileMenuOpen" aria-label="Toggle mobile menu">
              <Transition enter-active-class="transition-all duration-200 ease-out"
                enter-from-class="opacity-0 rotate-45 scale-90" enter-to-class="opacity-100 rotate-0 scale-100"
                leave-active-class="transition-all duration-200 ease-in"
                leave-from-class="opacity-100 rotate-0 scale-100" leave-to-class="opacity-0 -rotate-45 scale-90"
                mode="out-in">
                <Menu v-if="!isMobileMenuOpen" key="menu" class="w-6 h-6 absolute inset-0" />
                <X v-else key="close" class="w-6 h-6 absolute inset-0" />
              </Transition>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <Transition enter-active-class="transition-all duration-250 ease-out" enter-from-class="opacity-0 max-h-0"
        enter-to-class="opacity-100 max-h-[500px]" leave-active-class="transition-all duration-200 ease-in"
        leave-from-class="opacity-100 max-h-[500px]" leave-to-class="opacity-0 max-h-0">
        <div v-show="isMobileMenuOpen" class="md:hidden border-t border-white/20 overflow-hidden relative z-10">
          <nav class="px-6 py-4 space-y-2" aria-label="Mobile navigation">
            <Link v-for="item in navigationItems" :key="item.href" :href="item.href"
              :class="getNavLinkClasses(item.isButton, true, item.href)" @click="handleNavClick(true)">
            {{ item.label }}
            </Link>
          </nav>
        </div>
      </Transition>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted, computed } from 'vue'
import { Menu, X } from 'lucide-vue-next'
import { Link, usePage } from '@inertiajs/vue3'
import { home, about, service, hvac, career, contact } from '@/routes/website'
import { urlIsActive } from '@/lib/utils'

const page = usePage()

const navigationItems = [
  { href: home(), label: 'Home', isButton: false },
  { href: about(), label: 'About', isButton: false },
  { href: service(), label: 'Services', isButton: false },
  { href: hvac(), label: 'HVAC', isButton: false },
  { href: career(), label: 'Career', isButton: false },
  { href: contact(), label: 'Contact', isButton: false },
  { href: '#quote', label: 'Get A Quote', isButton: true }
]

const isCurrentRoute = computed(() => (href) => {
  if (typeof href === 'string' && href.startsWith('#')) {
    return false
  }
  return urlIsActive(href, page.url)
})

const isMobileMenuOpen = ref(false)

const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}

const closeMobileMenu = () => {
  isMobileMenuOpen.value = false
}

const getNavLinkClasses = (isButton, isMobile, href) => {
  const baseClasses = 'font-medium transition duration-200 ease-out'
  const isActive = isCurrentRoute.value(href)

  if (isButton) {
    if (isMobile) {
      return `${baseClasses} block py-3 px-4 bg-brand-green hover:bg-brand-green/90 text-white rounded-lg text-center`
    }
    return `${baseClasses} bg-brand-green hover:bg-brand-green/90 text-white px-6 py-2 rounded-xl`
  }

  if (isMobile) {
    return `${baseClasses} block py-3 px-4 rounded-lg ${isActive ? 'text-brand-green font-semibold bg-brand-green/20 border border-brand-green/30' : 'text-gray-700 hover:text-brand-green hover:bg-gray-50'}`
  }

  return `${baseClasses} ${isActive ? 'text-brand-green font-semibold' : 'text-gray-700 hover:text-brand-green'}`
}

const handleNavClick = (isMobile) => {
  if (isMobile) {
    closeMobileMenu()
  }
}

const handleClickOutside = (event) => {
  const nav = event.target.closest('nav')
  if (!nav && isMobileMenuOpen.value) {
    closeMobileMenu()
  }
}

onMounted(() => {
  document.addEventListener('click', handleClickOutside)
})

onUnmounted(() => {
  document.removeEventListener('click', handleClickOutside)
})
</script>
