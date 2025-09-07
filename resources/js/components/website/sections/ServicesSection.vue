<template>
  <!-- Services Section -->
  <section id="services" class="py-20 bg-gray-50" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">We Provide The Best Construction, HVAC & IT Services</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Comprehensive solutions tailored to meet your specific needs with excellence and innovation
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
        <div 
          v-for="service in services" 
          :key="service.id"
          class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300"
        >
          <div :class="`w-16 h-16 ${service.bgColor} rounded-lg flex items-center justify-center mb-6`">
            <component :is="service.icon" :class="`w-8 h-8 ${service.iconColor}`" />
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ service.title }}</h3>
          <p class="text-gray-600">
            {{ service.description }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Snowflake, HardHat, Paintbrush, Zap, Umbrella, Laptop } from 'lucide-vue-next'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// Services data array
const services = [
  {
    id: 1,
    icon: Snowflake,
    bgColor: 'bg-blue-100',
    iconColor: 'text-blue-600',
    title: 'HVAC Systems',
    description: 'Providing expert HVAC solutions for residential and commercial spaces, focusing on efficient air conditioning, heating, and ventilation systems to ensure optimal indoor climate control.'
  },
  {
    id: 2,
    icon: HardHat,
    bgColor: 'bg-green-100',
    iconColor: 'text-green-600',
    title: 'Building Construction',
    description: 'Delivering comprehensive building construction services, from initial planning to final finishes, ensuring quality, safety, and durability for residential, commercial, and industrial projects.'
  },
  {
    id: 3,
    icon: Paintbrush,
    bgColor: 'bg-purple-100',
    iconColor: 'text-purple-600',
    title: 'Interior Design',
    description: 'Creating unique, functional interior spaces that reflect client personalities and needs, combining aesthetic appeal with practical design for residential and commercial environments.'
  },
  {
    id: 4,
    icon: Zap,
    bgColor: 'bg-orange-100',
    iconColor: 'text-orange-600',
    title: 'Electro-Mechanical Works',
    description: 'Specializing in electro-mechanical installations, including electrical and plumbing systems, providing reliable, safe, and efficient solutions for diverse residential and commercial needs.'
  },
  {
    id: 5,
    icon: Umbrella,
    bgColor: 'bg-yellow-100',
    iconColor: 'text-yellow-600',
    title: 'Shades',
    description: 'Offering innovative shading solutions, from retractable awnings to custom shade structures, designed to enhance outdoor comfort and protect against harsh weather conditions.'
  },
  {
    id: 6,
    icon: Laptop,
    bgColor: 'bg-indigo-100',
    iconColor: 'text-indigo-600',
    title: 'Website Development',
    description: 'Crafting user-friendly, modern websites with responsive design, tailored functionality, and SEO optimization, aimed at enhancing client visibility and engagement online.'
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

/* Service card hover effects */
.service-card {
  transition: all 0.3s ease;
}

.service-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 25px -5px rgba(61, 153, 112, 0.2), 0 10px 10px -5px rgba(61, 153, 112, 0.1);
}
</style>