<template>
  <WebsiteLayout>
    <SEO
      title="Career Opportunities - Join Our HVAC Team | Al Najm Al Saeed Co. Ltd."
      description="Join Al Najm Al Saeed Co. Ltd. team! Explore career opportunities in HVAC industry. We're hiring HVAC technicians, project managers, sales representatives, and customer service professionals in Saudi Arabia."
      keywords="HVAC jobs Saudi Arabia, HVAC technician jobs, HVAC career opportunities, HVAC company jobs, HVAC project manager jobs, HVAC sales jobs, HVAC customer service jobs"
      url="/career"
      :structured-data="careerStructuredData"
    />

    <!-- Hero Section -->
    <CareerHeroSection />

    <!-- Why Work With Us Section -->
    <CareerWhyWorkWithUsSection />

    <!-- Job Openings Section -->
    <CareerJobOpeningsSection />

    <!-- Benefits Section -->
    <CareerBenefitsSection />

    <!-- Application Process Section -->
    <CareerApplicationProcessSection />

    <!-- CTA Section -->
    <CTASection />
  </WebsiteLayout>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import SEO from '@/components/SEO.vue'
import {
  CareerHeroSection,
  CareerWhyWorkWithUsSection,
  CareerJobOpeningsSection,
  CareerBenefitsSection,
  CareerApplicationProcessSection,
  CTASection
} from '@/components/website/sections'
import { useScrollAnimations } from '@/composables/useScrollAnimations'

// Structured data for Career page
const careerStructuredData = {
  "@type": "JobPosting",
  "title": "HVAC Career Opportunities",
  "description": "Join our team of HVAC professionals in Saudi Arabia",
  "hiringOrganization": {
    "@type": "Organization",
    "name": "Al Najm Al Saeed Co. Ltd.",
    "sameAs": "https://alnajmalsaeed.com"
  },
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "SA",
      "addressLocality": "Riyadh"
    }
  },
  "employmentType": "FULL_TIME",
  "workHours": "40 hours per week",
  "datePosted": "2024-01-01",
  "validThrough": "2024-12-31"
}

// Use scroll animations composable
const { visibleSections, initialize, cleanup } = useScrollAnimations()

// Lifecycle hooks
onMounted(initialize)
onUnmounted(cleanup)
</script>

<style scoped>
/* Career page specific styles */
</style>
