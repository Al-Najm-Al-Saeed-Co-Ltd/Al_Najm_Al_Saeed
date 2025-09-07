<template>
  <WebsiteLayout>
    <Head title="About Us" />

    <!-- Hero Section -->
    <AboutHeroSection />

    <!-- Company Story Section -->
    <CompanyStorySection :visible="visibleSections.has('story')" />

    <!-- Mission & Vision Section -->
    <MissionVisionSection :visible="visibleSections.has('mission')" />

    <!-- Team Section -->
    <TeamSection :visible="visibleSections.has('team')" />

    <!-- Values Section -->
    <ValuesSection :visible="visibleSections.has('values')" />

    <!-- Our Clients Section -->
    <OurClientsSection :visible="visibleSections.has('clients')" />

    <!-- Statistics Section -->
    <StatisticsSection :visible="visibleSections.has('statistics')" />

    <!-- Testimonials Section -->
    <TestimonialsSection :visible="visibleSections.has('testimonials')" />

    <!-- Contact CTA Section -->
    <ContactCTASection :visible="visibleSections.has('contact')" />

  </WebsiteLayout>
</template>

<script setup>
import { ref, onMounted, onUnmounted, nextTick } from 'vue'
import { Head } from '@inertiajs/vue3'
import {
  AboutHeroSection,
  CompanyStorySection,
  MissionVisionSection,
  TeamSection,
  ValuesSection,
  OurClientsSection,
  StatisticsSection,
  TestimonialsSection,
  ContactCTASection
} from '@/components/website/sections'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'

// Reactive data
const visibleSections = ref(new Set())

// Scroll-triggered animations
const handleIntersection = (entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      visibleSections.value.add(entry.target.id)
    }
  })
}

const setupScrollAnimations = () => {
  const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  })

  const sections = document.querySelectorAll('section[id]')
  sections.forEach(section => observer.observe(section))

  return observer
}

// Smooth scrolling
const smoothScrollTo = (elementId) => {
  const element = document.getElementById(elementId)
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' })
  }
}

// Lifecycle hooks
let scrollObserver = null

onMounted(async () => {
  await nextTick()
  
  // Setup scroll animations
  scrollObserver = setupScrollAnimations()
  
  // Add smooth scrolling to navigation links
  const navLinks = document.querySelectorAll('a[href^="#"]')
  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault()
      const targetId = link.getAttribute('href').substring(1)
      smoothScrollTo(targetId)
    })
  })
})

onUnmounted(() => {
  if (scrollObserver) {
    scrollObserver.disconnect()
  }
})
</script>

<style scoped>
/* About page specific styles - most styles are now in individual section components */
</style>
