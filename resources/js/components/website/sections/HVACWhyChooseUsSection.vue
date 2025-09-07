<template>
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Why Choose Us
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Why Choose Our HVAC Services
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Professional HVAC services you can trust for all your heating and cooling needs
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="text-center">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <UserCheck class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Technicians</h3>
          <p class="text-gray-600">Our certified HVAC professionals bring years of experience and ongoing training to every job.</p>
        </div>

        <div class="text-center">
          <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <Clock class="w-8 h-8 text-red-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">24/7 Emergency Service</h3>
          <p class="text-gray-600">HVAC emergencies don't wait for business hours. We're available when you need us most.</p>
        </div>

        <div class="text-center">
          <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <Zap class="w-8 h-8 text-green-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Energy Efficiency Focus</h3>
          <p class="text-gray-600">We prioritize energy-efficient solutions that save you money and reduce environmental impact.</p>
        </div>

        <div class="text-center">
          <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
            <Shield class="w-8 h-8 text-purple-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Quality Guarantee</h3>
          <p class="text-gray-600">We stand behind our work with comprehensive warranties and quality guarantees.</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { UserCheck, Clock, Zap, Shield } from 'lucide-vue-next'
</script>
