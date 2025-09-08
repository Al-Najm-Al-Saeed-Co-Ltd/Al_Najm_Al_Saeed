<template>
  <WebsiteLayout>
    <SEO title="Contact Al Najm Al Saeed Co. Ltd. - HVAC Services in Saudi Arabia"
      description="Contact Al Najm Al Saeed Co. Ltd. for professional HVAC services in Saudi Arabia. Get free quotes, emergency services, and expert consultation. Call +966 53 616 1198 or visit our office in Riyadh."
      keywords="contact HVAC company Saudi Arabia, HVAC consultation, HVAC emergency contact, HVAC quote request, HVAC customer service, HVAC support Saudi Arabia"
      url="/contact" :structured-data="contactStructuredData" />

    <!-- Hero Section -->
    <ContactHeroSection />

    <!-- Contact Form Section -->
    <section id="contact-form" class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          <!-- Contact Form -->
          <div class="bg-white rounded-2xl p-8 shadow-lg">
            <div class="mb-8">
              <h2 class="text-3xl font-bold text-gray-900 mb-4">Send Us a Message</h2>
              <p class="text-gray-600">
                Fill out the form below and we'll get back to you within 24 hours
              </p>
            </div>

            <form @submit.prevent="submitContactForm" class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="full_name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                  <input type="text" id="full_name" name="full_name" v-model="contactForm.full_name"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
                  <div v-if="errors.full_name" class="mt-1 text-sm text-red-600">{{ errors.full_name }}</div>
                </div>
                <div>
                  <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name (Optional)</label>
                  <input type="text" id="company" name="company" v-model="contactForm.company"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
                  <div v-if="errors.company" class="mt-1 text-sm text-red-600">{{ errors.company }}</div>
                </div>
              </div>

              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                <input type="email" id="email" name="email" v-model="contactForm.email"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
                <div v-if="errors.email" class="mt-1 text-sm text-red-600">{{ errors.email }}</div>
              </div>

              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                <input type="tel" id="phone" name="phone" v-model="contactForm.phone"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
                <div v-if="errors.phone" class="mt-1 text-sm text-red-600">{{ errors.phone }}</div>
              </div>


              <div>
                <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interested In *</label>
                <select id="service" name="service" v-model="contactForm.service"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
                  <option value="" disabled selected>Select a service</option>
                  <option value="hvac">HVAC Systems</option>
                  <option value="construction">Building Construction</option>
                  <option value="interior">Interior Design</option>
                  <option value="electro-mechanical">Electro-Mechanical Works</option>
                  <option value="shades">Shades</option>
                  <option value="web-development">Website Development</option>
                  <option value="other">Other</option>
                </select>
                <div v-if="errors.service" class="mt-1 text-sm text-red-600">{{ errors.service }}</div>
              </div>

              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                <textarea id="message" name="message" rows="5" v-model="contactForm.message"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200"
                  placeholder="Tell us about your project..."></textarea>
                <div v-if="errors.message" class="mt-1 text-sm text-red-600">{{ errors.message }}</div>
              </div>

              <button type="submit" :disabled="isSubmitting"
                class="w-full bg-brand-green text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-brand-green/90 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center disabled:opacity-50 disabled:cursor-not-allowed">
                <Send class="w-5 h-5 mr-2" />
                {{ isSubmitting ? 'Sending...' : 'Send Message' }}
              </button>
            </form>
          </div>

          <!-- Contact Information -->
          <div class="space-y-8">
            <!-- Office Hours -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
              <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                  <Clock class="w-6 h-6 text-blue-600" />
                </div>
                <h3 class="text-2xl font-bold text-gray-900">Office Hours</h3>
              </div>
              <div class="space-y-3">
                <div class="flex justify-between">
                  <span class="text-gray-600">Sunday - Thursday</span>
                  <span class="font-semibold text-gray-900">8:00 AM - 5:00 PM</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-gray-600">Friday - Saturday</span>
                  <span class="font-semibold text-gray-900">Closed</span>
                </div>
                <div class="flex justify-between">
                  <span class="text-gray-600">National Holidays</span>
                  <span class="font-semibold text-gray-900">Closed</span>
                </div>
              </div>
            </div>

            <!-- Quick Contact -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
              <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                  <MessageCircle class="w-6 h-6 text-green-600" />
                </div>
                <h3 class="text-2xl font-bold text-gray-900">Quick Contact</h3>
              </div>
              <div class="space-y-4">
                <div class="flex items-center">
                  <Phone class="w-5 h-5 text-brand-green mr-3" />
                  <div>
                    <p class="font-semibold text-gray-900">Call Us</p>
                    <a href="tel:+966536161198"
                      class="text-gray-600 hover:text-brand-green transition-colors duration-200">+966 (53) 616-1198</a>
                  </div>
                </div>
                <div class="flex items-center">
                  <Mail class="w-5 h-5 text-brand-green mr-3" />
                  <div>
                    <p class="font-semibold text-gray-900">Email Us</p>
                    <a href="mailto:info@alsaeedstar.com"
                      class="text-gray-600 hover:text-brand-green transition-colors duration-200">info@alsaeedstar.com</a>
                  </div>
                </div>
                <div class="flex items-center">
                  <MapPin class="w-5 h-5 text-brand-green mr-3" />
                  <div>
                    <p class="font-semibold text-gray-900">Our Office</p>
                    <a href="https://maps.app.goo.gl/YmkdUbSnbZJiUcQP6" target="_blank"
                      class="text-gray-600 hover:text-brand-green transition-colors duration-200">Prince Abdulaziz bin
                      Musaed bin Julawi 12628</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Emergency Contact -->
            <div class="rounded-2xl p-8 shadow-lg border-2" style="background-color: #dc2626; border-color: #b91c1c;">
              <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mr-4"
                  style="background-color: rgba(255, 255, 255, 0.2);">
                  <AlertTriangle class="w-6 h-6" style="color: white;" />
                </div>
                <h3 class="text-2xl font-bold" style="color: white;">Emergency Service</h3>
              </div>
              <p class="mb-4" style="color: white;">
                Need immediate assistance? Our emergency team is available 24/7 for urgent HVAC and electrical issues.
              </p>
              <a href="tel:+966536161198"
                class="inline-flex items-center px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 shadow-md"
                style="background-color: white; color: #dc2626;">
                <Phone class="w-5 h-5 mr-2" />
                Call Emergency Line
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <MapSection />

    <!-- FAQ Section -->
    <FAQGridSection />
  </WebsiteLayout>
