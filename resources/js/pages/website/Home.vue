<template>
  <WebsiteLayout>
    <Head title="Home" />

    <!-- Hero Section -->
    <HeroSection :slides="slides" />

    <!-- About Section -->
    <AboutSection :visible="visibleSections.has('about')" />

    <!-- Services Section -->
    <ServicesSection :visible="visibleSections.has('services')" />

    <!-- Statistics Section -->
    <StatisticsSection :visible="visibleSections.has('statistics')" />

    <!-- Testimonials Section -->
    <TestimonialsSection :visible="visibleSections.has('testimonials')" />

    <!-- Career Section -->
    <CareerSection :visible="visibleSections.has('career')" />

    <!-- Team Section -->
    <TeamSection :visible="visibleSections.has('team')" />

    <!-- Contact Section -->
    <ContactSection :visible="visibleSections.has('contact')" />

  </WebsiteLayout>
</template>

<script setup>
import { ref, onMounted, onUnmounted, nextTick } from 'vue'
import { Head } from '@inertiajs/vue3'
import {
  HeroSection,
  AboutSection,
  ServicesSection,
  StatisticsSection,
  TestimonialsSection,
  CareerSection,
  TeamSection,
  ContactSection
} from '@/components/website/sections'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'

// Reactive data
const visibleSections = ref(new Set())

// Slider data for HeroSection
const slides = ref([
  {
    image: 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
    alt: 'Construction Site'
  },
  {
    image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
    alt: 'HVAC System'
  },
  {
    image: 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
    alt: 'IT Services'
  },
  {
    image: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
    alt: 'Maintenance Work'
  }
])

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
/* Home page specific styles - most styles are now in individual section components */
</style>