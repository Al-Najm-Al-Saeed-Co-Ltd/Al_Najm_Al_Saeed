<template>
  <!-- Contact Form Section -->
  <section id="contact-form" class="py-20 bg-gray-50" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Get in touch with us for any inquiries about our services. We'll get back to you within 24 hours.
        </p>
      </div>

      <div class="bg-white rounded-2xl p-8 md:p-12 shadow-lg">
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
  </section>
</template>

<script setup>
import { reactive, ref } from 'vue'
import { Send } from 'lucide-vue-next'
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
