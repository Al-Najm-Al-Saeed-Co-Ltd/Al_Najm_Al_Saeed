<template>
  <section class="py-20 bg-gradient-to-r from-brand-green to-brand-green-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
        Ready to Start Your Project?
      </h2>
      <p class="text-xl text-white mb-8 max-w-3xl mx-auto">
        Let us bring your vision to life with our comprehensive range of services and expert team
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <Link :href="contact()"
          class="inline-flex items-center px-8 py-4 bg-white text-brand-green hover:bg-gray-100 font-semibold rounded-lg transition-colors duration-200 shadow-lg hover:shadow-xl">
        Get Free Quote
        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
        </Link>
        <Link :href="home()"
          class="inline-flex items-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-brand-green font-semibold rounded-lg transition-colors duration-200">
        Learn More About Us
        </Link>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { home, contact } from '@/routes/website'
</script>
