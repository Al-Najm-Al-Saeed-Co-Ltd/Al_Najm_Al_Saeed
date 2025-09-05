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
        <!-- HVAC Systems -->
        <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
            <Snowflake class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">HVAC Systems</h3>
          <p class="text-gray-600">
            Providing expert HVAC solutions for residential and commercial spaces, focusing on efficient air
            conditioning, heating, and ventilation systems to ensure optimal indoor climate control.
          </p>
        </div>

        <!-- Building Construction -->
        <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
          <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
            <HardHat class="w-8 h-8 text-green-600" />
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Building Construction</h3>
          <p class="text-gray-600">
            Delivering comprehensive building construction services, from initial planning to final finishes, ensuring
            quality, safety, and durability for residential, commercial, and industrial projects.
          </p>
        </div>

        <!-- Interior Design -->
        <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
          <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
            <Paintbrush class="w-8 h-8 text-purple-600" />
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Interior Design</h3>
          <p class="text-gray-600">
            Creating unique, functional interior spaces that reflect client personalities and needs, combining
            aesthetic appeal with practical design for residential and commercial environments.
          </p>
        </div>

        <!-- Electro-Mechanical Works -->
        <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
          <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mb-6">
            <Zap class="w-8 h-8 text-orange-600" />
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Electro-Mechanical Works</h3>
          <p class="text-gray-600">
            Specializing in electro-mechanical installations, including electrical and plumbing systems, providing
            reliable, safe, and efficient solutions for diverse residential and commercial needs.
          </p>
        </div>

        <!-- Shades -->
        <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
          <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
            <Umbrella class="w-8 h-8 text-yellow-600" />
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Shades</h3>
          <p class="text-gray-600">
            Offering innovative shading solutions, from retractable awnings to custom shade structures, designed to
            enhance outdoor comfort and protect against harsh weather conditions.
          </p>
        </div>

        <!-- Website Development -->
        <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
          <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
            <Laptop class="w-8 h-8 text-indigo-600" />
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Website Development</h3>
          <p class="text-gray-600">
            Crafting user-friendly, modern websites with responsive design, tailored functionality, and SEO
            optimization, aimed at enhancing client visibility and engagement online.
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