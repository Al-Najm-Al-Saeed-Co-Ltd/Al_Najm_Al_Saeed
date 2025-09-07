<template>
  <section id="mission" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Our Foundation
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Mission, Vision & Values
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          The principles that guide everything we do and drive us toward excellence
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div 
          v-for="(item, index) in missionVisionItems" 
          :key="item.id"
          :class="[
            'transition-all duration-1000',
            `delay-${index * 200}`,
            visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
          ]" 
          class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300"
        >
          <div :class="`w-16 h-16 ${item.bgColor} rounded-2xl flex items-center justify-center mb-6`">
            <component :is="item.icon" :class="`w-8 h-8 ${item.iconColor}`" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ item.title }}</h3>
          <p class="text-gray-600 leading-relaxed">
            {{ item.description }}
          </p>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
import { Zap, Eye, Heart } from 'lucide-vue-next'

defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// Mission Vision Items data array
const missionVisionItems = [
  {
    id: 1,
    icon: Zap,
    bgColor: 'bg-blue-100',
    iconColor: 'text-blue-600',
    title: 'Our Mission',
    description: 'To deliver exceptional construction, HVAC, and technology services that exceed client expectations while maintaining the highest standards of quality, safety, and innovation. We are committed to building lasting relationships through integrity, professionalism, and superior craftsmanship.'
  },
  {
    id: 2,
    icon: Eye,
    bgColor: 'bg-green-100',
    iconColor: 'text-green-600',
    title: 'Our Vision',
    description: 'To be the leading integrated services provider in the region, recognized for our innovation, reliability, and commitment to sustainable development. We envision a future where our solutions contribute to building smarter, more efficient, and environmentally responsible communities.'
  },
  {
    id: 3,
    icon: Heart,
    bgColor: 'bg-purple-100',
    iconColor: 'text-purple-600',
    title: 'Our Values',
    description: 'We are guided by core values that shape every decision we make: Quality & Excellence, Integrity & Trust, Innovation & Growth, Customer Focus, Sustainability, and Safety First. These principles drive us to deliver exceptional results while building lasting relationships with our clients and community.'
  }
]
</script>
