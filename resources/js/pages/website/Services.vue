<template>
  <WebsiteLayout>
    <SEO
      title="HVAC Services - Installation, Repair & Maintenance | Al Najm Al Saeed Co. Ltd."
      description="Comprehensive HVAC services in Saudi Arabia. Professional installation, repair, maintenance, and emergency services for residential and commercial properties. 24/7 support available."
      keywords="HVAC services Saudi Arabia, HVAC installation, HVAC repair, HVAC maintenance, commercial HVAC services, residential HVAC, emergency HVAC repair, HVAC system upgrade"
      url="/services"
      :structured-data="servicesStructuredData"
    />

    <!-- Hero Section -->
    <ServicesHeroSection />

    <!-- Services Grid -->
    <ServicesGridSection />

    <!-- Why Choose Us Section -->
    <WhyChooseUsSection />

    <!-- Process Section -->
    <ProcessSection />

    <!-- Industries We Serve Section -->
    <IndustriesSection />

    <!-- Call to Action Section -->
    <CTASection />
  </WebsiteLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { contact, home } from '@/routes/website'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import SEO from '@/components/SEO.vue'
import {
  ServicesHeroSection,
  ServicesGridSection,
  WhyChooseUsSection,
  ProcessSection,
  IndustriesSection,
  CTASection
} from '@/components/website/sections'

// Structured data for Services page
const servicesStructuredData = {
  "@type": "Service",
  "name": "HVAC Services",
  "description": "Comprehensive HVAC services including installation, repair, maintenance, and emergency services",
  "provider": {
    "@type": "Organization",
    "name": "Al Najm Al Saeed Co. Ltd."
  },
  "serviceType": "HVAC Services",
  "areaServed": {
    "@type": "Country",
    "name": "Saudi Arabia"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "HVAC Services Catalog",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "HVAC Installation",
          "description": "Professional HVAC system installation for residential and commercial properties"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "HVAC Repair",
          "description": "Fast and reliable HVAC repair services with 24/7 emergency support"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "HVAC Maintenance",
          "description": "Preventive maintenance services to ensure optimal system performance"
        }
      }
    ]
  }
}
</script>
