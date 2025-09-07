<template>
  <section id="mission" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Our Foundation
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Mission, Vision & Values
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          The principles that guide everything we do and drive us toward excellence
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Mission -->
        <div :class="['transition-all duration-1000', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
            <Zap class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
          <p class="text-gray-600 leading-relaxed">
            To deliver exceptional construction, HVAC, and technology services that exceed client expectations 
            while maintaining the highest standards of quality, safety, and innovation. We are committed to 
            building lasting relationships through integrity, professionalism, and superior craftsmanship.
          </p>
        </div>

        <!-- Vision -->
        <div :class="['transition-all duration-1000 delay-200', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
            <Eye class="w-8 h-8 text-green-600" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
          <p class="text-gray-600 leading-relaxed">
            To be the leading integrated services provider in the region, recognized for our innovation, 
            reliability, and commitment to sustainable development. We envision a future where our solutions 
            contribute to building smarter, more efficient, and environmentally responsible communities.
          </p>
        </div>

        <!-- Values -->
        <div :class="['transition-all duration-1000 delay-400', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']" class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
            <Heart class="w-8 h-8 text-purple-600" />
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Values</h3>
          <ul class="space-y-3 text-gray-600">
            <li class="flex items-start space-x-2">
              <Check class="w-5 h-5 text-purple-500 mt-0.5 flex-shrink-0" />
              <span>Quality & Excellence</span>
            </li>
            <li class="flex items-start space-x-2">
              <Check class="w-5 h-5 text-purple-500 mt-0.5 flex-shrink-0" />
              <span>Integrity & Trust</span>
            </li>
            <li class="flex items-start space-x-2">
              <Check class="w-5 h-5 text-purple-500 mt-0.5 flex-shrink-0" />
              <span>Innovation & Growth</span>
            </li>
            <li class="flex items-start space-x-2">
              <Check class="w-5 h-5 text-purple-500 mt-0.5 flex-shrink-0" />
              <span>Customer Focus</span>
            </li>
            <li class="flex items-start space-x-2">
              <Check class="w-5 h-5 text-purple-500 mt-0.5 flex-shrink-0" />
              <span>Sustainability</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Additional Values Section -->
      <div :class="['mt-16 transition-all duration-1000 delay-600', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']">
        <div class="hero-gradient rounded-2xl p-8 text-white">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mx-auto mb-4">
                <Shield class="w-6 h-6 text-brand-green" />
              </div>
               <h4 class="font-semibold mb-2 text-white">Safety First</h4>
               <p class="text-sm text-white">Zero tolerance for safety compromises</p>
            </div>
            
            <div class="text-center">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mx-auto mb-4">
                <Clock class="w-6 h-6 text-brand-green" />
              </div>
               <h4 class="font-semibold mb-2 text-white">On-Time Delivery</h4>
               <p class="text-sm text-white">Meeting deadlines consistently</p>
            </div>
            
            <div class="text-center">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mx-auto mb-4">
                <Users class="w-6 h-6 text-brand-green" />
              </div>
               <h4 class="font-semibold mb-2 text-white">Team Collaboration</h4>
               <p class="text-sm text-white">Working together for success</p>
            </div>
            
            <div class="text-center">
              <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mx-auto mb-4">
                <Zap class="w-6 h-6 text-brand-green" />
              </div>
               <h4 class="font-semibold mb-2 text-white">Continuous Innovation</h4>
               <p class="text-sm text-white">Embracing new technologies</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Shield, Clock, Users, Zap, Eye, Heart, Check } from 'lucide-vue-next'

defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})
</script>
