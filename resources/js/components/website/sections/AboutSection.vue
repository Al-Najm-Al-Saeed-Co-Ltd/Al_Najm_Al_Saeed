<template>
  <!-- About Section -->
  <section id="about" class="py-20 bg-white" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">About Al Najm Al Saeed Co. Ltd.</h2>
        <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
          At Al Najm Al Saeed Co. Ltd., we excel in delivering top-tier construction and maintenance services,
          alongside advanced HVAC and IT solutions. Our dedication to quality and innovation ensures that we provide
          tailored, comprehensive solutions that address the unique requirements of each client.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
        <div>
          <h3 class="text-3xl font-bold text-gray-900 mb-6">Innovative Solutions for a Diverse Range of Needs</h3>
          <p class="text-lg text-gray-600 mb-6">
            From creating robust structures to maintaining them with precision, and optimizing your HVAC and IT
            systems, our team is committed to delivering exceptional results on time and to the highest standards.
          </p>
          <p class="text-lg text-gray-600">
            Our expertise spans across various sectors, ensuring that we meet the evolving needs of our clients with
            precision and excellence. Al Najm Al Saeed Co. Ltd. is your trusted partner for high-quality, reliable,
            and efficient services that drive success and sustainability in every project we undertake.
          </p>
        </div>
        <div class="bg-gray-100 rounded-2xl p-8">
          <div class="grid grid-cols-2 gap-6">
            <div 
              v-for="feature in aboutFeatures" 
              :key="feature.id"
              class="text-center"
            >
              <div class="w-16 h-16 bg-brand-green rounded-full flex items-center justify-center mx-auto mb-4">
                <component :is="feature.icon" class="w-8 h-8 text-white" />
              </div>
              <h4 class="font-semibold text-gray-900 mb-2">{{ feature.title }}</h4>
              <p class="text-sm text-gray-600">{{ feature.description }}</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
import { TrendingUp, Users, Settings, CheckSquare } from 'lucide-vue-next'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// About features data array
const aboutFeatures = [
  {
    id: 1,
    icon: TrendingUp,
    title: 'Strategic Planning',
    description: 'Comprehensive project planning and execution'
  },
  {
    id: 2,
    icon: Users,
    title: 'Skilled Professionals',
    description: 'Highly qualified and experienced team'
  },
  {
    id: 3,
    icon: Settings,
    title: 'Cutting-Edge Technology',
    description: 'Latest tools and technologies'
  },
  {
    id: 4,
    icon: CheckSquare,
    title: 'Efficient Management',
    description: 'Streamlined project management'
  }
]
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
</style>