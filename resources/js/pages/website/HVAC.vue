<template>
  <WebsiteLayout>
    <SEO
      title="Professional HVAC Services & Pricing - Al Najm Al Saeed Co. Ltd."
      description="Professional HVAC services with transparent pricing in Saudi Arabia. AC installation, repair, maintenance, and emergency services. View our detailed pricing for all HVAC services including deep cleaning, repairs, and installations."
      keywords="HVAC services pricing, AC repair Saudi Arabia, HVAC installation cost, AC maintenance pricing, HVAC technician services, air conditioning repair, HVAC emergency services, AC deep cleaning"
      url="/hvac"
      :structured-data="hvacStructuredData"
    />

    <!-- Hero Section -->
    <HVACHeroSection />

    <!-- Services Overview Section -->
    <HVACServicesSection />

    <!-- Systems We Service Section -->
    <HVACSystemsSection />

    <!-- Why Choose Us Section -->
    <HVACWhyChooseUsSection />

    <!-- Pricing Tables Section -->
    <HVACPricingSection />

    <!-- CTA Section -->
    <CTASection />
  </WebsiteLayout>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import SEO from '@/components/SEO.vue'
import {
  HVACHeroSection,
  HVACServicesSection,
  HVACSystemsSection,
  HVACWhyChooseUsSection,
  HVACPricingSection,
  CTASection
} from '@/components/website/sections'
import { useScrollAnimations } from '@/composables/useScrollAnimations'

// Structured data for HVAC page
const hvacStructuredData = {
  "@type": "Service",
  "name": "HVAC Services with Pricing",
  "description": "Professional HVAC services with transparent pricing including installation, repair, maintenance, and emergency services",
  "provider": {
    "@type": "Organization",
    "name": "Al Najm Al Saeed Co. Ltd."
  },
  "offers": [
    {
      "@type": "Offer",
      "name": "AC Deep Cleaning",
      "description": "Professional AC deep cleaning services",
      "price": "69-299",
      "priceCurrency": "SAR"
    },
    {
      "@type": "Offer",
      "name": "HVAC Repair Services",
      "description": "Fast and reliable HVAC repair services",
      "price": "59-109",
      "priceCurrency": "SAR"
    },
    {
      "@type": "Offer",
      "name": "HVAC Installation",
      "description": "Professional HVAC system installation",
      "price": "109-249",
      "priceCurrency": "SAR"
    }
  ]
}

// Use scroll animations composable
const { visibleSections, initialize, cleanup } = useScrollAnimations()

// Lifecycle hooks
onMounted(initialize)
onUnmounted(cleanup)
</script>

<style scoped>
/* HVAC page specific styles */
</style>
