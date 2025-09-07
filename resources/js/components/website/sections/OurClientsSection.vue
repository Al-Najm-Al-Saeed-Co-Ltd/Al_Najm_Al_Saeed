<template>
  <!-- Our Clients Section -->
  <section id="clients" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Trusted Partners
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Our Valued Clients
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          We're proud to serve industry leaders and growing businesses across various sectors
        </p>
      </div>

      <!-- Client Logos Grid -->
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-16">
        <div :class="['transition-all duration-1000', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
          <div class="text-center">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <Building class="w-8 h-8 text-blue-600" />
            </div>
            <h3 class="font-semibold text-gray-900">Tech Solutions Inc.</h3>
            <p class="text-sm text-gray-600">Technology</p>
          </div>
        </div>

        <div :class="['transition-all duration-1000 delay-100', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
          <div class="text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <Building2 class="w-8 h-8 text-green-600" />
            </div>
            <h3 class="font-semibold text-gray-900">BuildCorp</h3>
            <p class="text-sm text-gray-600">Construction</p>
          </div>
        </div>

        <div :class="['transition-all duration-1000 delay-200', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
          <div class="text-center">
            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <Building2 class="w-8 h-8 text-purple-600" />
            </div>
            <h3 class="font-semibold text-gray-900">Modern Enterprises</h3>
            <p class="text-sm text-gray-600">Manufacturing</p>
          </div>
        </div>

        <div :class="['transition-all duration-1000 delay-300', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
          <div class="text-center">
            <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <Building class="w-8 h-8 text-orange-600" />
            </div>
            <h3 class="font-semibold text-gray-900">Healthcare Plus</h3>
            <p class="text-sm text-gray-600">Healthcare</p>
          </div>
        </div>

        <div :class="['transition-all duration-1000 delay-400', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
          <div class="text-center">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <Building2 class="w-8 h-8 text-red-600" />
            </div>
            <h3 class="font-semibold text-gray-900">Retail Group</h3>
            <p class="text-sm text-gray-600">Retail</p>
          </div>
        </div>

        <div :class="['transition-all duration-1000 delay-500', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
          <div class="text-center">
            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <Building class="w-8 h-8 text-indigo-600" />
            </div>
            <h3 class="font-semibold text-gray-900">Finance Corp</h3>
            <p class="text-sm text-gray-600">Finance</p>
          </div>
        </div>

        <div :class="['transition-all duration-1000 delay-600', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
          <div class="text-center">
            <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <Building2 class="w-8 h-8 text-teal-600" />
            </div>
            <h3 class="font-semibold text-gray-900">Education Hub</h3>
            <p class="text-sm text-gray-600">Education</p>
          </div>
        </div>

        <div :class="['transition-all duration-1000 delay-700', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
          <div class="text-center">
            <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <Building class="w-8 h-8 text-pink-600" />
            </div>
            <h3 class="font-semibold text-gray-900">Hospitality Group</h3>
            <p class="text-sm text-gray-600">Hospitality</p>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
import { Building, Building2 } from 'lucide-vue-next'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})
</script>
