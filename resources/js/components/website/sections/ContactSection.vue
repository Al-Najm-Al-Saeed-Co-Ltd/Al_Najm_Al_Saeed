<template>
  <!-- Contact Section -->
  <section id="contact" class="py-20 bg-white" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Contact Us</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Get in touch with us for any inquiries about our services
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <div v-for="(contact, index) in contactInfo" :key="contact.id" :class="[
            'transition-all duration-1000',
            `delay-${index * 200}`,
            visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
          ]" class="bg-gray-100 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div :class="`w-16 h-16 ${contact.bgColor} rounded-2xl flex items-center justify-center mx-auto mb-6`">
            <component :is="contact.icon" :class="`w-8 h-8 ${contact.iconColor}`" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">{{ contact.title }}</h3>
          <p class="text-gray-600 leading-relaxed">{{ contact.description }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { MapPin, Phone, Mail } from 'lucide-vue-next'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// Contact info data array
const contactInfo = [
  {
    id: 1,
    icon: MapPin,
    bgColor: 'bg-red-100',
    iconColor: 'text-red-600',
    title: 'Our Address',
    description: 'Prince Abdulaziz bin Musaed bin Julawi 12628'
  },
  {
    id: 2,
    icon: Phone,
    bgColor: 'bg-green-100',
    iconColor: 'text-green-600',
    title: 'Call Us',
    description: '+966 (53) 616-1198'
  },
  {
    id: 3,
    icon: Mail,
    bgColor: 'bg-blue-100',
    iconColor: 'text-blue-600',
    title: 'Email Us',
    description: 'info@alsaeedstar.com'
  }
]
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