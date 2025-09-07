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

    <!-- Our Clients Section -->
    <OurClientsSection :visible="visibleSections.has('clients')" />

    <!-- Testimonials Section -->
    <TestimonialsSection :visible="visibleSections.has('testimonials')" />

    <!-- Career Section -->
    <!-- <CareerSection :visible="visibleSections.has('career')" /> -->

    <!-- Team Section -->
    <TeamSection :visible="visibleSections.has('team')" />

    <!-- Contact Section -->
    <ContactSection :visible="visibleSections.has('contact')" />

  </WebsiteLayout>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { Head } from '@inertiajs/vue3'
import {
  HeroSection,
  AboutSection,
  ServicesSection,
  StatisticsSection,
  OurClientsSection,
  TestimonialsSection,
  CareerSection,
  TeamSection,
  ContactSection
} from '@/components/website/sections'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import { useScrollAnimations } from '@/composables/useScrollAnimations'

// Use scroll animations composable
const { visibleSections, initialize, cleanup } = useScrollAnimations()

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

// Lifecycle hooks
onMounted(initialize)
onUnmounted(cleanup)
</script>

<style scoped>
/* Home page specific styles - most styles are now in individual section components */
</style>