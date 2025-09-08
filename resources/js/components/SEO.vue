<template>
  <Head>
    <!-- Primary Meta Tags -->
    <title>{{ title }}</title>
    <meta name="title" :content="title">
    <meta name="description" :content="description">
    <meta name="keywords" :content="keywords">
    <meta name="author" content="Al Najm Al Saeed Co. Ltd.">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" :content="canonicalUrl">
    <meta property="og:title" :content="title">
    <meta property="og:description" :content="description">
    <meta property="og:image" :content="image">
    <meta property="og:site_name" content="Al Najm Al Saeed Co. Ltd.">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" :content="canonicalUrl">
    <meta property="twitter:title" :content="title">
    <meta property="twitter:description" :content="description">
    <meta property="twitter:image" :content="image">

    <!-- Additional Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#10B981">
    <link rel="canonical" :href="canonicalUrl">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  </Head>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import { computed, onMounted } from 'vue'

const props = defineProps({
  title: {
    type: String,
    required: true
  },
  description: {
    type: String,
    required: true
  },
  keywords: {
    type: String,
    default: 'HVAC, heating, ventilation, air conditioning, Saudi Arabia, Riyadh, installation, repair, maintenance, commercial HVAC, residential HVAC'
  },
  image: {
    type: String,
    default: '/assets/website/og-image.jpg'
  },
  url: {
    type: String,
    required: true
  },
  type: {
    type: String,
    default: 'website'
  },
  structuredData: {
    type: Object,
    default: () => ({})
  }
})

const canonicalUrl = computed(() => {
  const baseUrl = 'https://alnajmalsaeed.com'
  return `${baseUrl}${props.url}`
})

const structuredData = computed(() => {
  const baseStructuredData = {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Al Najm Al Saeed Co. Ltd.",
    "description": "Professional HVAC services in Saudi Arabia. Heating, ventilation, and air conditioning installation, repair, and maintenance.",
    "url": "https://alnajmalsaeed.com",
    "logo": "https://alnajmalsaeed.com/assets/website/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+966-53-616-1198",
      "contactType": "customer service",
      "areaServed": "SA",
      "availableLanguage": ["English", "Arabic"]
    },
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "SA",
      "addressLocality": "Riyadh"
    },
    "sameAs": [
      "https://www.linkedin.com/company/al-najm-al-saeed",
      "https://www.facebook.com/alnajmalsaeed",
      "https://www.instagram.com/alnajmalsaeed"
    ],
    "serviceArea": {
      "@type": "Country",
      "name": "Saudi Arabia"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Comprehensive HVAC Services",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "HVAC System Installation",
            "description": "Complete HVAC system installation for residential and commercial properties including ductwork, equipment setup, and system commissioning"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "HVAC Repair & Troubleshooting",
            "description": "Expert diagnosis and repair of all HVAC equipment including air conditioners, heaters, ventilation systems, and ductwork"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Preventive Maintenance",
            "description": "Regular maintenance programs to ensure optimal system performance, energy efficiency, and extended equipment lifespan"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Air Conditioning Services",
            "description": "Complete AC services including installation, repair, maintenance, and replacement of residential and commercial air conditioning units"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Heating System Services",
            "description": "Professional heating system installation, repair, and maintenance for furnaces, boilers, and heat pumps"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Ventilation & Air Quality",
            "description": "Indoor air quality solutions including ventilation system design, air purification, and humidity control"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Ductwork Services",
            "description": "Duct design, installation, cleaning, sealing, and repair services for optimal air distribution and energy efficiency"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Commercial HVAC Solutions",
            "description": "Specialized HVAC services for commercial buildings, offices, retail spaces, and industrial facilities"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Emergency HVAC Services",
            "description": "24/7 emergency HVAC repair and maintenance services for urgent heating and cooling issues"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Energy Efficiency Consulting",
            "description": "HVAC energy audits and efficiency optimization to reduce energy costs and improve system performance"
          }
        }
      ]
    }
  }

  // Merge with page-specific structured data
  return JSON.stringify({ ...baseStructuredData, ...props.structuredData })
})

// Inject structured data script
onMounted(() => {
  const script = document.createElement('script')
  script.type = 'application/ld+json'
  script.textContent = structuredData.value
  document.head.appendChild(script)
})
</script>