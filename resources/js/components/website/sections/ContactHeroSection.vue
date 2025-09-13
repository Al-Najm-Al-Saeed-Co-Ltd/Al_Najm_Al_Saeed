<template>
  <section class="hero-gradient min-h-[70vh] flex items-center relative overflow-hidden pt-20 sm:pt-24">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 py-16 sm:py-20">
      <div class="text-center text-white">
        <!-- Breadcrumb -->
        <nav class="flex justify-center mb-8" aria-label="Breadcrumb">
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
        <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-100 leading-relaxed max-w-4xl mx-auto">
          Ready to Start Your Next Project?
        </p>
        <p class="text-sm sm:text-base md:text-lg mb-8 text-gray-200 leading-relaxed max-w-5xl mx-auto">
          We're here to help you bring your vision to life. Contact us today for a free consultation, 
          expert advice, and competitive quotes. Our experienced team is ready to provide professional 
          HVAC solutions tailored to your specific needs.
        </p>
        
        <!-- Key Features -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8 max-w-4xl mx-auto">
          <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-center">
            <Phone class="w-6 h-6 mx-auto mb-2 text-white" />
            <p class="text-xs text-gray-200">24/7 Support</p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-center">
            <MessageCircle class="w-6 h-6 mx-auto mb-2 text-white" />
            <p class="text-xs text-gray-200">Free Consultation</p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-center">
            <Clock class="w-6 h-6 mx-auto mb-2 text-white" />
            <p class="text-xs text-gray-200">Quick Response</p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-center">
            <CheckCircle class="w-6 h-6 mx-auto mb-2 text-white" />
            <p class="text-xs text-gray-200">Expert Advice</p>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center">
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
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-16 sm:top-20 left-4 sm:left-10 w-16 h-16 sm:w-20 sm:h-20 rounded-full"
      style="background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.1;"></div>
    <div
      class="absolute bottom-16 sm:bottom-20 right-4 sm:right-10 w-24 h-24 sm:w-32 sm:h-32 rounded-full"
      style="animation-delay: 2s; background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.05;">
    </div>
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { home } from '@/routes/website'
import { Phone, Mail, MapPin, MessageCircle, Clock, CheckCircle } from 'lucide-vue-next'
</script>
