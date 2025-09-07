<template>
  <section id="hvac-pricing" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          HVAC Technician
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          AC Service Pricing
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Transparent rates for deep cleaning, repairs, and installation/uninstallation of Split and Window AC units
        </p>
      </div>

      <!-- AC Deep Cleaning Pricing -->
      <div class="mb-16">
        <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">AC Deep Cleaning (Foam)</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Split AC -->
          <div class="bg-gray-50 rounded-2xl p-8">
            <h4 class="text-xl font-bold text-gray-900 mb-6 text-center">Split AC</h4>
            <div class="space-y-4">
              <div v-for="item in splitACCleaning" :key="item.units" 
                class="flex justify-between items-center bg-white rounded-lg p-4 shadow-sm">
                <span class="font-medium text-gray-900">{{ item.units }} AC</span>
                <span class="text-lg font-bold text-brand-green">SAR {{ item.price }}</span>
              </div>
            </div>
          </div>

          <!-- Window AC -->
          <div class="bg-gray-50 rounded-2xl p-8">
            <h4 class="text-xl font-bold text-gray-900 mb-6 text-center">Window AC</h4>
            <div class="space-y-4">
              <div v-for="item in windowACCleaning" :key="item.units" 
                class="flex justify-between items-center bg-white rounded-lg p-4 shadow-sm">
                <span class="font-medium text-gray-900">{{ item.units }} AC</span>
                <span class="text-lg font-bold text-brand-green">SAR {{ item.price }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- AC Repair Services -->
      <div class="mb-16">
        <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">AC Repair Services</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div v-for="repair in commonRepairs" :key="repair.service" 
            class="bg-gray-50 rounded-2xl p-6 text-center hover:shadow-lg transition-shadow duration-300">
            <h4 class="text-lg font-bold text-gray-900 mb-2">{{ repair.service }}</h4>
            <p class="text-2xl font-bold text-brand-green">SAR {{ repair.price }}</p>
          </div>
        </div>
      </div>

      <!-- Freon Refill -->
      <div class="mb-16">
        <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Freon Refill</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div v-for="freon in freonRefill" :key="freon.brand" 
            class="bg-gray-50 rounded-2xl p-8 text-center">
            <h4 class="text-xl font-bold text-gray-900 mb-4">{{ freon.brand }}</h4>
            <p class="text-3xl font-bold text-brand-green">SAR {{ freon.price }}</p>
          </div>
        </div>
      </div>

      <!-- Installation Services -->
      <div class="mb-16">
        <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Installation Services</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Relocation -->
          <div class="bg-gray-50 rounded-2xl p-8">
            <h4 class="text-xl font-bold text-gray-900 mb-6 text-center">Relocation</h4>
            <div class="space-y-4">
              <div v-for="item in relocationServices" :key="item.service" 
                class="flex justify-between items-center bg-white rounded-lg p-4 shadow-sm">
                <span class="font-medium text-gray-900">{{ item.service }}</span>
                <span class="text-lg font-bold text-brand-green">SAR {{ item.price }}</span>
              </div>
            </div>
          </div>

          <!-- New Installation -->
          <div class="bg-gray-50 rounded-2xl p-8">
            <h4 class="text-xl font-bold text-gray-900 mb-6 text-center">New Installation</h4>
            <div class="space-y-4">
              <div v-for="item in newInstallation" :key="item.service" 
                class="flex justify-between items-center bg-white rounded-lg p-4 shadow-sm">
                <span class="font-medium text-gray-900">{{ item.service }}</span>
                <span class="text-lg font-bold text-brand-green">SAR {{ item.price }}</span>
              </div>
            </div>
          </div>

          <!-- Uninstallation -->
          <div class="bg-gray-50 rounded-2xl p-8">
            <h4 class="text-xl font-bold text-gray-900 mb-6 text-center">Uninstallation</h4>
            <div class="space-y-4">
              <div v-for="item in uninstallationServices" :key="item.service" 
                class="flex justify-between items-center bg-white rounded-lg p-4 shadow-sm">
                <span class="font-medium text-gray-900">{{ item.service }}</span>
                <span class="text-lg font-bold text-brand-green">SAR {{ item.price }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- AC Parts & Services Pricing -->
      <div class="mb-16">
        <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">AC Parts & Services Pricing</h3>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- Electrical Parts -->
          <div class="bg-gray-50 rounded-2xl p-8">
            <h4 class="text-xl font-bold text-gray-900 mb-6 text-center">Electrical Parts</h4>
            <div class="space-y-3">
              <div v-for="part in electricalParts" :key="part.name" 
                class="flex justify-between items-center bg-white rounded-lg p-3 shadow-sm">
                <span class="text-sm font-medium text-gray-900">{{ part.name }}</span>
                <span class="font-bold text-brand-green">SAR {{ part.price }}</span>
              </div>
            </div>
          </div>

          <!-- Fans & Motors -->
          <div class="bg-gray-50 rounded-2xl p-8">
            <h4 class="text-xl font-bold text-gray-900 mb-6 text-center">Fans & Motors</h4>
            <div class="space-y-3">
              <div v-for="part in fansMotors" :key="part.name" 
                class="flex justify-between items-center bg-white rounded-lg p-3 shadow-sm">
                <span class="text-sm font-medium text-gray-900">{{ part.name }}</span>
                <span class="font-bold text-brand-green">SAR {{ part.price }}</span>
              </div>
            </div>
          </div>

          <!-- Other Parts -->
          <div class="bg-gray-50 rounded-2xl p-8">
            <h4 class="text-xl font-bold text-gray-900 mb-6 text-center">Other Parts</h4>
            <div class="space-y-3">
              <div v-for="part in otherParts" :key="part.name" 
                class="flex justify-between items-center bg-white rounded-lg p-3 shadow-sm">
                <span class="text-sm font-medium text-gray-900">{{ part.name }}</span>
                <span class="font-bold text-brand-green">SAR {{ part.price }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Minor Repairs -->
      <div class="mb-16">
        <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Minor Repairs</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div v-for="repair in minorRepairs" :key="repair.service" 
            class="bg-gray-50 rounded-2xl p-6 text-center hover:shadow-lg transition-shadow duration-300">
            <h4 class="text-lg font-bold text-gray-900 mb-2">{{ repair.service }}</h4>
            <p class="text-2xl font-bold text-brand-green">SAR {{ repair.price }}</p>
          </div>
        </div>
      </div>

      <!-- Service Packages -->
      <div class="mb-16">
        <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Service Packages</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div v-for="servicePackage in servicePackages" :key="servicePackage.name" 
            class="bg-gray-50 rounded-2xl p-6 text-center hover:shadow-lg transition-shadow duration-300">
            <h4 class="text-lg font-bold text-gray-900 mb-2">{{ servicePackage.name }}</h4>
            <p class="text-2xl font-bold text-brand-green">SAR {{ servicePackage.price }}</p>
          </div>
        </div>
      </div>

      <!-- Contact CTA -->
      <div class="text-center bg-gray-50 rounded-2xl p-8">
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Need HVAC Services?</h3>
        <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
          Contact us today for a free estimate and professional HVAC services. Our expert technicians are ready to help with all your heating and cooling needs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <Link :href="contact()"
            class="inline-flex items-center px-8 py-4 bg-brand-green hover:bg-brand-green/90 text-white font-semibold rounded-lg transition-colors duration-200">
            <MessageCircle class="w-5 h-5 mr-2" />
            Get Free Quote
          </Link>
          <a href="tel:+966536161198"
            class="inline-flex items-center px-8 py-4 border-2 border-brand-green text-brand-green hover:bg-brand-green hover:text-white font-semibold rounded-lg transition-colors duration-200">
            <Phone class="w-5 h-5 mr-2" />
            Call Now
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { contact } from '@/routes/website'
import { MessageCircle, Phone } from 'lucide-vue-next'

// AC Deep Cleaning Data
const splitACCleaning = [
  { units: '1 AC', price: '79' },
  { units: '2 AC', price: '149' },
  { units: '3 AC', price: '199' },
  { units: '4 AC', price: '249' },
  { units: '5 AC', price: '299' }
]

const windowACCleaning = [
  { units: '1 AC', price: '69' },
  { units: '2 AC', price: '129' },
  { units: '3 AC', price: '169' },
  { units: '4 AC', price: '209' },
  { units: '5 AC', price: '249' }
]

// Common Repairs
const commonRepairs = [
  { service: 'Water Leakage', price: '109' },
  { service: 'Less/No Cooling', price: '59' },
  { service: 'Unwanted Noise/Smell', price: '59' },
  { service: 'Power On Issue', price: '59' }
]

// Freon Refill
const freonRefill = [
  { brand: 'Honeywell (USA)', price: '250' },
  { brand: 'India Brand', price: '150' }
]

// Installation Services
const relocationServices = [
  { service: 'Split AC Relocation', price: '250' },
  { service: 'Window AC Relocation', price: '199' }
]

const newInstallation = [
  { service: 'Split AC Installation', price: '249' },
  { service: 'Window AC Installation', price: '109' }
]

const uninstallationServices = [
  { service: 'Split AC Uninstall', price: '109' },
  { service: 'Window AC Uninstall', price: '109' }
]

// Electrical Parts
const electricalParts = [
  { name: 'Capacitor Indoor', price: '200' },
  { name: 'Capacitor Outdoor', price: '200' },
  { name: 'Replace Sensor', price: '120' },
  { name: 'Contactor Replaced', price: '175' },
  { name: 'Change PCB with Remote', price: '250' },
  { name: 'Non-Inverter PCB Repaired', price: '400' },
  { name: 'Inverter PCB Repaired', price: '600' }
]

// Fans & Motors
const fansMotors = [
  { name: 'Fan Motor Outdoor', price: '375' },
  { name: 'Blower Motor Replaced', price: '275' }
]

// Other Parts
const otherParts = [
  { name: 'Blower Replaced', price: '275' },
  { name: 'AC Fan Blade', price: '285' },
  { name: 'Universal Remote', price: '50' }
]

// Minor Repairs
const minorRepairs = [
  { service: 'Connector Wires Replaced (1mtr)', price: '100' },
  { service: 'Water Leakage Repaired', price: '109' },
  { service: 'Adjust Pipe & Tighten Compressor', price: '100' },
  { service: 'Adjust Grill Locks', price: '100' },
  { service: 'Drain Pipe Adjust', price: '100' },
  { service: 'Noise Adjustment in Motor', price: '100' },
  { service: 'Insulation Refix', price: '100' },
  { service: 'Flair Nut Replaced', price: '120' },
  { service: 'Service Valve Replaced', price: '250' },
  { service: 'Gas Charging (R410)', price: '250' },
  { service: 'Capillary and Filter', price: '150' },
  { service: 'Copper Cooling Coil', price: '500' },
  { service: 'Compressor 0.8–1 Ton', price: '615' },
  { service: 'Compressor 1.5 Ton', price: '675' },
  { service: 'Compressor 2 Ton', price: '700' },
  { service: 'Freon Refill', price: '250' },
  { service: 'Freon Refill + Deep Cleaning', price: '250' }
]

// Service Packages
const servicePackages = [
  { name: '5 AC Deep Cleaning', price: '299' },
  { name: '3 AC Deep Cleaning', price: '199' },
  { name: 'AC Deep Clean (Window/Split)', price: '129' },
  { name: 'Window AC Installation', price: '109' },
  { name: 'Window AC Uninstallation', price: '109' },
  { name: 'Split AC Installation', price: '249' },
  { name: 'Split AC Uninstallation', price: '109' }
]
</script>
