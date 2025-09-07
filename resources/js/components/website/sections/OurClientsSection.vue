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
        <div 
          v-for="(client, index) in clients" 
          :key="client.id"
          :class="[
            'transition-all duration-1000',
            `delay-${index * 100}`,
            visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
          ]" 
          class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-shadow duration-300"
        >
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
import { Building, Building2 } from 'lucide-vue-next'

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
    icon: Building,
    bgColor: 'bg-blue-100',
    iconColor: 'text-blue-600',
    name: 'Tech Solutions Inc.',
    industry: 'Technology'
  },
  {
    id: 2,
    icon: Building2,
    bgColor: 'bg-green-100',
    iconColor: 'text-green-600',
    name: 'BuildCorp',
    industry: 'Construction'
  },
  {
    id: 3,
    icon: Building2,
    bgColor: 'bg-purple-100',
    iconColor: 'text-purple-600',
    name: 'Modern Enterprises',
    industry: 'Manufacturing'
  },
  {
    id: 4,
    icon: Building,
    bgColor: 'bg-orange-100',
    iconColor: 'text-orange-600',
    name: 'Healthcare Plus',
    industry: 'Healthcare'
  },
  {
    id: 5,
    icon: Building2,
    bgColor: 'bg-red-100',
    iconColor: 'text-red-600',
    name: 'Retail Group',
    industry: 'Retail'
  },
  {
    id: 6,
    icon: Building,
    bgColor: 'bg-indigo-100',
    iconColor: 'text-indigo-600',
    name: 'Finance Corp',
    industry: 'Finance'
  },
  {
    id: 7,
    icon: Building2,
    bgColor: 'bg-teal-100',
    iconColor: 'text-teal-600',
    name: 'Education Hub',
    industry: 'Education'
  },
  {
    id: 8,
    icon: Building,
    bgColor: 'bg-pink-100',
    iconColor: 'text-pink-600',
    name: 'Hospitality Group',
    industry: 'Hospitality'
  }
]
</script>

