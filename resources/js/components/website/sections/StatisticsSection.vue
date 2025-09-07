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
        <!-- Projects Completed -->
        <div :class="['transition-all duration-1000', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 mx-auto">
            <CheckCircle class="w-8 h-8 text-blue-600" />
          </div>
          <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" :data-count="150" data-suffix="+">0+</div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Projects Completed</h3>
          <p class="text-gray-600 leading-relaxed">
            Successfully delivered projects across various industries
          </p>
        </div>

        <!-- Years Experience -->
        <div :class="['transition-all duration-1000 delay-200', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
          <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6 mx-auto">
            <Shield class="w-8 h-8 text-green-600" />
          </div>
          <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" :data-count="25" data-suffix="+">0+</div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Years Experience</h3>
          <p class="text-gray-600 leading-relaxed">
            Decades of expertise in construction and technology
          </p>
        </div>

        <!-- Expert Team Members -->
        <div :class="['transition-all duration-1000 delay-400', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
          <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 mx-auto">
            <Zap class="w-8 h-8 text-purple-600" />
          </div>
          <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" :data-count="50" data-suffix="+">0+</div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Expert Team Members</h3>
          <p class="text-gray-600 leading-relaxed">
            Skilled professionals dedicated to excellence
          </p>
        </div>

        <!-- Client Satisfaction -->
        <div :class="['transition-all duration-1000 delay-600', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
          <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6 mx-auto">
            <Heart class="w-8 h-8 text-orange-600" />
          </div>
          <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" :data-count="98" data-suffix="%">0%</div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Client Satisfaction</h3>
          <p class="text-gray-600 leading-relaxed">
            Consistently exceeding client expectations
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