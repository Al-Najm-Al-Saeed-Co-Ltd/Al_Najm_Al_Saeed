<template>
  <WebsiteLayout>
    <Head title="FAQ - Frequently Asked Questions" />

    <!-- Hero Section -->
    <section class="hero-gradient min-h-[60vh] flex items-center relative overflow-hidden pt-20 sm:pt-24">
      <div class="absolute inset-0 bg-black opacity-10"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20">
        <div class="text-center text-white">
          <!-- Breadcrumb -->
          <nav class="flex justify-center mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
              <li class="inline-flex items-center">
                <Link :href="home.url()"
                  class="inline-flex items-center text-gray-200 hover:text-white transition-colors duration-200">
                  <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                    </path>
                  </svg>
                  Home
                </Link>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-gray-200" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"></path>
                  </svg>
                  <span class="ml-1 text-gray-200 md:ml-2">FAQ</span>
                </div>
              </li>
            </ol>
          </nav>

          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Frequently Asked
            <span class="text-white">Questions</span>
          </h1>
          <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-100 leading-relaxed max-w-3xl mx-auto">
            Find answers to common questions about our services, processes, and policies. 
            Can't find what you're looking for? Contact us directly.
          </p>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <FAQSection :visible="true" />

    <!-- Contact CTA Section -->
    <section class="py-20 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Still Need Help?
        </h2>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
          Our team is ready to assist you with any questions or concerns you may have.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <Link 
            :href="contact.url()" 
            class="inline-flex items-center px-8 py-4 bg-brand-green hover:bg-brand-green/90 text-white font-semibold rounded-lg transition-colors duration-200"
          >
            <MessageCircle class="w-5 h-5 mr-2" />
            Contact Us
          </Link>
          <a 
            href="tel:+966536161198"
            class="inline-flex items-center px-8 py-4 border-2 border-brand-green text-brand-green hover:bg-brand-green hover:text-white font-semibold rounded-lg transition-colors duration-200"
          >
            <Phone class="w-5 h-5 mr-2" />
            Call Now
          </a>
        </div>
      </div>
    </section>
  </WebsiteLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { MessageCircle, Phone } from 'lucide-vue-next'
import { FAQSection } from '@/components/website/sections'
import { home, contact } from '@/routes/website'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
</script>
