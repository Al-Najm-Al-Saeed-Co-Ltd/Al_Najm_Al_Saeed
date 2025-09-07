<template>
  <WebsiteLayout>
    <Head title="FAQ - Frequently Asked Questions" />

    <!-- Hero Section -->
    <FAQHeroSection />

    <!-- FAQ Section -->
    <FAQSection :visible="true" />

    <!-- Contact CTA Section -->
    <HelpCTASection />
  </WebsiteLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { FAQSection, FAQHeroSection, HelpCTASection } from '@/components/website/sections'
import { home, contact } from '@/routes/website'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
</script>
