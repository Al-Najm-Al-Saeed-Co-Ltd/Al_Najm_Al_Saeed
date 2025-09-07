<template>
  <section id="values" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Our Values
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          What Drives Us
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Our core values shape every decision we make and every project we undertake
        </p>
      </div>

      <!-- Values Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Quality & Excellence -->
        <div :class="['transition-all duration-1000', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
            <CheckCircle class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Quality & Excellence</h3>
          <p class="text-gray-600 leading-relaxed">
            We never compromise on quality. Every project is executed with meticulous attention to detail, 
            using the finest materials and latest techniques to ensure exceptional results.
          </p>
        </div>

        <!-- Integrity & Trust -->
        <div :class="['transition-all duration-1000 delay-200', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
            <Shield class="w-8 h-8 text-green-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Integrity & Trust</h3>
          <p class="text-gray-600 leading-relaxed">
            Honesty and transparency are at the heart of our business. We build lasting relationships 
            through open communication, fair pricing, and reliable service delivery.
          </p>
        </div>

        <!-- Innovation & Growth -->
        <div :class="['transition-all duration-1000 delay-400', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
            <Zap class="w-8 h-8 text-purple-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Innovation & Growth</h3>
          <p class="text-gray-600 leading-relaxed">
            We embrace new technologies and methodologies to stay ahead of the curve, continuously 
            improving our services and expanding our capabilities.
          </p>
        </div>

        <!-- Customer Focus -->
        <div :class="['transition-all duration-1000 delay-600', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6">
            <Heart class="w-8 h-8 text-orange-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Customer Focus</h3>
          <p class="text-gray-600 leading-relaxed">
            Our clients' success is our success. We listen carefully to their needs and work tirelessly 
            to exceed their expectations in every project we undertake.
          </p>
        </div>

        <!-- Sustainability -->
        <div :class="['transition-all duration-1000 delay-800', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-teal-100 rounded-2xl flex items-center justify-center mb-6">
            <Globe class="w-8 h-8 text-teal-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Sustainability</h3>
          <p class="text-gray-600 leading-relaxed">
            We are committed to environmentally responsible practices, using sustainable materials and 
            energy-efficient solutions to minimize our environmental impact.
          </p>
        </div>

        <!-- Safety First -->
        <div :class="['transition-all duration-1000 delay-1000', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
            <Shield class="w-8 h-8 text-red-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Safety First</h3>
          <p class="text-gray-600 leading-relaxed">
            The safety of our team, clients, and the community is paramount. We maintain the highest 
            safety standards and continuously train our staff on best practices.
          </p>
        </div>
      </div>

      <!-- Call to Action -->
      <div :class="['mt-16 transition-all duration-1000 delay-1200', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']">
        <div class="bg-gradient-to-r from-brand-green to-brand-green-dark rounded-2xl p-8 text-center text-white">
          <h3 class="text-2xl md:text-3xl font-bold mb-4 text-white">Ready to Work With Us?</h3>
          <p class="text-xl text-white mb-8 max-w-2xl mx-auto">
            Experience the difference that our values-driven approach makes in your next project
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <Link 
              :href="contact.url()" 
              class="inline-flex items-center px-8 py-4 bg-white text-brand-green hover:bg-gray-100 font-semibold rounded-lg transition-colors duration-200"
            >
              Start Your Project
              <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </Link>
            <Link 
              :href="services.url()" 
              class="inline-flex items-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-brand-green font-semibold rounded-lg transition-colors duration-200"
            >
              View Our Services
            </Link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { contact, services } from '@/routes/website'
import { CheckCircle, Shield, Zap, Heart, Globe } from 'lucide-vue-next'

defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})
</script>
