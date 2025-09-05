<template>
  <!-- Testimonials Section -->
  <section id="testimonials" class="py-20 bg-white" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">What Our Clients Say</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Don't just take our word for it - hear from our satisfied clients
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-50 p-8 rounded-2xl shadow-lg">
          <div class="flex items-center mb-6">
            <div class="flex text-yellow-400">
              <Star v-for="i in 5" :key="i" class="w-5 h-5 fill-current" />
            </div>
          </div>
          <p class="text-gray-600 mb-6 italic">
            "Al Najm Al Saeed delivered exceptional HVAC services for our office building. Their team was professional, efficient, and the results exceeded our expectations."
          </p>
          <div class="flex items-center">
            <div class="w-12 h-12 bg-brand-green rounded-full flex items-center justify-center mr-4">
              <User class="w-6 h-6 text-white" />
            </div>
            <div>
              <h4 class="font-semibold text-gray-900">Ahmed Al-Rashid</h4>
              <p class="text-sm text-gray-600">CEO, Tech Solutions Inc.</p>
            </div>
          </div>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl shadow-lg">
          <div class="flex items-center mb-6">
            <div class="flex text-yellow-400">
              <Star v-for="i in 5" :key="i" class="w-5 h-5 fill-current" />
            </div>
          </div>
          <p class="text-gray-600 mb-6 italic">
            "The construction quality and attention to detail were outstanding. They completed our project on time and within budget. Highly recommended!"
          </p>
          <div class="flex items-center">
            <div class="w-12 h-12 bg-brand-green rounded-full flex items-center justify-center mr-4">
              <User class="w-6 h-6 text-white" />
            </div>
            <div>
              <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
              <p class="text-sm text-gray-600">Project Manager, BuildCorp</p>
            </div>
          </div>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl shadow-lg">
          <div class="flex items-center mb-6">
            <div class="flex text-yellow-400">
              <Star v-for="i in 5" :key="i" class="w-5 h-5 fill-current" />
            </div>
          </div>
          <p class="text-gray-600 mb-6 italic">
            "Their IT solutions transformed our business operations. The team was knowledgeable and provided excellent ongoing support."
          </p>
          <div class="flex items-center">
            <div class="w-12 h-12 bg-brand-green rounded-full flex items-center justify-center mr-4">
              <User class="w-6 h-6 text-white" />
            </div>
            <div>
              <h4 class="font-semibold text-gray-900">Mohammed Al-Zahra</h4>
              <p class="text-sm text-gray-600">IT Director, Modern Enterprises</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Star, User } from 'lucide-vue-next'

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