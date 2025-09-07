<template>
  <!-- Team Section -->
  <section id="team" class="py-20 bg-white" :class="{ 'animate-fade-in-up': visible }" aria-labelledby="team-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <header class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Our Team
        </span>
        <h2 id="team-heading" class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Meet the Experts
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Our dedicated professionals bring decades of experience and expertise to every project
        </p>
      </header>

      <!-- Team Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12" role="list">
        <article v-for="(member, index) in teamMembers" :key="member.id"
          class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
          :style="{ animationDelay: `${index * 100}ms` }" role="listitem">
          <!-- Profile Image -->
          <div class="relative mb-6">
            <div
              class="w-32 h-32 rounded-full overflow-hidden mx-auto border-4 border-brand-green shadow-lg group-hover:border-brand-green/80 transition-all duration-300">
              <img :src="member.image" :alt="`${member.name} - ${member.position}`" class="w-full h-full object-cover"
                loading="lazy" width="128" height="128" />
            </div>
            <div
              class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-brand-green rounded-full flex items-center justify-center shadow-lg">
              <User class="w-4 h-4 text-white" aria-hidden="true" />
            </div>
          </div>

          <!-- Member Info -->
          <header class="text-center mb-4">
            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ member.name }}</h3>
            <p class="text-brand-green font-semibold text-lg">{{ member.position }}</p>
          </header>

          <!-- Description -->
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            {{ member.description }}
          </p>

          <!-- Social Links -->
          <nav class="flex justify-center space-x-4" :aria-label="`Social links for ${member.name}`">
            <a v-if="member.socialLinks.linkedin" :href="member.socialLinks.linkedin"
              class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-blue-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 group"
              :aria-label="`LinkedIn profile for ${member.name}`" target="_blank" rel="noopener noreferrer">
              <Linkedin class="w-5 h-5" aria-hidden="true" />
            </a>
            <a v-if="member.socialLinks.facebook" :href="member.socialLinks.facebook"
              class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-blue-500 hover:text-blue-500 hover:bg-blue-50 transition-all duration-300 group"
              :aria-label="`Facebook profile for ${member.name}`" target="_blank" rel="noopener noreferrer">
              <Facebook class="w-5 h-5" aria-hidden="true" />
            </a>
            <a v-if="member.socialLinks.email" :href="`mailto:${member.socialLinks.email}`"
              class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-green-500 hover:text-green-500 hover:bg-green-50 transition-all duration-300 group"
              :aria-label="`Email ${member.name}`">
              <MessageCircle class="w-5 h-5" aria-hidden="true" />
            </a>
          </nav>
        </article>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { User, Linkedin, Facebook, MessageCircle } from 'lucide-vue-next'

// Types
interface TeamMember {
  id: string
  name: string
  position: string
  description: string
  image: string
  socialLinks: {
    linkedin?: string
    facebook?: string
    email?: string
  }
}

// Props
const props = defineProps<{
  visible?: boolean
}>()

// Team members data
const teamMembers = ref<TeamMember[]>([
  {
    id: 'as-usmani',
    name: 'A.S Usmani',
    position: 'CEO & Founder',
    description: 'With over 20 years of experience in construction and project management, A.S leads our company with a vision for excellence and innovation.',
    image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80',
    socialLinks: {
      linkedin: '#',
      facebook: '#',
      email: '#'
    }
  },
  {
    id: 'areeb-usmani',
    name: 'Areeb Saeed Usmani',
    position: 'Director',
    description: 'A strategic leader with extensive experience in business development and operations management, Areeb ensures our projects meet the highest standards of quality and efficiency.',
    image: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80',
    socialLinks: {
      linkedin: '#',
      facebook: '#',
      email: '#'
    }
  },
  {
    id: 'suhail-usmani',
    name: 'Suhail Saeed Usmani',
    position: 'Project Manager',
    description: 'An experienced project manager specializing in construction and maintenance projects, Suhail coordinates complex operations to deliver exceptional results on time and within budget.',
    image: 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80',
    socialLinks: {
      linkedin: '#',
      facebook: '#',
      email: '#'
    }
  }
])
</script>

<style scoped>
.animate-fade-in-up {
  animation: fadeInUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Optimize animations for better performance */
.group {
  will-change: transform, box-shadow;
}

.group:hover {
  will-change: transform, box-shadow;
}
</style>