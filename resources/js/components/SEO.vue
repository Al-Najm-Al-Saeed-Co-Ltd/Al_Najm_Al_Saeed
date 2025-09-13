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
    <meta name="geo.region" content="SA">
    <meta name="geo.placename" content="Riyadh">
    <meta name="geo.position" content="24.7136;46.6753">
    <meta name="ICBM" content="24.7136, 46.6753">
    <meta name="DC.title" :content="title">
    <meta name="DC.description" :content="description">
    <meta name="DC.language" content="en">
    <meta name="DC.coverage" content="Saudi Arabia">
    <meta name="DC.subject" content="Best HVAC Maintenance Company Riyadh, HVAC Services, Air Conditioning Maintenance, Saudi Arabia">
    <link rel="canonical" :href="canonicalUrl">
    <link rel="alternate" hreflang="en" :href="canonicalUrl">
    <link rel="alternate" hreflang="ar" :href="canonicalUrl + '?lang=ar'">
    
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
    default: 'best hvac maintenance company riyadh, HVAC maintenance Riyadh, air conditioning maintenance Saudi Arabia, heating repair Riyadh, commercial HVAC services Riyadh, residential HVAC maintenance, HVAC installation Riyadh, air conditioning repair Riyadh, HVAC company Saudi Arabia, professional HVAC services, AC maintenance Riyadh, emergency AC repair Riyadh, HVAC services in Riyadh, heating and cooling services Riyadh, HVAC companies near me, air conditioning repair Riyadh, AC repair Riyadh, HVAC contractor Riyadh, air conditioning installation Riyadh, HVAC technician Riyadh'
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
  const baseUrl = 'https://alsaeedstar.com'
  return `${baseUrl}${props.url}`
})

const structuredData = computed(() => {
  const baseStructuredData = {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Al Najm Al Saeed Co. Ltd.",
    "description": "Best HVAC maintenance company in Riyadh. Professional heating, ventilation, and air conditioning installation, repair, and maintenance services in Saudi Arabia.",
    "url": "https://alsaeedstar.com",
    "logo": "https://alsaeedstar.com/assets/website/logo.png",
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
      "addressLocality": "Riyadh",
      "addressRegion": "Riyadh Province"
    },
    "areaServed": [
      {
        "@type": "City",
        "name": "Riyadh",
        "containedInPlace": {
          "@type": "Country",
          "name": "Saudi Arabia"
        }
      }
    ],
    "sameAs": [
      "https://www.linkedin.com/company/al-najm-al-saeed",
      "https://www.facebook.com/alnajmalsaeed",
      "https://www.instagram.com/alnajmalsaeed"
    ],
    "foundingDate": "2010",
    "numberOfEmployees": "50-100",
    "slogan": "Create your dream with us, where every step brings joy!",
    "serviceArea": {
      "@type": "Country",
      "name": "Saudi Arabia"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Best HVAC Maintenance Services in Riyadh",
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
            "name": "Best HVAC Preventive Maintenance in Riyadh",
            "description": "Professional preventive maintenance programs in Riyadh to ensure optimal HVAC system performance, energy efficiency, and extended equipment lifespan"
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