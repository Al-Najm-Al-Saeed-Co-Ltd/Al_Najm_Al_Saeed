<template>
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
          :href="contact()" 
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
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { MessageCircle, Phone } from 'lucide-vue-next'
import { contact } from '@/routes/website'
</script>
