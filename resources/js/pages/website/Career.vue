<template>
  <WebsiteLayout>
    <Head title="Career Opportunities" />

    <!-- Hero Section -->
    <CareerHeroSection />

    <!-- Why Work With Us Section -->
    <CareerWhyWorkWithUsSection />

    <!-- Job Openings Section -->
    <CareerJobOpeningsSection />

    <!-- Benefits Section -->
    <CareerBenefitsSection />

    <!-- Application Process Section -->
    <CareerApplicationProcessSection />

    <!-- CTA Section -->
    <CTASection />
  </WebsiteLayout>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue'
import { Head } from '@inertiajs/vue3'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import {
  CareerHeroSection,
  CareerWhyWorkWithUsSection,
  CareerJobOpeningsSection,
  CareerBenefitsSection,
  CareerApplicationProcessSection,
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
/* Career page specific styles */
</style>