</template>

<script setup>
import { reactive, ref } from 'vue'
import { Link, router } from '@inertiajs/vue3'
import { home } from '@/routes/website'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import SEO from '@/components/SEO.vue'
import {
  ContactHeroSection,
  MapSection,
  FAQGridSection
} from '@/components/website/sections'
import {
  Phone,
  Mail,
  MapPin,
  MessageCircle,
  Send,
  Clock,
  AlertTriangle
} from 'lucide-vue-next'
import { useNotification } from '@/composables/useNotification'

// Structured data for Contact page
const contactStructuredData = {
  "@type": "ContactPage",
  "mainEntity": {
    "@type": "Organization",
    "name": "Al Najm Al Saeed Co. Ltd.",
    "contactPoint": [
      {
        "@type": "ContactPoint",
        "telephone": "+966-53-616-1198",
        "contactType": "customer service",
        "areaServed": "SA",
        "availableLanguage": ["English", "Arabic"]
      },
      {
        "@type": "ContactPoint",
        "telephone": "+966-53-616-1198",
        "contactType": "emergency",
        "areaServed": "SA",
        "availableLanguage": ["English", "Arabic"]
      }
    ],
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "SA",
      "addressLocality": "Riyadh"
    },
    "email": "info@alnajmalsaeed.com",
    "url": "https://alnajmalsaeed.com"
  }
}

// Form data
const contactForm = reactive({
  full_name: '',
  company: '',
  email: '',
  phone: '',
  service: '',
  message: ''
})

const isSubmitting = ref(false)
const errors = ref({})
const { success: showSuccessNotification } = useNotification()

// Form submission
const submitContactForm = async () => {
  if (isSubmitting.value) return
  
  isSubmitting.value = true
  
  try {
    await router.post('/contact', contactForm, {
      onSuccess: () => {
        // Reset form and clear errors
        Object.assign(contactForm, {
          full_name: '',
          company: '',
          email: '',
          phone: '',
          service: '',
          message: ''
        })
        errors.value = {}
        
        // Show success notification
        showSuccessNotification('Thank you for your message! We will get back to you within 24 hours.')
      },
      onError: (serverErrors) => {
        errors.value = serverErrors
      },
      onFinish: () => {
        isSubmitting.value = false
      }
    })
  } catch (error) {
    console.error('Form submission error:', error)
    isSubmitting.value = false
  }
}
</script>
