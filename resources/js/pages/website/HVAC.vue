<template>
  <WebsiteLayout>
    <SEO
      title="HVAC Contractor Riyadh | تكييف الرياض | AC Repair & Installation Services"
      description="Professional HVAC contractor in Riyadh offering AC repair, installation, and maintenance services. Emergency HVAC services, central AC installation, split AC services. Licensed HVAC company serving all Riyadh districts."
      keywords="HVAC Contractor Riyadh, تكييف الرياض, AC Repair Riyadh, HVAC Installation Riyadh, صيانة تكييف الرياض, تركيب تكييف الرياض, Central AC Riyadh, Split AC Installation Riyadh, Emergency AC Repair Riyadh, HVAC Maintenance Riyadh"
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
  "name": "HVAC Contractor Riyadh - Professional HVAC Services",
  "description": "Professional HVAC contractor in Riyadh offering AC repair, installation, maintenance, and emergency services. Licensed HVAC company serving all Riyadh districts.",
  "provider": {
    "@type": "Organization",
    "name": "Al Najm Al Saeed Co. Ltd.",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Riyadh",
      "addressCountry": "SA"
    },
    "telephone": "+966-53-616-1198"
  },
  "areaServed": {
    "@type": "City",
    "name": "Riyadh"
  },
  "serviceType": "HVAC Services",
  "offers": [
    {
      "@type": "Offer",
      "name": "AC Repair Riyadh",
      "description": "Professional AC repair services in Riyadh",
      "price": "59-109",
      "priceCurrency": "SAR"
    },
    {
      "@type": "Offer",
      "name": "HVAC Installation Riyadh",
      "description": "Professional HVAC system installation in Riyadh",
      "price": "109-249",
      "priceCurrency": "SAR"
    },
    {
      "@type": "Offer",
      "name": "HVAC Maintenance Riyadh",
      "description": "Regular HVAC maintenance services in Riyadh",
      "price": "69-299",
      "priceCurrency": "SAR"
    },
    {
      "@type": "Offer",
      "name": "Emergency AC Repair Riyadh",
      "description": "24/7 emergency AC repair services in Riyadh",
      "price": "150-400",
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
