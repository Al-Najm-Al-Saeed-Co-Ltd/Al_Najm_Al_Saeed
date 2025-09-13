<template>
  <WebsiteLayout>
    <SEO title="Best HVAC Maintenance Company Riyadh | مقاول صيانة تكييف الرياض | Al Najm Al Saeed"
      description="Best HVAC maintenance company in Riyadh, Saudi Arabia. Professional HVAC maintenance, repair, installation services. 24/7 emergency HVAC support. Licensed HVAC contractor serving all Riyadh districts with expert maintenance solutions."
      keywords="Best HVAC Maintenance Company Riyadh, مقاول صيانة تكييف الرياض, HVAC Maintenance Riyadh, Best HVAC Company Riyadh, HVAC Service Riyadh, AC Maintenance Riyadh, HVAC Repair Riyadh, HVAC Installation Riyadh, مقاول تكييف الرياض, شركة صيانة تكييف الرياض"
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
  "name": "Al Najm Al Saeed Co. Ltd. - Best HVAC Maintenance Company Riyadh",
  "url": "https://alsaeedstar.com",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://alsaeedstar.com/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  },
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "Al Najm Al Saeed Co. Ltd.",
    "alternateName": "مقاول صيانة تكييف الرياض",
    "description": "Best HVAC maintenance company in Riyadh, Saudi Arabia. Professional HVAC maintenance, repair, and installation services.",
    "image": "https://alsaeedstar.com/assets/website/logo.png",
    "telephone": "+966-53-616-1198",
    "email": "info@alsaeedstar.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Prince Abdulaziz bin Musaed bin Julawi",
      "addressLocality": "Riyadh",
      "addressRegion": "Riyadh Province",
      "postalCode": "12628",
      "addressCountry": "SA"
    },
    "openingHours": "Mo-Th 08:00-17:00",
    "priceRange": "$$",
    "currenciesAccepted": "SAR",
    "paymentAccepted": "Cash, Credit Card, Bank Transfer",
    "areaServed": [
      {
        "@type": "City",
        "name": "Riyadh"
      },
      {
        "@type": "Country",
        "name": "Saudi Arabia"
      }
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Best HVAC Maintenance Services Riyadh",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "HVAC Maintenance Riyadh",
            "description": "Professional HVAC maintenance services in Riyadh - best maintenance company"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "AC Maintenance Riyadh",
            "description": "Expert AC maintenance and repair services in Riyadh"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "HVAC Installation Riyadh",
            "description": "Professional HVAC system installation in Riyadh"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Emergency HVAC Services Riyadh",
            "description": "24/7 emergency HVAC maintenance and repair services in Riyadh"
          }
        }
      ]
    }
  }
}

// Lifecycle hooks
onMounted(initialize)
onUnmounted(cleanup)
</script>

<style scoped>
/* Home page specific styles - most styles are now in individual section components */
</style>