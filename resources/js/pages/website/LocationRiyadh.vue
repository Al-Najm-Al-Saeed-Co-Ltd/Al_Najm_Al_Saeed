<template>
  <WebsiteLayout>
    <SEO title="Best HVAC Maintenance Company Riyadh Districts | مقاول صيانة تكييف الرياض | All Areas Covered"
      description="Best HVAC maintenance company serving all Riyadh districts including Al Malaz, Al Olaya, Al Nakheel, Al Wurud, and more. Professional HVAC maintenance, AC repair, and installation services across Riyadh. Emergency HVAC maintenance services available 24/7."
      keywords="Best HVAC Maintenance Company Riyadh, مقاول صيانة تكييف الرياض, HVAC Maintenance Al Malaz, HVAC Maintenance Al Olaya, HVAC Maintenance Al Nakheel, HVAC Maintenance Al Wurud, HVAC Maintenance Al Murabba, HVAC Maintenance Al Faisaliyah, HVAC Maintenance Al Sulaimaniyah, HVAC Maintenance Al Rawdah, HVAC Maintenance Al Shifa, HVAC Maintenance Al Mansoura, HVAC Maintenance Al Aziziyah, HVAC Maintenance Al Yamamah, HVAC Maintenance Al Qadisiyah, HVAC Maintenance Al Hamra, HVAC Maintenance Al Izdihar, HVAC Maintenance Al Rabwah, HVAC Maintenance Al Narjis, HVAC Maintenance Al Yasmin, Best HVAC Company Riyadh, HVAC Service Riyadh"
      url="/location/riyadh" :structured-data="locationStructuredData" />

    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center relative overflow-hidden pt-16 sm:pt-20 md:pt-24">
      <div class="absolute inset-0 bg-black opacity-10"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-12 sm:py-16 md:py-20">
        <div class="text-center text-white">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 leading-tight">
            Best HVAC Maintenance Company Serving All
            <span class="text-white block sm:inline">Riyadh Districts</span>
          </h1>
          <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-6 sm:mb-8 text-gray-100 leading-relaxed max-w-4xl mx-auto px-4">
            As the best HVAC maintenance company in Riyadh, we provide professional HVAC maintenance services across all
            Riyadh districts.
            Expert HVAC maintenance, AC repair, and installation services in Al Malaz, Al Olaya, Al Nakheel, Al Wurud,
            and all surrounding areas.
          </p>
          <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 md:gap-6 justify-center px-4">
            <a href="#districts"
              class="bg-white text-brand-green px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-gray-100 transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
              <MapPin class="w-4 h-4 sm:w-5 sm:h-5 mr-2" />View All Districts
            </a>
            <a href="#contact"
              class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-white hover:text-brand-green transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
              <Phone class="w-4 h-4 sm:w-5 sm:h-5 mr-2" />Get Free Quote
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Districts Coverage Section -->
    <section id="districts" class="py-12 sm:py-16 md:py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 px-4">
            Best HVAC Maintenance Services in All Riyadh Districts
          </h2>
          <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto px-4">
            As the best HVAC maintenance company in Riyadh, we provide comprehensive HVAC maintenance services across
            all major districts of Riyadh.
            Our experienced technicians are familiar with every area and can provide quick, reliable HVAC maintenance
            service.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
          <div v-for="district in districts" :key="district.name"
            class="bg-white rounded-xl p-4 sm:p-6 shadow-lg hover:shadow-xl transition duration-300">
            <div class="flex items-start sm:items-center mb-4">
              <div class="w-10 h-10 sm:w-12 sm:h-12 bg-brand-green/10 rounded-lg flex items-center justify-center mr-3 sm:mr-4 flex-shrink-0">
                <MapPin class="w-5 h-5 sm:w-6 sm:h-6 text-brand-green" />
              </div>
              <h3 class="text-lg sm:text-xl font-bold text-gray-900 leading-tight">{{ district.name }}</h3>
            </div>
            <p class="text-sm sm:text-base text-gray-600 mb-4">{{ district.description }}</p>
            <ul class="space-y-2">
              <li v-for="service in district.services" :key="service" class="flex items-center text-xs sm:text-sm text-gray-600">
                <Check class="w-3 h-3 sm:w-4 sm:h-4 text-brand-green mr-2 flex-shrink-0" />
                {{ service }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Services by District Section -->
    <section class="py-12 sm:py-16 md:py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4 px-4">
            Best HVAC Maintenance Services Available in Your District
          </h2>
          <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto px-4">
            No matter which district you're in, we provide the same high-quality HVAC maintenance services with local
            expertise and
            quick response times as the best HVAC maintenance company in Riyadh.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
          <div v-for="service in services" :key="service.name" class="text-center">
            <div class="w-12 h-12 sm:w-16 sm:h-16 bg-brand-green/10 rounded-full flex items-center justify-center mx-auto mb-4">
              <component :is="service.icon" class="w-6 h-6 sm:w-8 sm:h-8 text-brand-green" />
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 px-2">{{ service.name === 'HVAC Maintenance' ? 'Best HVAC Maintenance Riyadh' : service.name }}</h3>
            <p class="text-sm sm:text-base text-gray-600 px-2">{{ service.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Emergency Services Section -->
    <section class="py-12 sm:py-16 md:py-20 bg-red-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg">
          <div class="text-center mb-6 sm:mb-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 px-4">
              Emergency HVAC Maintenance Services in Riyadh
            </h2>
            <p class="text-base sm:text-lg text-gray-600 px-4">
              HVAC emergency? As the best HVAC maintenance company in Riyadh, we provide 24/7 emergency HVAC maintenance
              services across all Riyadh districts.
              Quick response times and expert HVAC maintenance and repair services.
            </p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8">
            <div class="text-center">
              <div class="w-12 h-12 sm:w-16 sm:h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <Clock class="w-6 h-6 sm:w-8 sm:h-8 text-red-600" />
              </div>
              <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">24/7 Emergency Service</h3>
              <p class="text-sm sm:text-base text-gray-600">Available round the clock for urgent HVAC issues</p>
            </div>
            <div class="text-center">
              <div class="w-12 h-12 sm:w-16 sm:h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <Zap class="w-6 h-6 sm:w-8 sm:h-8 text-red-600" />
              </div>
              <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">Quick Response</h3>
              <p class="text-sm sm:text-base text-gray-600">Fast response times across all Riyadh districts</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-12 sm:py-16 md:py-20 bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center text-white mb-8 sm:mb-12">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 px-4">
            Get Best HVAC Maintenance Services in Your District
          </h2>
          <p class="text-base sm:text-lg text-gray-300 max-w-3xl mx-auto px-4">
            Contact the best HVAC maintenance company in Riyadh today for professional HVAC maintenance services in your
            Riyadh district.
            Free quotes and emergency HVAC maintenance services available.
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8">
          <div class="bg-white rounded-xl p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 sm:mb-6">Contact Information</h3>
            <div class="space-y-4">
              <div class="flex items-start sm:items-center">
                <Phone class="w-5 h-5 text-brand-green mr-3 mt-1 sm:mt-0 flex-shrink-0" />
                <div>
                  <p class="font-semibold text-gray-900">Phone</p>
                  <a href="tel:+966536161198" class="text-gray-600 hover:text-brand-green text-sm sm:text-base">+966 (53) 616-1198</a>
                </div>
              </div>
              <div class="flex items-start sm:items-center">
                <Mail class="w-5 h-5 text-brand-green mr-3 mt-1 sm:mt-0 flex-shrink-0" />
                <div>
                  <p class="font-semibold text-gray-900">Email</p>
                  <a href="mailto:info@alsaeedstar.com"
                    class="text-gray-600 hover:text-brand-green text-sm sm:text-base break-all">info@alsaeedstar.com</a>
                </div>
              </div>
              <div class="flex items-start sm:items-center">
                <MapPin class="w-5 h-5 text-brand-green mr-3 mt-1 sm:mt-0 flex-shrink-0" />
                <div>
                  <p class="font-semibold text-gray-900">Office Location</p>
                  <p class="text-gray-600 text-sm sm:text-base">Prince Abdulaziz bin Musaed bin Julawi, 12628, Riyadh</p>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-xl p-6 sm:p-8">
            <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 sm:mb-6">Service Areas</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs sm:text-sm">
              <div v-for="district in districts.slice(0, 12)" :key="district.name" class="flex items-center">
                <Check class="w-3 h-3 sm:w-4 sm:h-4 text-brand-green mr-2 flex-shrink-0" />
                <span class="text-gray-600">{{ district.name }}</span>
              </div>
            </div>
            <p class="text-xs sm:text-sm text-gray-500 mt-4">And many more districts across Riyadh</p>
          </div>
        </div>
      </div>
    </section>
  </WebsiteLayout>
</template>

<script setup>
import { MapPin, Phone, Check, Clock, Zap, Mail, Wrench, Settings, Shield, Users } from 'lucide-vue-next'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import SEO from '@/components/SEO.vue'

// Districts data
const districts = [
  {
    name: 'Prince Abdulaziz bin Musaed bin Julawi (12628)',
    description: 'Our main office location - Professional HVAC maintenance services in Prince Abdulaziz bin Musaed bin Julawi area',
    services: ['HVAC Maintenance', 'AC Installation', 'AC Repair', 'Emergency Services', 'Office Services']
  },
  {
    name: 'Al Malaz',
    description: 'Professional HVAC services in Al Malaz district',
    services: ['AC Installation', 'AC Repair', 'HVAC Maintenance', 'Emergency Services']
  },
  {
    name: 'Al Olaya',
    description: 'Commercial and residential HVAC services in Al Olaya',
    services: ['Central AC Systems', 'Split AC Installation', 'HVAC Repair', 'Maintenance']
  },
  {
    name: 'Al Nakheel',
    description: 'Comprehensive HVAC solutions in Al Nakheel',
    services: ['AC Installation', 'HVAC Repair', 'System Upgrades', 'Emergency Repair']
  },
  {
    name: 'Al Wurud',
    description: 'Reliable HVAC services in Al Wurud district',
    services: ['AC Repair', 'Installation', 'Maintenance', '24/7 Support']
  },
  {
    name: 'Al Murabba',
    description: 'Expert HVAC services in Al Murabba',
    services: ['HVAC Installation', 'AC Repair', 'System Maintenance', 'Emergency Services']
  },
  {
    name: 'Al Faisaliyah',
    description: 'Professional HVAC contractor in Al Faisaliyah',
    services: ['AC Services', 'HVAC Repair', 'Installation', 'Maintenance']
  },
  {
    name: 'Al Sulaimaniyah',
    description: 'Quality HVAC services in Al Sulaimaniyah',
    services: ['AC Installation', 'Repair Services', 'HVAC Maintenance', 'Emergency Support']
  },
  {
    name: 'Al Rawdah',
    description: 'Trusted HVAC services in Al Rawdah',
    services: ['HVAC Services', 'AC Repair', 'Installation', 'Maintenance']
  },
  {
    name: 'Al Shifa',
    description: 'Professional HVAC solutions in Al Shifa',
    services: ['AC Installation', 'HVAC Repair', 'System Maintenance', 'Emergency Services']
  },
  {
    name: 'Al Mansoura',
    description: 'Reliable HVAC contractor in Al Mansoura',
    services: ['HVAC Services', 'AC Repair', 'Installation', '24/7 Support']
  },
  {
    name: 'Al Aziziyah',
    description: 'Expert HVAC services in Al Aziziyah',
    services: ['AC Services', 'HVAC Repair', 'Installation', 'Maintenance']
  },
  {
    name: 'Al Yamamah',
    description: 'Quality HVAC solutions in Al Yamamah',
    services: ['HVAC Installation', 'AC Repair', 'System Maintenance', 'Emergency Services']
  }
]

// Services data
const services = [
  {
    name: 'AC Installation',
    description: 'Professional AC installation in all Riyadh districts',
    icon: Settings
  },
  {
    name: 'AC Repair',
    description: 'Fast and reliable AC repair services',
    icon: Wrench
  },
  {
    name: 'HVAC Maintenance',
    description: 'Regular maintenance for optimal performance',
    icon: Shield
  },
  {
    name: 'Emergency Services',
    description: '24/7 emergency HVAC services',
    icon: Users
  }
]

// Structured data for location page
const locationStructuredData = {
  "@type": "Service",
  "name": "Best HVAC Maintenance Company Riyadh Districts - All Areas Covered",
  "description": "Best HVAC maintenance company serving all Riyadh districts including Al Malaz, Al Olaya, Al Nakheel, Al Wurud, and more. Professional HVAC maintenance, AC repair, and installation services across Riyadh.",
  "provider": {
    "@type": "Organization",
    "name": "Al Najm Al Saeed Co. Ltd.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Prince Abdulaziz bin Musaed bin Julawi",
      "addressLocality": "Riyadh",
      "postalCode": "12628",
      "addressCountry": "SA"
    },
    "telephone": "+966-53-616-1198"
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Riyadh"
    },
    {
      "@type": "Place",
      "name": "Prince Abdulaziz bin Musaed bin Julawi"
    },
    {
      "@type": "PostalCode",
      "name": "12628"
    },
    {
      "@type": "Place",
      "name": "Al Malaz"
    },
    {
      "@type": "Place",
      "name": "Al Olaya"
    },
    {
      "@type": "Place",
      "name": "Al Nakheel"
    },
    {
      "@type": "Place",
      "name": "Al Wurud"
    },
    {
      "@type": "Place",
      "name": "Al Murabba"
    },
    {
      "@type": "Place",
      "name": "Al Faisaliyah"
    },
    {
      "@type": "Place",
      "name": "Al Sulaimaniyah"
    },
    {
      "@type": "Place",
      "name": "Al Rawdah"
    },
    {
      "@type": "Place",
      "name": "Al Shifa"
    },
    {
      "@type": "Place",
      "name": "Al Mansoura"
    },
    {
      "@type": "Place",
      "name": "Al Aziziyah"
    },
    {
      "@type": "Place",
      "name": "Al Yamamah"
    }
  ],
  "serviceType": "HVAC Services",
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Best HVAC Maintenance Services by District",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Best HVAC Maintenance Riyadh",
          "description": "Professional HVAC maintenance services by the best HVAC maintenance company across all Riyadh districts"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "AC Installation Riyadh",
          "description": "Professional AC installation services across all Riyadh districts"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "AC Repair Riyadh",
          "description": "Fast and reliable AC repair services in all Riyadh districts"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Emergency HVAC Maintenance Riyadh",
          "description": "24/7 emergency HVAC maintenance services by the best HVAC maintenance company across all Riyadh districts"
        }
      }
    ]
  }
}
</script>
