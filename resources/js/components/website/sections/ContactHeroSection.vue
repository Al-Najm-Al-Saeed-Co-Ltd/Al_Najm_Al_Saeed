<template>
  <section class="hero-gradient min-h-screen flex items-center relative overflow-hidden pt-20 sm:pt-24">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <!-- Left Column - Text Content -->
        <div class="text-white order-2 lg:order-1">
          <!-- Breadcrumb -->
          <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
              <li class="inline-flex items-center">
                <Link :href="home()"
                  class="inline-flex items-center text-gray-200 hover:text-white transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                  </path>
                </svg>
                Home
                </Link>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-gray-200" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span class="ml-1 text-gray-200 md:ml-2">Contact Us</span>
                </div>
              </li>
            </ol>
          </nav>

          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Get In Touch
            <span class="text-white">With Our Team</span>
          </h1>
          <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-100 leading-relaxed">
            Ready to start your next project? We're here to help you bring your vision to life.
            Contact us today for a free consultation and quote.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 mb-12">
            <a href="#contact-form"
              class="bg-white text-brand-green px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-gray-100 transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
              <MessageCircle class="w-5 h-5 mr-2" />Send Message
            </a>
            <a href="tel:+966536161198"
              class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-white hover:text-brand-green transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
              <Phone class="w-5 h-5 mr-2" />Call Now
            </a>
          </div>
        </div>

        <!-- Right Column - Contact Info Cards -->
        <div class="order-1 lg:order-2">
          <div class="grid grid-cols-1 gap-4">
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300">
              <div class="flex items-center">
                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                  <Phone class="w-5 h-5 text-blue-600" />
                </div>
                <div class="text-left">
                  <h3 class="text-white font-semibold text-xl">Call Us</h3>
                  <a href="tel:+966536161198"
                    class="text-gray-200 text-base hover:text-white transition-colors duration-200">+966 (53)
                    616-1198</a>
                </div>
              </div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300">
              <div class="flex items-center">
                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                  <Mail class="w-5 h-5 text-green-600" />
                </div>
                <div class="text-left">
                  <h3 class="text-white font-semibold text-xl">Email Us</h3>
                  <a href="mailto:info@alsaeedstar.com"
                    class="text-gray-200 text-base hover:text-white transition-colors duration-200">info@alsaeedstar.com</a>
                </div>
              </div>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300">
              <div class="flex items-center">
                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                  <MapPin class="w-5 h-5 text-purple-600" />
                </div>
                <div class="text-left">
                  <h3 class="text-white font-semibold text-xl">Our Office</h3>
                  <a href="https://maps.app.goo.gl/YmkdUbSnbZJiUcQP6" target="_blank"
                    class="text-gray-200 text-base hover:text-white transition-colors duration-200">Prince Abdulaziz
                    bin Musaed bin Julawi 12628</a>
                </div>
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
import { home } from '@/routes/website'
import { Phone, Mail, MapPin, MessageCircle } from 'lucide-vue-next'
</script>
