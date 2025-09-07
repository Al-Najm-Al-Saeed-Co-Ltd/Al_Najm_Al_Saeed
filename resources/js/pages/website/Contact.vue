<template>
  <WebsiteLayout>

    <Head title="Contact Us" />

    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center relative overflow-hidden pt-20 sm:pt-24">
      <div class="absolute inset-0 bg-black opacity-10"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Left Column - Text Content -->
          <div class="text-white order-2 lg:order-1">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                  <Link :href="home()"
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
                    <span class="ml-1 text-gray-200 md:ml-2">Contact Us</span>
                  </div>
                </li>
              </ol>
            </nav>

            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
              Get In Touch
              <span class="text-white">With Our Team</span>
            </h1>
            <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-100 leading-relaxed">
              Ready to start your next project? We're here to help you bring your vision to life.
              Contact us today for a free consultation and quote.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 mb-12">
              <a href="#contact-form"
                class="bg-white text-brand-green px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-gray-100 transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
                <MessageCircle class="w-5 h-5 mr-2" />Send Message
              </a>
              <a href="tel:+966536161198"
                class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-white hover:text-brand-green transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
                <Phone class="w-5 h-5 mr-2" />Call Now
              </a>
            </div>
          </div>

          <!-- Right Column - Contact Info Cards -->
          <div class="order-1 lg:order-2">
            <div class="grid grid-cols-1 gap-4">
              <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300">
                <div class="flex items-center">
                  <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                    <Phone class="w-5 h-5 text-blue-600" />
                  </div>
                  <div class="text-left">
                    <h3 class="text-white font-semibold text-xl">Call Us</h3>
                    <p class="text-gray-200 text-base">+966 (53) 616-1198</p>
                  </div>
                </div>
              </div>
              <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300">
                <div class="flex items-center">
                  <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                    <Mail class="w-5 h-5 text-green-600" />
                  </div>
                  <div class="text-left">
                    <h3 class="text-white font-semibold text-xl">Email Us</h3>
                    <p class="text-gray-200 text-base">info@alsaeedstar.com</p>
                  </div>
                </div>
              </div>
              <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300">
                <div class="flex items-center">
                  <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                    <MapPin class="w-5 h-5 text-purple-600" />
                  </div>
                  <div class="text-left">
                    <h3 class="text-white font-semibold text-xl">Our Office</h3>
                    <p class="text-gray-200 text-base">Prince Abdulaziz bin Musaed bin Julawi 12628</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Floating Elements -->
      <div class="absolute top-16 sm:top-20 left-4 sm:left-10 w-16 h-16 sm:w-20 sm:h-20 rounded-full animate-float"
        style="background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.1;"></div>
      <div
        class="absolute bottom-16 sm:bottom-20 right-4 sm:right-10 w-24 h-24 sm:w-32 sm:h-32 rounded-full animate-float"
        style="animation-delay: 2s; background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.05;">
      </div>
    </section>

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

            <form class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                  <input type="text" id="firstName" name="firstName" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
                </div>
                <div>
                  <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                  <input type="text" id="lastName" name="lastName" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
                </div>
              </div>

              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                <input type="email" id="email" name="email" required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
              </div>

              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                <input type="tel" id="phone" name="phone"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
              </div>

              <div>
                <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interested In</label>
                <select id="service" name="service"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200">
                  <option value="">Select a service</option>
                  <option value="hvac">HVAC Systems</option>
                  <option value="construction">Building Construction</option>
                  <option value="interior">Interior Design</option>
                  <option value="electro-mechanical">Electro-Mechanical Works</option>
                  <option value="shades">Shades</option>
                  <option value="web-development">Website Development</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                <textarea id="message" name="message" rows="5" required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-200"
                  placeholder="Tell us about your project..."></textarea>
              </div>

              <button type="submit"
                class="w-full bg-brand-green text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-brand-green/90 transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                <Send class="w-5 h-5 mr-2" />
                Send Message
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
                     <p class="text-gray-600">+966 (53) 616-1198</p>
                   </div>
                 </div>
                 <div class="flex items-center">
                   <Mail class="w-5 h-5 text-brand-green mr-3" />
                   <div>
                     <p class="font-semibold text-gray-900">Email Us</p>
                     <p class="text-gray-600">info@alsaeedstar.com</p>
                   </div>
                 </div>
                 <div class="flex items-center">
                   <MapPin class="w-5 h-5 text-brand-green mr-3" />
                   <div>
                     <p class="font-semibold text-gray-900">Our Office</p>
                     <p class="text-gray-600">Prince Abdulaziz bin Musaed bin Julawi 12628</p>
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
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Find Us</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Visit our office in Riyadh for in-person consultations and project discussions
          </p>
        </div>

        <div class="rounded-2xl overflow-hidden shadow-lg">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.123456789!2d46.708901!3d24.663068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDM5JzQ3LjAiTiA0NsKwNDInMzIuMCJF!5e0!3m2!1sen!2ssa!4v1234567890123!5m2!1sen!2ssa"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class="w-full h-96">
          </iframe>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Frequently Asked Questions</h2>
          <p class="text-xl text-gray-600">
            Quick answers to common questions about our services
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">How quickly can you respond to inquiries?</h3>
            <p class="text-gray-600">We typically respond to all inquiries within 24 hours during business days. For
              urgent matters, please call our emergency line.</p>
          </div>

          <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">Do you provide free consultations?</h3>
            <p class="text-gray-600">Yes, we offer free initial consultations for all potential projects. This includes
              site visits, project assessment, and preliminary cost estimates.</p>
          </div>

          <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">What areas do you serve?</h3>
            <p class="text-gray-600">We primarily serve the Riyadh area and surrounding regions. For projects outside
              our immediate service area, please contact us to discuss availability.</p>
          </div>

          <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">Do you offer emergency services?</h3>
            <p class="text-gray-600">Yes, we provide 24/7 emergency services for HVAC and electrical issues. Our
              emergency team is always ready to respond to urgent situations.</p>
          </div>

          <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">What types of projects do you handle?</h3>
            <p class="text-gray-600">We specialize in HVAC systems, building construction, interior design,
              electro-mechanical works, shades, and website development.</p>
          </div>

          <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">Do you provide warranties?</h3>
            <p class="text-gray-600">Yes, we provide comprehensive warranties on all our work. The warranty period
              varies depending on the type of service and project scope.</p>
          </div>
        </div>
      </div>
    </section>
  </WebsiteLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { home } from '@/routes/website'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import {
  Phone,
  Mail,
  MapPin,
  MessageCircle,
  Send,
  Clock,
  AlertTriangle
} from 'lucide-vue-next'
</script>
