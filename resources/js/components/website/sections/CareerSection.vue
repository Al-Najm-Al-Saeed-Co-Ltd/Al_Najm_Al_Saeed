<template>
  <!-- Career Section -->
  <section id="career" class="py-20 bg-gray-50" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Join Our Team</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Be part of a dynamic team that's shaping the future of construction, HVAC, and IT solutions
        </p>
      </div>

      <div class="bg-white rounded-2xl p-10 shadow-lg">
        <div class="text-center">
          <Users class="w-16 h-16 text-brand-green mb-8 mx-auto" />
          <h3 class="text-2xl font-bold text-gray-900 mb-6">Career Opportunities</h3>
          <p class="text-lg text-gray-600 mb-10 leading-relaxed">
            We're always looking for talented professionals to join our growing team.
            If you're passionate about excellence and innovation, we'd love to hear from you.
          </p>
          <a href="#contact"
            class="bg-brand-green hover:bg-brand-green/90 text-white px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 inline-flex items-center justify-center">
            <Mail class="w-5 h-5 mr-2" />Send Your Resume
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Users, Mail } from 'lucide-vue-next'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
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