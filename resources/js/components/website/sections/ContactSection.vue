<template>
  <!-- Contact Section -->
  <section id="contact" class="py-20 bg-white" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Contact Us</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Get in touch with us for any inquiries about our services
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Contact Info -->
        <div class="lg:col-span-1">
          <div class="bg-gray-100 rounded-2xl p-10">
            <h3 class="text-2xl font-semibold text-gray-900 mb-8">Our Office</h3>
            <div class="space-y-8">
              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                  <MapPin class="w-6 h-6 text-red-600" />
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-gray-900">Address</h4>
                  <p class="text-gray-600">Prince Abdulaziz bin Musaed bin Julawi 12628</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                  <Phone class="w-6 h-6 text-green-600" />
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-gray-900">Call Us</h4>
                  <p class="text-gray-600">+966 (53) 616-1198</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                  <Mail class="w-6 h-6 text-blue-600" />
                </div>
                <div>
                  <h4 class="text-lg font-semibold text-gray-900">Email Us</h4>
                  <p class="text-gray-600">info@alsaeedstar.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="lg:col-span-2">
          <div class="bg-gray-50 p-10 rounded-xl">
            <h3 class="text-2xl font-semibold text-gray-900 mb-8">Send us a Message</h3>
            <form @submit.prevent="submitContactForm" class="space-y-6">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="grid gap-2">
                  <Label for="first_name">First Name</Label>
                  <Input v-model="contactForm.first_name" type="text" id="first_name" name="first_name"
                    class="mt-1 block w-full" placeholder="Enter your first name" required />
                  <InputError :message="contactErrors.first_name" />
                </div>
                <div class="grid gap-2">
                  <Label for="last_name">Last Name</Label>
                  <Input v-model="contactForm.last_name" type="text" id="last_name" name="last_name"
                    class="mt-1 block w-full" placeholder="Enter your last name" required />
                  <InputError :message="contactErrors.last_name" />
                </div>
              </div>

              <div class="grid gap-2">
                <Label for="contact_email">Email Address</Label>
                <Input v-model="contactForm.email" type="email" id="contact_email" name="contact_email"
                  class="mt-1 block w-full" placeholder="Enter your email address" required />
                <InputError :message="contactErrors.email" />
              </div>

              <div class="grid gap-2">
                <Label for="phone">Phone Number</Label>
                <Input v-model="contactForm.phone" type="tel" id="phone" name="phone" class="mt-1 block w-full"
                  placeholder="Enter your phone number" required />
                <InputError :message="contactErrors.phone" />
              </div>

              <div class="grid gap-2">
                <Label for="company">Company Name</Label>
                <Input v-model="contactForm.company" type="text" id="company" name="company" class="mt-1 block w-full"
                  placeholder="Enter your company name (optional)" />
                <InputError :message="contactErrors.company" />
              </div>

              <div class="grid gap-2">
                <Label for="contact_message">Message</Label>
                <textarea v-model="contactForm.message" id="contact_message" name="contact_message" rows="4"
                  class="mt-1 block w-full file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex min-h-[60px] w-full min-w-0 rounded-md border bg-transparent px-3 py-2 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                  placeholder="Tell us about your project..." required></textarea>
                <InputError :message="contactErrors.message" />
              </div>

              <Button type="submit"
                class="w-full bg-brand-green hover:bg-brand-green/90 text-white py-3 px-6 rounded-lg font-semibold"
                :disabled="isSubmittingContact">
                <Send class="w-5 h-5 mr-2" />
                {{ isSubmittingContact ? 'Sending...' : 'Send Message' }}
              </Button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { reactive, ref } from 'vue'
import { MapPin, Phone, Mail, Send } from 'lucide-vue-next'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import { Button } from '@/components/ui/button'
import InputError from '@/components/InputError.vue'
import { useNotification } from '@/composables/useNotification'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// Form data
const contactForm = reactive({
  first_name: '',
  last_name: '',
  email: '',
  phone: '',
  company: '',
  message: ''
})

// Form errors and validation
const contactErrors = reactive({})
const isSubmittingContact = ref(false)

// Notification system
const { success } = useNotification()

// Form validation functions
const validateEmail = (email) => {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  return emailRegex.test(email)
}

const validatePhone = (phone) => {
  const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/
  return phoneRegex.test(phone.replace(/\s/g, ''))
}

const validateContactForm = () => {
  const errors = {}
  
  if (!contactForm.first_name.trim()) {
    errors.first_name = 'First name is required'
  }
  
  if (!contactForm.last_name.trim()) {
    errors.last_name = 'Last name is required'
  }
  
  if (!contactForm.email.trim()) {
    errors.email = 'Email is required'
  } else if (!validateEmail(contactForm.email)) {
    errors.email = 'Please enter a valid email address'
  }
  
  if (!contactForm.phone.trim()) {
    errors.phone = 'Phone number is required'
  } else if (!validatePhone(contactForm.phone)) {
    errors.phone = 'Please enter a valid phone number'
  }
  
  if (!contactForm.message.trim()) {
    errors.message = 'Message is required'
  }
  
  return errors
}

const submitContactForm = async () => {
  isSubmittingContact.value = true

  // Clear previous errors
  Object.keys(contactErrors).forEach(key => {
    contactErrors[key] = ''
  })

  // Validate form
  const errors = validateContactForm()
  if (Object.keys(errors).length > 0) {
    Object.assign(contactErrors, errors)
    isSubmittingContact.value = false
    return
  }

  try {
    // Handle form submission
    console.log('Contact form submitted:', contactForm)

    // Show success notification
    success('Thank you for your message! We will get back to you soon.')

    // Reset form
    Object.keys(contactForm).forEach(key => {
      contactForm[key] = ''
    })
  } catch (error) {
    console.error('Contact form error:', error)
    // Handle validation errors here if needed
  } finally {
    isSubmittingContact.value = false
  }
}
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
</style>