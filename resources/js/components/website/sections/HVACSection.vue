<template>
  <!-- HVAC Section -->
  <section id="hvac" class="py-20 bg-white" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-4xl font-bold text-gray-900 mb-6">HVAC Systems</h2>
          <h3 class="text-2xl font-semibold text-brand-green mb-4">Expert HVAC Solutions</h3>
          <p class="text-xl text-gray-600 mb-6">Complete Heating, Ventilation & Air Conditioning Services</p>
          <p class="text-lg text-gray-600 mb-10 leading-relaxed">
            From new installations to comprehensive maintenance, our certified HVAC professionals ensure your indoor
            environment remains comfortable and energy-efficient year-round.
          </p>

          <div class="grid grid-cols-2 gap-8">
            <div class="flex items-center space-x-3">
              <div class="w-12 h-12 bg-brand-green rounded-lg flex items-center justify-center">
                <Plus class="w-6 h-6 text-white" />
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">New Installation</h4>
                <p class="text-sm text-gray-600">Complete system setup</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <div class="w-12 h-12 bg-brand-green rounded-lg flex items-center justify-center">
                <Settings class="w-6 h-6 text-white" />
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">Renovation</h4>
                <p class="text-sm text-gray-600">System upgrades</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <div class="w-12 h-12 bg-brand-green rounded-lg flex items-center justify-center">
                <Wrench class="w-6 h-6 text-white" />
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">Maintenance</h4>
                <p class="text-sm text-gray-600">Regular service & repair</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <div class="w-12 h-12 bg-brand-green rounded-lg flex items-center justify-center">
                <Clock class="w-6 h-6 text-white" />
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">24/7 Service</h4>
                <p class="text-sm text-gray-600">Emergency support</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-gray-100 rounded-2xl p-8">
          <h3 class="text-2xl font-semibold text-gray-900 mb-6">Request A Call Back</h3>
          <p class="text-gray-600 mb-6">
            Looking for expert advice or a tailored solution? We're here to help. Whether you have questions about our
            construction, HVAC, IT services, or maintenance, our team is ready to assist you.
          </p>

          <form @submit.prevent="submitCallbackForm" class="space-y-6">
            <div class="grid gap-2">
              <Label for="name">Your Name</Label>
              <Input v-model="callbackForm.name" type="text" id="name" name="name" class="mt-1 block w-full"
                placeholder="Enter your full name" required />
              <InputError :message="callbackErrors.name" />
            </div>
            <div class="grid gap-2">
              <Label for="email">Your Email</Label>
              <Input v-model="callbackForm.email" type="email" id="email" name="email" class="mt-1 block w-full"
                placeholder="Enter your email address" required />
              <InputError :message="callbackErrors.email" />
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div class="grid gap-2">
                <Label for="callback_date">Call Back Date</Label>
                <Input v-model="callbackForm.callback_date" type="date" id="callback_date" name="callback_date"
                  class="mt-1 block w-full" required />
                <InputError :message="callbackErrors.callback_date" />
              </div>
              <div class="grid gap-2">
                <Label for="callback_time">Call Back Time</Label>
                <Input v-model="callbackForm.callback_time" type="time" id="callback_time" name="callback_time"
                  class="mt-1 block w-full" required />
                <InputError :message="callbackErrors.callback_time" />
              </div>
            </div>
            <div class="grid gap-2">
              <Label for="message">Message</Label>
              <textarea v-model="callbackForm.message" id="message" name="message" rows="4"
                class="mt-1 block w-full file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex min-h-[60px] w-full min-w-0 rounded-md border bg-transparent px-3 py-2 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                placeholder="Tell us about your needs..." required></textarea>
              <InputError :message="callbackErrors.message" />
            </div>
            <Button type="submit"
              class="w-full bg-brand-green hover:bg-brand-green/90 text-white py-3 px-6 rounded-lg font-semibold"
              :disabled="isSubmittingCallback">
              <Send class="w-5 h-5 mr-2" />
              {{ isSubmittingCallback ? 'Submitting...' : 'Request Call Back' }}
            </Button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { reactive, ref } from 'vue'
import { Plus, Settings, Wrench, Clock, Send } from 'lucide-vue-next'
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
const callbackForm = reactive({
  name: '',
  email: '',
  callback_date: '',
  callback_time: '',
  message: ''
})

// Form errors and validation
const callbackErrors = reactive({})
const isSubmittingCallback = ref(false)

// Notification system
const { success } = useNotification()

// Form validation functions
const validateEmail = (email) => {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  return emailRegex.test(email)
}

const validateCallbackForm = () => {
  const errors = {}
  
  if (!callbackForm.name.trim()) {
    errors.name = 'Name is required'
  }
  
  if (!callbackForm.email.trim()) {
    errors.email = 'Email is required'
  } else if (!validateEmail(callbackForm.email)) {
    errors.email = 'Please enter a valid email address'
  }
  
  if (!callbackForm.callback_date) {
    errors.callback_date = 'Callback date is required'
  }
  
  if (!callbackForm.callback_time) {
    errors.callback_time = 'Callback time is required'
  }
  
  if (!callbackForm.message.trim()) {
    errors.message = 'Message is required'
  }
  
  return errors
}

const submitCallbackForm = async () => {
  isSubmittingCallback.value = true

  // Clear previous errors
  Object.keys(callbackErrors).forEach(key => {
    callbackErrors[key] = ''
  })

  // Validate form
  const errors = validateCallbackForm()
  if (Object.keys(errors).length > 0) {
    Object.assign(callbackErrors, errors)
    isSubmittingCallback.value = false
    return
  }

  try {
    // Handle form submission
    console.log('Callback form submitted:', callbackForm)

    // Show success notification
    success('Thank you for your callback request! We will get back to you soon.')

    // Reset form
    Object.keys(callbackForm).forEach(key => {
      callbackForm[key] = ''
    })
  } catch (error) {
    console.error('Callback form error:', error)
    // Handle validation errors here if needed
  } finally {
    isSubmittingCallback.value = false
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