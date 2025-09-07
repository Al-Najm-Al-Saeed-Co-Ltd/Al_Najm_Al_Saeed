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
        <div v-for="(value, index) in values" :key="value.id" :class="[
          'transition-all duration-1000',
          `delay-${index * 200}`,
          visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
        ]" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div :class="`w-16 h-16 ${value.bgColor} rounded-2xl flex items-center justify-center mb-6`">
            <component :is="value.icon" :class="`w-8 h-8 ${value.iconColor}`" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">{{ value.title }}</h3>
          <p class="text-gray-600 leading-relaxed">
            {{ value.description }}
          </p>
        </div>
      </div>

      <!-- Call to Action -->
      <div
        :class="['mt-16 transition-all duration-1000 delay-1200', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']">
        <div class="bg-gradient-to-r from-brand-green to-brand-green-dark rounded-2xl p-8 text-center text-white">
          <h3 class="text-2xl md:text-3xl font-bold mb-4 text-white">Ready to Work With Us?</h3>
          <p class="text-xl text-white mb-8 max-w-2xl mx-auto">
            Experience the difference that our values-driven approach makes in your next project
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <Link :href="contact.url()"
              class="inline-flex items-center px-8 py-4 bg-white text-brand-green hover:bg-gray-100 font-semibold rounded-lg transition-colors duration-200">
            Start Your Project
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
            </Link>
            <Link :href="services.url()"
              class="inline-flex items-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-brand-green font-semibold rounded-lg transition-colors duration-200">
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

// Values data array
const values = [
  {
    id: 1,
    icon: CheckCircle,
    bgColor: 'bg-blue-100',
    iconColor: 'text-blue-600',
    title: 'Quality & Excellence',
    description: 'We never compromise on quality. Every project is executed with meticulous attention to detail, using the finest materials and latest techniques to ensure exceptional results.'
  },
  {
    id: 2,
    icon: Shield,
    bgColor: 'bg-green-100',
    iconColor: 'text-green-600',
    title: 'Integrity & Trust',
    description: 'Honesty and transparency are at the heart of our business. We build lasting relationships through open communication, fair pricing, and reliable service delivery.'
  },
  {
    id: 3,
    icon: Zap,
    bgColor: 'bg-purple-100',
    iconColor: 'text-purple-600',
    title: 'Innovation & Growth',
    description: 'We embrace new technologies and methodologies to stay ahead of the curve, continuously improving our services and expanding our capabilities.'
  },
  {
    id: 4,
    icon: Heart,
    bgColor: 'bg-orange-100',
    iconColor: 'text-orange-600',
    title: 'Customer Focus',
    description: 'Our clients\' success is our success. We listen carefully to their needs and work tirelessly to exceed their expectations in every project we undertake.'
  },
  {
    id: 5,
    icon: Globe,
    bgColor: 'bg-teal-100',
    iconColor: 'text-teal-600',
    title: 'Sustainability',
    description: 'We are committed to environmentally responsible practices, using sustainable materials and energy-efficient solutions to minimize our environmental impact.'
  },
  {
    id: 6,
    icon: Shield,
    bgColor: 'bg-red-100',
    iconColor: 'text-red-600',
    title: 'Safety First',
    description: 'The safety of our team, clients, and the community is paramount. We maintain the highest safety standards and continuously train our staff on best practices.'
  }
]
</script>
