<template>
  <section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div :class="['transition-all duration-1000', visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']">
        <div class="bg-gradient-to-r from-brand-green to-brand-green-dark rounded-3xl p-8 md:p-12 text-white relative overflow-hidden">
          <!-- Background Pattern -->
          <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" :style="{ backgroundImage: 'url(\'data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.1\'%3E%3Ccircle cx=\'30\' cy=\'30\' r=\'2\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\')' }"></div>
          </div>

          <div class="relative z-10">
            <div class="text-center mb-12">
              <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Ready to Start Your Next Project?
              </h2>
              <p class="text-xl md:text-2xl text-green-100 max-w-3xl mx-auto leading-relaxed">
                Let's discuss how we can bring your vision to life with our comprehensive services and expertise
              </p>
            </div>

            <!-- Contact Options -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
              <!-- Phone -->
              <div class="text-center">
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto mb-4">
                  <Phone class="w-8 h-8 text-brand-green" />
                </div>
                <h3 class="text-lg font-semibold mb-2 text-white">Call Us</h3>
                <p class="text-white mb-2">+966 XX XXX XXXX</p>
                <p class="text-sm text-green-100">Mon-Fri 8AM-6PM</p>
              </div>

              <!-- Email -->
              <div class="text-center">
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto mb-4">
                  <Mail class="w-8 h-8 text-brand-green" />
                </div>
                <h3 class="text-lg font-semibold mb-2 text-white">Email Us</h3>
                <p class="text-white mb-2">info@alnajmalsaeed.com</p>
                <p class="text-sm text-green-100">24/7 Response</p>
              </div>

              <!-- Location -->
              <div class="text-center">
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto mb-4">
                  <MapPin class="w-8 h-8 text-brand-green" />
                </div>
                <h3 class="text-lg font-semibold mb-2 text-white">Visit Us</h3>
                <p class="text-white mb-2">Riyadh, Saudi Arabia</p>
                <p class="text-sm text-green-100">By Appointment</p>
              </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <Link 
                :href="contact.url()" 
                class="inline-flex items-center px-8 py-4 bg-white text-brand-green hover:bg-gray-100 font-semibold rounded-lg transition-colors duration-200 shadow-lg hover:shadow-xl"
              >
                <MessageCircle class="mr-2 w-5 h-5" />
                Get Free Quote
              </Link>
              <a 
                href="tel:+966XXXXXXXXX" 
                class="inline-flex items-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-brand-green font-semibold rounded-lg transition-colors duration-200"
              >
                <Phone class="mr-2 w-5 h-5" />
                Call Now
              </a>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-12 pt-8 border-t border-white border-opacity-30">
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                  <div class="text-2xl font-bold text-white mb-1">25+</div>
                  <div class="text-sm text-white">Years of Experience</div>
                </div>
                <div>
                  <div class="text-2xl font-bold text-white mb-1">150+</div>
                  <div class="text-sm text-white">Projects Completed</div>
                </div>
                <div>
                  <div class="text-2xl font-bold text-white mb-1">98%</div>
                  <div class="text-sm text-white">Client Satisfaction</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { contact } from '@/routes/website'
import { Phone, Mail, MapPin, MessageCircle } from 'lucide-vue-next'

defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})
</script>
