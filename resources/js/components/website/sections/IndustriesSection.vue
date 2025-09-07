<template>
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Industries
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Industries We Serve
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Our expertise spans across multiple industries, delivering tailored solutions for diverse needs
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <Building2 class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Commercial</h3>
          <p class="text-gray-600">Office buildings, retail spaces, and commercial complexes with modern infrastructure</p>
        </div>

        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Residential</h3>
          <p class="text-gray-600">Homes, apartments, and residential communities with comfort and efficiency</p>
        </div>

        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Industrial</h3>
          <p class="text-gray-600">Manufacturing facilities, warehouses, and industrial complexes with robust systems</p>
        </div>

        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Education</h3>
          <p class="text-gray-600">Schools, universities, and educational institutions with modern learning environments</p>
        </div>

        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-teal-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Healthcare</h3>
          <p class="text-gray-600">Hospitals, clinics, and medical facilities with specialized systems and compliance</p>
        </div>

        <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Hospitality</h3>
          <p class="text-gray-600">Hotels, restaurants, and entertainment venues with guest comfort and efficiency</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Building2 } from 'lucide-vue-next'
</script>
