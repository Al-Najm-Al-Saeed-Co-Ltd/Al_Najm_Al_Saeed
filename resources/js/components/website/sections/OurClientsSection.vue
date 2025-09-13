<template>
  <!-- Our Clients Section -->
  <section id="clients" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Our Clients
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Trusted Partners
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          We're proud to serve industry leaders and growing businesses across various sectors
        </p>
      </div>

      <!-- Client Logos Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 md:gap-8 mb-16">
        <div v-for="(client, index) in clients" :key="client.id" :class="[
          'transition-all duration-1000',
          `delay-${index * 100}`,
          visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
        ]"
          class="bg-brand-green/5 rounded-xl sm:rounded-2xl p-4 sm:p-6 md:p-8 flex items-center justify-center border border-brand-green/20 hover:border-brand-green/40 hover:shadow-lg transition-all duration-300">
          <div class="text-center w-full">
            <div
              class="w-36 h-36 sm:w-28 sm:h-28 md:w-32 md:h-32 lg:w-36 lg:h-36 bg-white rounded-lg flex items-center justify-center mx-auto mb-3 sm:mb-4 border border-brand-green/10">
              <img :src="client.logo" :alt="client.name"
                class="w-32 h-32 sm:w-24 sm:h-24 md:w-28 md:h-28 lg:w-32 lg:h-32 object-contain" />
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ client.name }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ client.industry }}</p>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>

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
    name: 'Ministry Of Sports',
    industry: 'Government',
    logo: '/assets/clients/our_clients_1.png'
  },
  {
    id: 2,
    name: 'Al Qussie International Company',
    industry: 'International',
    logo: '/assets/clients/our_clients_2.png'
  },
  {
    id: 3,
    name: 'M Al-Shawi Est.',
    industry: 'Construction',
    logo: '/assets/clients/our_clients_3.png'
  },
  {
    id: 4,
    name: 'Al Majal Al Arabi Group',
    industry: 'Group',
    logo: '/assets/clients/our_clients_4.png'
  },
  {
    id: 5,
    name: 'Zamil Air Conditioners',
    industry: 'HVAC',
    logo: '/assets/clients/our_clients_5.png'
  },
  {
    id: 6,
    name: 'Madarat Alwasat For Contracting Company',
    industry: 'Contracting',
    logo: '/assets/clients/our_clients_6.png'
  },
  {
    id: 7,
    name: 'Al Taj Al Mudee Contracting Co.',
    industry: 'Contracting',
    logo: '/assets/clients/our_clients_7.png'
  },
  {
    id: 8,
    name: 'Riyadh Chamber',
    industry: 'Chamber',
    logo: '/assets/clients/our_clients_8.png'
  },
  {
    id: 9,
    name: 'Al Mabani General Contractors',
    industry: 'Contracting',
    logo: '/assets/clients/our_clients_9.png'
  },
  {
    id: 10,
    name: 'Saudi Cycling Federation',
    industry: 'Sports',
    logo: '/assets/clients/our_clients_10.png'
  },
  {
    id: 11,
    name: 'Arrouq Al Jouz Trading Company',
    industry: 'Trading',
    logo: '/assets/clients/our_clients_11.png'
  },
  {
    id: 12,
    name: 'Nasma Al Farris contracting & Fabrication',
    industry: 'Fabrication',
    logo: '/assets/clients/our_clients_12.png'
  },
  {
    id: 13,
    name: 'Awwad Arabia Refrigeration & Air Conditioning LLC',
    industry: 'HVAC',
    logo: '/assets/clients/our_clients_13.png'
  }
]
</script>
