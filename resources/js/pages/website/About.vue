<template>
  <WebsiteLayout>
    <SEO
      title="About Al Najm Al Saeed Co. Ltd. - Leading HVAC Company in Saudi Arabia"
      description="Learn about Al Najm Al Saeed Co. Ltd., a leading HVAC company in Saudi Arabia. Our mission, vision, values, and experienced team dedicated to providing exceptional heating, ventilation, and air conditioning services."
      keywords="about HVAC company Saudi Arabia, Al Najm Al Saeed, HVAC company history, HVAC team Saudi Arabia, HVAC mission vision, HVAC company values"
      url="/about"
      :structured-data="aboutStructuredData"
    />

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
import { onMounted, onUnmounted } from 'vue'
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
import SEO from '@/components/SEO.vue'
import { useScrollAnimations } from '@/composables/useScrollAnimations'

// Use scroll animations composable
const { visibleSections, initialize, cleanup } = useScrollAnimations()

// Structured data for About page
const aboutStructuredData = {
  "@type": "AboutPage",
  "mainEntity": {
    "@type": "Organization",
    "name": "Al Najm Al Saeed Co. Ltd.",
    "description": "Leading HVAC company in Saudi Arabia providing professional heating, ventilation, and air conditioning services.",
    "foundingDate": "2010",
    "founder": {
      "@type": "Person",
      "name": "Al Najm Al Saeed"
    },
    "numberOfEmployees": "50-100",
    "slogan": "Professional HVAC Solutions for Your Comfort"
  }
}

// Lifecycle hooks
onMounted(initialize)
onUnmounted(cleanup)
</script>

<style scoped>
/* About page specific styles - most styles are now in individual section components */
</style>
