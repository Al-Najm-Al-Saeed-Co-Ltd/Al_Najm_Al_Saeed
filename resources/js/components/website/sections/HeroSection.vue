<template>
  <!-- Hero Section -->
  <section id="home" class="hero-gradient min-h-screen flex items-center relative overflow-hidden pt-20 sm:pt-24">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <!-- Left Column - Text Content -->
        <div class="text-white order-2 lg:order-1">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Create your dream with us,
            <span class="text-white">where every step brings joy!</span>
          </h1>
          <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-100 leading-relaxed">
            We are the Experts in Construction, Maintenance, HVAC, and IT Solutions.
            Innovative solutions for a diverse range of needs.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 mb-12">
            <a href="#services"
              class="bg-white text-brand-green px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-gray-100 transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
              <Rocket class="w-5 h-5 mr-2" />Our Services
            </a>
            <a href="#contact"
              class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-white hover:text-brand-green transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
              <Phone class="w-5 h-5 mr-2" />Contact Us
            </a>
          </div>
        </div>

        <!-- Right Column - Image Slider -->
        <div class="order-1 lg:order-2">
          <div class="relative">
            <!-- Image Slider -->
            <div class="image-slider-container relative overflow-hidden rounded-2xl shadow-2xl"
              @mouseenter="isSliderPaused = true" @mouseleave="isSliderPaused = false">
              <div class="slider-wrapper flex transition-transform duration-700 ease-in-out"
                :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                <div v-for="(slide, index) in slides" :key="index" class="slide w-full flex-shrink-0 aspect-video">
                  <img :src="slide.image" :alt="slide.alt" class="w-full h-full object-cover object-center transition-transform duration-300 hover:scale-105" loading="lazy">
                </div>
              </div>

              <!-- Slider Navigation Dots -->
              <div class="absolute bottom-3 sm:bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button v-for="(slide, index) in slides" :key="index" @click="goToSlide(index)" :class="[
                  'w-2 h-2 sm:w-3 sm:h-3 rounded-full transition duration-300',
                  currentSlide === index ? 'bg-white bg-opacity-100' : 'bg-white bg-opacity-50 hover:bg-opacity-100'
                ]"></button>
              </div>
            </div>

            <!-- Navigation Arrows -->
            <div class="mt-4 sm:mt-6 flex justify-center space-x-3 sm:space-x-4">
              <button @click="prevSlide"
                class="bg-brand-green hover:bg-brand-green/90 text-white w-10 h-10 sm:w-12 sm:h-12 rounded-full transition duration-300 flex items-center justify-center shadow-lg hover:shadow-xl">
                <ChevronLeft class="w-4 h-4 sm:w-5 sm:h-5" />
              </button>
              <button @click="nextSlide"
                class="bg-brand-green hover:bg-brand-green/90 text-white w-10 h-10 sm:w-12 sm:h-12 rounded-full transition duration-300 flex items-center justify-center shadow-lg hover:shadow-xl">
                <ChevronRight class="w-4 h-4 sm:w-5 sm:h-5" />
              </button>
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
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { Rocket, Phone, ChevronLeft, ChevronRight } from 'lucide-vue-next'

// Props
const props = defineProps({
  slides: {
    type: Array,
    default: () => [
      {
        image: 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
        alt: 'Construction Site'
      },
      {
        image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
        alt: 'HVAC System'
      },
      {
        image: 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
        alt: 'IT Services'
      },
      {
        image: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
        alt: 'Maintenance Work'
      }
    ]
  }
})

// Reactive data
const currentSlide = ref(0)
const isSliderPaused = ref(false)

// Methods
const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % props.slides.length
}

const prevSlide = () => {
  currentSlide.value = (currentSlide.value - 1 + props.slides.length) % props.slides.length
}

const goToSlide = (index) => {
  currentSlide.value = index
}

// Lifecycle hooks
let sliderInterval = null

onMounted(() => {
  // Auto-play slider (pause on hover)
  const startSlider = () => {
    sliderInterval = setInterval(() => {
      if (!isSliderPaused.value) {
        nextSlide()
      }
    }, 5000)
  }
  
  startSlider()
})

onUnmounted(() => {
  if (sliderInterval) {
    clearInterval(sliderInterval)
  }
})
</script>

<style scoped>
.animate-float {
  animation: float 6s ease-in-out infinite;
}

@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
}
</style>