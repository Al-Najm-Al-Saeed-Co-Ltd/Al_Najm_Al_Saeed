<template>
  <WebsiteLayout>
    <Head title="Our Services" />

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
import { Head, Link } from '@inertiajs/vue3'
import { contact, home } from '@/routes/website'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import {
  ServicesHeroSection,
  ServicesGridSection,
  WhyChooseUsSection,
  ProcessSection,
  IndustriesSection,
  CTASection
} from '@/components/website/sections'
</script>
