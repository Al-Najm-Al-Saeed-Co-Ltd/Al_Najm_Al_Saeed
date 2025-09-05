<template>
  <!-- Statistics Section -->
  <section id="statistics" class="py-20 bg-brand-green text-white" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div class="stat-item">
          <div class="text-4xl md:text-5xl font-bold mb-2" :data-count="150">0</div>
          <div class="text-lg md:text-xl">Projects Completed</div>
        </div>
        <div class="stat-item">
          <div class="text-4xl md:text-5xl font-bold mb-2" :data-count="25">0</div>
          <div class="text-lg md:text-xl">Years Experience</div>
        </div>
        <div class="stat-item">
          <div class="text-4xl md:text-5xl font-bold mb-2" :data-count="50">0</div>
          <div class="text-lg md:text-xl">Expert Team Members</div>
        </div>
        <div class="stat-item">
          <div class="text-4xl md:text-5xl font-bold mb-2" :data-count="98">0</div>
          <div class="text-lg md:text-xl">% Client Satisfaction</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { onMounted, watch } from 'vue'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// Counter animation
const animateCounters = () => {
  const counters = document.querySelectorAll('.stat-item [data-count]')
  counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-count'))
    const duration = 2000 // 2 seconds
    const increment = target / (duration / 16) // 60fps
    let current = 0
    
    const timer = setInterval(() => {
      current += increment
      if (current >= target) {
        current = target
        clearInterval(timer)
      }
      counter.textContent = Math.floor(current)
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

<style scoped>
.animate-fade-in-up {
  animation: fadeInUp 0.8s ease-out forwards;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>