<template>
  <nav class="fixed top-4 left-4 right-4 z-50 mx-auto max-w-7xl">
    <div class="backdrop-blur-xl bg-white/70 rounded-2xl shadow-2xl border border-white/20">
      <div class="px-6 py-4">
        <div class="flex justify-between items-center">
          <div class="flex items-center">
            <div class="flex-shrink-0 flex items-center">
              <Building class="w-8 h-8 text-brand-green mr-3" />
              <h1 class="text-xl sm:text-2xl font-bold text-gray-900">
                <span class="text-brand-green">Al Najm</span> Al Saeed
              </h1>
            </div>
          </div>

          <!-- Desktop Navigation -->
          <div class="hidden md:flex items-center space-x-8">
            <a href="#home" class="text-gray-700 hover:text-brand-green font-medium transition duration-300">Home</a>
            <a href="#about"
              class="text-gray-700 hover:text-brand-green font-medium transition duration-300">About</a>
            <a href="#services"
              class="text-gray-700 hover:text-brand-green font-medium transition duration-300">Services</a>
            <a href="#hvac" class="text-gray-700 hover:text-brand-green font-medium transition duration-300">HVAC</a>
            <a href="#career"
              class="text-gray-700 hover:text-brand-green font-medium transition duration-300">Career</a>
            <a href="#contact"
              class="text-gray-700 hover:text-brand-green font-medium transition duration-300">Contact</a>
            <a href="#quote"
              class="bg-brand-green hover:bg-brand-green/90 text-white px-6 py-2 rounded-xl font-medium transition duration-300">
              Get A Quote
            </a>
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center">
            <button @click="toggleMobileMenu" class="text-gray-700 hover:text-brand-green">
              <Menu class="w-6 h-6" />
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <div v-show="isMobileMenuOpen" class="md:hidden border-t border-white/20">
        <div class="px-6 py-4 space-y-2">
          <a href="#home" class="block py-2 text-gray-700 hover:text-brand-green font-medium">Home</a>
          <a href="#about" class="block py-2 text-gray-700 hover:text-brand-green font-medium">About</a>
          <a href="#services" class="block py-2 text-gray-700 hover:text-brand-green font-medium">Services</a>
          <a href="#hvac" class="block py-2 text-gray-700 hover:text-brand-green font-medium">HVAC</a>
          <a href="#career" class="block py-2 text-gray-700 hover:text-brand-green font-medium">Career</a>
          <a href="#contact" class="block py-2 text-gray-700 hover:text-brand-green font-medium">Contact</a>
          <a href="#quote"
            class="block py-3 px-4 bg-brand-green hover:bg-brand-green/90 text-white rounded-lg font-medium text-center transition duration-300">Get
            A Quote</a>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref } from 'vue'
import { Building, Menu } from 'lucide-vue-next'

// Reactive data
const isMobileMenuOpen = ref(false)

// Methods
const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}
</script>
