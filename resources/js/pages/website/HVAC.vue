<template>
  <WebsiteLayout>
    <Head title="HVAC Services" />

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
import { Head } from '@inertiajs/vue3'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import {
  HVACHeroSection,
  HVACServicesSection,
  HVACSystemsSection,
  HVACWhyChooseUsSection,
  HVACPricingSection,
  CTASection
} from '@/components/website/sections'
import { useScrollAnimations } from '@/composables/useScrollAnimations'

// Use scroll animations composable
const { visibleSections, initialize, cleanup } = useScrollAnimations()

// Lifecycle hooks
onMounted(initialize)
onUnmounted(cleanup)
</script>

<style scoped>
/* HVAC page specific styles */
</style>
