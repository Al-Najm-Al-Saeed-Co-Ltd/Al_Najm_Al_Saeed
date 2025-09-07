<template>
  <section id="services-grid" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- HVAC Systems -->
        <div
          class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
          <div
            class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-200 transition-colors duration-300">
            <Wind class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">HVAC Systems</h3>
          <p class="text-gray-600 leading-relaxed">
            Providing expert HVAC solutions for residential and commercial spaces, focusing on efficient air
            conditioning, heating, and ventilation systems to ensure optimal indoor climate control.
          </p>
        </div>

        <!-- Building Construction -->
        <div
          class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
          <div
            class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-green-200 transition-colors duration-300">
            <Building2 class="w-8 h-8 text-green-600" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Building Construction</h3>
          <p class="text-gray-600 leading-relaxed">
            Delivering comprehensive building construction services, from initial planning to final finishes, ensuring
            quality, safety, and durability for residential, commercial, and industrial projects.
          </p>
        </div>

        <!-- Interior Design -->
        <div
          class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
          <div
            class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors duration-300">
            <Palette class="w-8 h-8 text-purple-600" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Interior Design</h3>
          <p class="text-gray-600 leading-relaxed">
            Creating unique, functional interior spaces that reflect client personalities and needs, combining
            aesthetic appeal with practical design for residential and commercial environments.
          </p>
        </div>

        <!-- Electro-Mechanical Works -->
        <div
          class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
          <div
            class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-200 transition-colors duration-300">
            <Zap class="w-8 h-8 text-orange-600" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Electro-Mechanical Works</h3>
          <p class="text-gray-600 leading-relaxed">
            Specializing in electro-mechanical installations, including electrical and plumbing systems, providing
            reliable, safe, and efficient solutions for diverse residential and commercial needs.
          </p>
        </div>

        <!-- Shades -->
        <div
          class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
          <div
            class="w-16 h-16 bg-teal-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-teal-200 transition-colors duration-300">
            <Sun class="w-8 h-8 text-teal-600" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Shades</h3>
          <p class="text-gray-600 leading-relaxed">
            Offering innovative shading solutions, from retractable awnings to custom shade structures, designed to
            enhance outdoor comfort and protect against harsh weather conditions.
          </p>
        </div>

        <!-- Website Development -->
        <div
          class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
          <div
            class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-indigo-200 transition-colors duration-300">
            <Monitor class="w-8 h-8 text-indigo-600" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Website Development</h3>
          <p class="text-gray-600 leading-relaxed">
            Crafting user-friendly, modern websites with responsive design, tailored functionality, and SEO
            optimization, aimed at enhancing client visibility and engagement online.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Wind, Building2, Palette, Zap, Sun, Monitor } from 'lucide-vue-next'
</script>
