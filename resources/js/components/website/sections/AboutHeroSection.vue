<template>
  <!-- About Hero Section -->
  <section id="about" class="hero-gradient min-h-screen flex items-center relative overflow-hidden pt-20 sm:pt-24">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <!-- Left Column - Text Content -->
        <div class="text-white order-2 lg:order-1">
          <!-- Breadcrumb -->
          <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
              <li class="inline-flex items-center">
                <Link :href="home.url()" class="inline-flex items-center text-gray-200 hover:text-white transition-colors duration-200">
                  <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                  </svg>
                  Home
                </Link>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-gray-200" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="ml-1 text-gray-200 md:ml-2">About Us</span>
                </div>
              </li>
            </ol>
          </nav>

          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            About
            <span class="text-white">Al Najm Al Saeed</span>
          </h1>
          <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-100 leading-relaxed">
            Building excellence through innovation, quality, and unwavering commitment to our clients' success. 
            Your trusted partner in construction, HVAC, and technology solutions.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 mb-12">
            <Link :href="contact.url()"
              class="bg-white text-brand-green px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-gray-100 transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
              <Phone class="w-5 h-5 mr-2" />Get In Touch
            </Link>
            <a href="#story"
              class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-white hover:text-brand-green transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
              <BookOpen class="w-5 h-5 mr-2" />Our Story
            </a>
          </div>

        </div>

        <!-- Right Column - Company Highlights -->
        <div class="order-1 lg:order-2">
          <div class="relative">
            <div class="grid grid-cols-2 gap-6">
              <div 
                v-for="highlight in companyHighlights" 
                :key="highlight.id"
                class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300"
              >
                <div :class="`w-12 h-12 ${highlight.bgColor} rounded-xl flex items-center justify-center mx-auto mb-4`">
                  <component :is="highlight.icon" :class="`w-6 h-6 ${highlight.iconColor}`" />
                </div>
                <h3 class="text-white font-semibold text-sm">{{ highlight.title }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-16 sm:top-20 left-4 sm:left-10 w-16 h-16 sm:w-20 sm:h-20 rounded-full animate-float"
      style="background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.1;"></div>
    <div
      class="absolute bottom-16 sm:bottom-20 right-4 sm:right-10 w-24 h-24 sm:w-32 sm:h-32 rounded-full animate-float"
      style="animation-delay: 2s; background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.05;">
    </div>
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { Phone, BookOpen, Award, CheckCircle, Heart, Shield } from 'lucide-vue-next'
import { home, contact } from '@/routes/website'

// Company highlights data array
const companyHighlights = [
  {
    id: 1,
    icon: Award,
    bgColor: 'bg-blue-100',
    iconColor: 'text-blue-600',
    title: '15+ Years'
  },
  {
    id: 2,
    icon: CheckCircle,
    bgColor: 'bg-green-100',
    iconColor: 'text-green-600',
    title: '150+ Projects'
  },
  {
    id: 3,
    icon: Heart,
    bgColor: 'bg-purple-100',
    iconColor: 'text-purple-600',
    title: '98% Satisfaction'
  },
  {
    id: 4,
    icon: Shield,
    bgColor: 'bg-orange-100',
    iconColor: 'text-orange-600',
    title: 'Quality Assured'
  }
]
</script>

<style scoped>
/* About hero section specific styles */
</style>
