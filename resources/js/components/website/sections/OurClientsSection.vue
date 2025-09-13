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
        <div v-for="(client, index) in clients" :key="client.id" :class="[
          'transition-all duration-1000',
          `delay-${index * 100}`,
          visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
        ]"
          class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
          <div class="text-center">
            <div :class="`w-16 h-16 ${client.bgColor} rounded-full flex items-center justify-center mx-auto mb-4`">
              <component :is="client.icon" :class="`w-8 h-8 ${client.iconColor}`" />
            </div>
            <h3 class="font-semibold text-gray-900">{{ client.name }}</h3>
            <p class="text-sm text-gray-600">{{ client.industry }}</p>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
import { Building, Building2, Users, Briefcase, Shield, Award, Truck, Zap, Heart, Globe, Home, Wrench } from 'lucide-vue-next'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// Clients data array
const clients = [
  {
    id: 1,
    icon: Award,
    bgColor: 'bg-blue-100',
    iconColor: 'text-blue-600',
    name: 'Ministry Of Sports',
    industry: 'Government'
  },
  {
    id: 2,
    icon: Globe,
    bgColor: 'bg-green-100',
    iconColor: 'text-green-600',
    name: 'Al Qussie International Company',
    industry: 'International'
  },
  {
    id: 3,
    icon: Building,
    bgColor: 'bg-purple-100',
    iconColor: 'text-purple-600',
    name: 'M Al-Shawi Est.',
    industry: 'Construction'
  },
  {
    id: 4,
    icon: Building2,
    bgColor: 'bg-orange-100',
    iconColor: 'text-orange-600',
    name: 'Al Majal Al Arabi Group',
    industry: 'Group'
  },
  {
    id: 5,
    icon: Zap,
    bgColor: 'bg-red-100',
    iconColor: 'text-red-600',
    name: 'Zamil Air Conditioners',
    industry: 'HVAC'
  },
  {
    id: 6,
    icon: Wrench,
    bgColor: 'bg-indigo-100',
    iconColor: 'text-indigo-600',
    name: 'Madarat Alwasat For Contracting Company',
    industry: 'Contracting'
  },
  {
    id: 7,
    icon: Building2,
    bgColor: 'bg-teal-100',
    iconColor: 'text-teal-600',
    name: 'Al Taj Al Mudee Contracting Co.',
    industry: 'Contracting'
  },
  {
    id: 8,
    icon: Users,
    bgColor: 'bg-pink-100',
    iconColor: 'text-pink-600',
    name: 'Riyadh Chamber',
    industry: 'Chamber'
  },
  {
    id: 9,
    icon: Building,
    bgColor: 'bg-yellow-100',
    iconColor: 'text-yellow-600',
    name: 'Al Mabani General Contractors',
    industry: 'Contracting'
  },
  {
    id: 10,
    icon: Heart,
    bgColor: 'bg-cyan-100',
    iconColor: 'text-cyan-600',
    name: 'Saudi Cycling Federation',
    industry: 'Sports'
  },
  {
    id: 11,
    icon: Truck,
    bgColor: 'bg-emerald-100',
    iconColor: 'text-emerald-600',
    name: 'Arrouq Al Jouz Trading Company',
    industry: 'Trading'
  },
  {
    id: 12,
    icon: Briefcase,
    bgColor: 'bg-rose-100',
    iconColor: 'text-rose-600',
    name: 'Nasma Al Farris contracting & Fabrication',
    industry: 'Fabrication'
  },
  {
    id: 13,
    icon: Zap,
    bgColor: 'bg-violet-100',
    iconColor: 'text-violet-600',
    name: 'Awwad Arabia Refrigeration & Air Conditioning LLC',
    industry: 'HVAC'
  }
]
</script>
