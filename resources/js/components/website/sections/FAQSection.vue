<template>
  <!-- FAQ Section -->
  <section id="faq" class="py-20 bg-gray-50" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Help Center
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Frequently Asked Questions
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Find answers to common questions about our services, processes, and policies
        </p>
      </div>

      <!-- FAQ Items -->
      <div class="space-y-4">
        <div 
          v-for="(faq, index) in faqItems" 
          :key="faq.id"
          :class="[
            'transition-all duration-1000',
            `delay-${index * 100}`,
            visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
          ]" 
          class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden"
        >
          <button
            @click="toggleFAQ(faq.id)"
            class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-brand-green focus:ring-inset"
            :aria-expanded="openFAQs.has(faq.id)"
            :aria-controls="`faq-answer-${faq.id}`"
          >
            <h3 class="text-lg font-semibold text-gray-900 pr-4">{{ faq.question }}</h3>
            <div class="flex-shrink-0">
              <ChevronDown 
                :class="[
                  'w-6 h-6 text-brand-green transition-transform duration-200',
                  openFAQs.has(faq.id) ? 'rotate-180' : ''
                ]" 
              />
            </div>
          </button>
          
          <div 
            :id="`faq-answer-${faq.id}`"
            :class="[
              'transition-all duration-300 ease-in-out overflow-hidden',
              openFAQs.has(faq.id) ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0'
            ]"
          >
            <div class="px-8 pb-6">
              <div class="border-t border-gray-100 pt-4">
                <p class="text-gray-600 leading-relaxed">{{ faq.answer }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact CTA -->
      <div class="mt-16 text-center">
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Still Have Questions?</h3>
          <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
            Can't find the answer you're looking for? Our team is here to help you with any questions or concerns.
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
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'
import { ChevronDown, MessageCircle, Phone } from 'lucide-vue-next'
import { Link } from '@inertiajs/vue3'
import { contact } from '@/routes/website'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// FAQ state management
const openFAQs = ref(new Set())

// Toggle FAQ function
const toggleFAQ = (faqId) => {
  if (openFAQs.value.has(faqId)) {
    openFAQs.value.delete(faqId)
  } else {
    openFAQs.value.add(faqId)
  }
}

// FAQ data array
const faqItems = [
  {
    id: 1,
    question: "What services does Al Najm Al Saeed provide?",
    answer: "We provide comprehensive construction, HVAC, and IT services including building construction, HVAC system installation and maintenance, interior design, electro-mechanical works, shading solutions, and website development. Our integrated approach ensures all your project needs are met under one roof."
  },
  {
    id: 2,
    question: "How long does a typical construction project take?",
    answer: "Project timelines vary depending on scope and complexity. Residential projects typically take 3-6 months, while commercial projects can range from 6 months to 2 years. We provide detailed timelines during the planning phase and keep you updated throughout the project."
  },
  {
    id: 3,
    question: "Do you provide free consultations and quotes?",
    answer: "Yes, we offer free initial consultations and detailed quotes for all our services. Our team will visit your site, discuss your requirements, and provide a comprehensive proposal with transparent pricing and timelines."
  },
  {
    id: 4,
    question: "Are your technicians licensed and insured?",
    answer: "Absolutely. All our technicians are fully licensed, certified, and insured. We maintain the highest standards of professionalism and safety, ensuring your project is completed to the highest quality standards."
  },
  {
    id: 5,
    question: "What areas do you serve?",
    answer: "We primarily serve the Riyadh region and surrounding areas. Our team can travel to other locations for larger projects. Contact us to discuss your specific location and project requirements."
  },
  {
    id: 6,
    question: "Do you offer maintenance services after project completion?",
    answer: "Yes, we provide comprehensive maintenance services for all our installations. We offer regular maintenance contracts for HVAC systems, building maintenance, and IT support to ensure optimal performance and longevity of your investments."
  },
  {
    id: 7,
    question: "What is your warranty policy?",
    answer: "We provide warranties on all our work and materials. Construction projects typically have a 1-2 year warranty, HVAC systems come with manufacturer warranties plus our service warranty, and IT solutions include ongoing support. Specific warranty terms are detailed in your project contract."
  },
  {
    id: 8,
    question: "How do I get started with my project?",
    answer: "Getting started is easy! Simply contact us through our website, call us directly, or visit our office. We'll schedule a free consultation to discuss your project, assess your needs, and provide a detailed proposal. No obligation required for the initial consultation."
  }
]
</script>

<style scoped>
.animate-fade-in-up {
  animation: fadeInUp 0.8s ease-out forwards;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Smooth accordion animation */
.max-h-0 {
  max-height: 0;
}

.max-h-96 {
  max-height: 24rem;
}
</style>
