<template>
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Systems We Service
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          HVAC Systems We Service
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          We work with all major HVAC brands and system types
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Air Conditioning -->
        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <Wind class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Air Conditioning</h3>
          <p class="text-gray-600">Central AC, Split Systems, Window Units</p>
        </div>

        <!-- Heating Systems -->
        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <Flame class="w-8 h-8 text-red-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Heating Systems</h3>
          <p class="text-gray-600">Furnaces, Heat Pumps, Boilers</p>
        </div>

        <!-- Ventilation -->
        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <RefreshCw class="w-8 h-8 text-green-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Ventilation</h3>
          <p class="text-gray-600">Exhaust Fans, Air Purifiers, Ventilation Systems</p>
        </div>

        <!-- Controls -->
        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <Smartphone class="w-8 h-8 text-purple-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Controls</h3>
          <p class="text-gray-600">Smart Thermostats, Zoning Systems, Controls</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Wind, Flame, RefreshCw, Smartphone } from 'lucide-vue-next'
</script>
