<template>
  <WebsiteLayout>
    <Head title="About Us" />

    <!-- Hero Section -->
    <AboutHeroSection />

    <!-- Company Story Section -->
    <CompanyStorySection :visible="visibleSections.has('story')" />

    <!-- Mission & Vision Section -->
    <MissionVisionSection :visible="visibleSections.has('mission')" />

    <!-- Team Section -->
    <TeamSection :visible="visibleSections.has('team')" />

    <!-- Values Section -->
    <ValuesSection :visible="visibleSections.has('values')" />

    <!-- Our Clients Section -->
    <OurClientsSection :visible="visibleSections.has('clients')" />

    <!-- Statistics Section -->
    <StatisticsSection :visible="visibleSections.has('statistics')" />

    <!-- Testimonials Section -->
    <TestimonialsSection :visible="visibleSections.has('testimonials')" />

    <!-- Contact CTA Section -->
    <ContactCTASection :visible="visibleSections.has('contact')" />

  </WebsiteLayout>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue'
import { Head } from '@inertiajs/vue3'
import {
  AboutHeroSection,
  CompanyStorySection,
  MissionVisionSection,
  TeamSection,
  ValuesSection,
  OurClientsSection,
  StatisticsSection,
  TestimonialsSection,
  ContactCTASection
} from '@/components/website/sections'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import { useScrollAnimations } from '@/composables/useScrollAnimations'

// Use scroll animations composable
const { visibleSections, initialize, cleanup } = useScrollAnimations()

// Lifecycle hooks
onMounted(initialize)
onUnmounted(cleanup)
</script>

<style scoped>
/* About page specific styles - most styles are now in individual section components */
</style>
