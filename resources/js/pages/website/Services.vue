<template>
  <WebsiteLayout>
    <SEO
      title="Construction Company Riyadh | شركة مقاولات الرياض | Building Contractor Services"
      description="Leading construction company in Riyadh offering building construction, renovation, and general contracting services. Licensed construction contractor serving Riyadh and all Saudi Arabia. Villa construction, commercial construction, renovation services."
      keywords="Construction Company Riyadh, شركة مقاولات الرياض, Building Contractor Riyadh, General Contractor Riyadh, مقاول بناء الرياض, Villa Construction Riyadh, Commercial Construction Riyadh, Renovation Contractor Riyadh, Construction Services Saudi Arabia"
      url="/service"
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
  "name": "Construction Company Riyadh - Building Contractor Services",
  "description": "Leading construction company in Riyadh offering building construction, renovation, and general contracting services. Licensed construction contractor serving Riyadh and all Saudi Arabia.",
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
  "serviceType": "Construction Services",
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
    "name": "Construction Services Catalog",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Building Construction Riyadh",
          "description": "Professional building construction services in Riyadh"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Villa Construction Riyadh",
          "description": "Custom villa construction and design services in Riyadh"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Commercial Construction Riyadh",
          "description": "Commercial building construction and renovation services"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Renovation Contractor Riyadh",
          "description": "Professional renovation and remodeling services in Riyadh"
        }
      }
    ]
  }
}
</script>
