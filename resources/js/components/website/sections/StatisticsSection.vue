<template>
  <!-- Statistics Section -->
  <section id="statistics" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Our Achievements
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Numbers That Speak
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Our track record of success and commitment to excellence
        </p>
      </div>

      <!-- Statistics Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div v-for="(stat, index) in statistics" :key="stat.id" :class="[
          'transition-all duration-1000',
          `delay-${index * 200}`,
          visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
        ]" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
          <div :class="`w-16 h-16 ${stat.bgColor} rounded-2xl flex items-center justify-center mb-6 mx-auto`">
            <component :is="stat.icon" :class="`w-8 h-8 ${stat.iconColor}`" />
          </div>
          <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" :data-count="stat.count"
            :data-suffix="stat.suffix">0{{ stat.suffix }}</div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">{{ stat.title }}</h3>
          <p class="text-gray-600 leading-relaxed">
            {{ stat.description }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { onMounted, watch } from 'vue'
import { CheckCircle, Shield, Zap, Heart } from 'lucide-vue-next'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// Statistics data array
const statistics = [
  {
    id: 1,
    icon: CheckCircle,
    bgColor: 'bg-blue-100',
    iconColor: 'text-blue-600',
    count: 150,
    suffix: '+',
    title: 'Projects Completed',
    description: 'Successfully delivered projects across various industries'
  },
  {
    id: 2,
    icon: Shield,
    bgColor: 'bg-green-100',
    iconColor: 'text-green-600',
    count: 25,
    suffix: '+',
    title: 'Years Experience',
    description: 'Decades of expertise in construction and technology'
  },
  {
    id: 3,
    icon: Zap,
    bgColor: 'bg-purple-100',
    iconColor: 'text-purple-600',
    count: 50,
    suffix: '+',
    title: 'Expert Team Members',
    description: 'Skilled professionals dedicated to excellence'
  },
  {
    id: 4,
    icon: Heart,
    bgColor: 'bg-orange-100',
    iconColor: 'text-orange-600',
    count: 98,
    suffix: '%',
    title: 'Client Satisfaction',
    description: 'Consistently exceeding client expectations'
  }
]

// Counter animation
const animateCounters = () => {
  const counters = document.querySelectorAll('[data-count]')
  counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-count'))
    const suffix = counter.getAttribute('data-suffix') || ''
    const duration = 2000 // 2 seconds
    const increment = target / (duration / 16) // 60fps
    let current = 0

    const timer = setInterval(() => {
      current += increment
      if (current >= target) {
        current = target
        clearInterval(timer)
      }
      counter.textContent = Math.floor(current) + suffix
    }, 16)
  })
}

// Watch for visibility changes
watch(() => props.visible, (newValue) => {
  if (newValue) {
    animateCounters()
  }
})

onMounted(() => {
  if (props.visible) {
    animateCounters()
  }
})
</script>