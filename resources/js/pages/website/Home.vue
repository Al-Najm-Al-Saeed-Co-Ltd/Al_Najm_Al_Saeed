<template>
  <WebsiteLayout>
    <SEO title="Al Najm Al Saeed Co. Ltd. - Professional HVAC Services in Saudi Arabia"
      description="Leading HVAC company in Saudi Arabia offering professional heating, ventilation, and air conditioning services. Installation, repair, maintenance, and 24/7 emergency services in Riyadh and across Saudi Arabia."
      keywords="HVAC Saudi Arabia, heating ventilation air conditioning, HVAC installation Riyadh, HVAC repair Saudi Arabia, commercial HVAC, residential HVAC, air conditioning services, HVAC maintenance"
      url="/" :structured-data="homeStructuredData" />

    <!-- Hero Section -->
    <HeroSection />

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
    <CareerSection :visible="visibleSections.has('career')" />

    <!-- Team Section -->
    <TeamSection :visible="visibleSections.has('team')" />

    <!-- Contact Section -->
    <ContactSection :visible="visibleSections.has('contact')" />

  </WebsiteLayout>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
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
import SEO from '@/components/SEO.vue'
import { useScrollAnimations } from '@/composables/useScrollAnimations'

// Use scroll animations composable
const { visibleSections, initialize, cleanup } = useScrollAnimations()

// Structured data for Home page
const homeStructuredData = {
  "@type": "WebSite",
  "name": "Al Najm Al Saeed Co. Ltd.",
  "url": "https://alnajmalsaeed.com",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://alnajmalsaeed.com/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  },
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "Al Najm Al Saeed Co. Ltd.",
    "image": "https://alnajmalsaeed.com/assets/website/logo.png",
    "telephone": "+966-53-616-1198",
    "email": "info@alnajmalsaeed.com",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "SA",
      "addressLocality": "Riyadh"
    },
    "openingHours": "Mo-Fr 08:00-18:00",
    "priceRange": "$$"
  }
}

// Lifecycle hooks
onMounted(initialize)
onUnmounted(cleanup)
</script>

<style scoped>
/* Home page specific styles - most styles are now in individual section components */
</style>