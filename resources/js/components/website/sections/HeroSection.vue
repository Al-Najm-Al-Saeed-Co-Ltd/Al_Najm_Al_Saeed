<template>
  <!-- Hero Section -->
  <section id="home" class="hero-gradient min-h-screen flex items-center relative overflow-hidden pt-20 sm:pt-24">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 py-16 sm:py-20">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <!-- Left Column - Text Content -->
        <div class="text-white order-2 lg:order-1">
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Best HVAC Maintenance Company Riyadh,
            <span class="text-white">where every step brings comfort!</span>
          </h1>
          <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-100 leading-relaxed">
            We are the best HVAC maintenance company in Riyadh, experts in Construction, HVAC Maintenance, and IT Solutions.
            Professional HVAC maintenance services for all your comfort needs.
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
            <!-- Swiper Container -->
            <div class="swiper hero-swiper rounded-2xl shadow-2xl overflow-hidden">
              <div class="swiper-wrapper">
                <div v-for="(slide, index) in slides" :key="index" class="swiper-slide">
                  <picture>
                    <source media="(max-width: 640px)" :srcset="getResponsiveImage(slide.image, 400)">
                    <source media="(max-width: 1024px)" :srcset="getResponsiveImage(slide.image, 600)">
                    <img :src="slide.image" :alt="slide.alt" class="w-full h-full object-cover object-center" 
                         :loading="index === 0 ? 'eager' : 'lazy'"
                         :fetchpriority="index === 0 ? 'high' : 'auto'"
                         width="800" height="533">
                  </picture>
                </div>
              </div>
              
              <!-- Pagination -->
              <div class="swiper-pagination"></div>
              
              <!-- Navigation -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-16 sm:top-20 left-4 sm:left-10 w-16 h-16 sm:w-20 sm:h-20 rounded-full"
      style="background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.1;"></div>
    <div
      class="absolute bottom-16 sm:bottom-20 right-4 sm:right-10 w-24 h-24 sm:w-32 sm:h-32 rounded-full"
      style="animation-delay: 2s; background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.05;">
    </div>
  </section>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue'
import { Rocket, Phone } from 'lucide-vue-next'
import { Swiper } from 'swiper'
import { Navigation, Pagination, Autoplay } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'

// Props
const props = defineProps({
  slides: {
    type: Array,
    default: () => [
      {
        image: 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=75&fm=webp',
        alt: 'Construction Site'
      },
      {
        image: 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=75&fm=webp',
        alt: 'IT Services'
      },
      {
        image: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=75&fm=webp',
        alt: 'Maintenance Work'
      }
    ]
  }
})

// Swiper instance
let swiper = null

// Function to generate responsive image URLs
const getResponsiveImage = (originalUrl, width) => {
  // Replace the width parameter in the Unsplash URL
  return originalUrl.replace(/w=\d+/, `w=${width}`)
}

onMounted(() => {
  // Initialize Swiper
  swiper = new Swiper('.hero-swiper', {
    modules: [Navigation, Pagination, Autoplay],
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      bulletClass: 'swiper-pagination-bullet',
      bulletActiveClass: 'swiper-pagination-bullet-active',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    speed: 1000,
    // Touch and mouse support
    touchRatio: 1,
    touchAngle: 45,
    grabCursor: true,
    // Responsive breakpoints
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
        autoplay: {
          delay: 4000,
        }
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
        autoplay: {
          delay: 5000,
        }
      },
      1024: {
        slidesPerView: 1,
        spaceBetween: 0,
        autoplay: {
          delay: 6000,
        }
      }
    },
    // Accessibility
    a11y: {
      prevSlideMessage: 'Previous slide',
      nextSlideMessage: 'Next slide',
      firstSlideMessage: 'This is the first slide',
      lastSlideMessage: 'This is the last slide',
    },
    // Keyboard control
    keyboard: {
      enabled: true,
      onlyInViewport: true,
    },
  })
})

onUnmounted(() => {
  if (swiper) {
    swiper.destroy(true, true)
  }
})
</script>

<style scoped>

/* Swiper Custom Styles */
.hero-swiper {
  width: 100%;
  height: auto;
  border-radius: 16px;
  overflow: hidden;
}

.hero-swiper .swiper-wrapper {
  height: auto;
}

.hero-swiper .swiper-slide {
  display: flex;
  align-items: center;
  justify-content: center;
  height: auto;
  overflow: hidden;
}

.hero-swiper .swiper-slide img {
  width: 100%;
  height: auto;
  object-fit: fill;
  object-position: center;
  display: block;
}

/* Custom Pagination */
.hero-swiper :deep(.swiper-pagination) {
  bottom: 20px;
}

.hero-swiper :deep(.swiper-pagination-bullet) {
  width: 12px;
  height: 12px;
  background: rgba(255, 255, 255, 0.5);
  opacity: 1;
  transition: all 0.3s ease;
}

.hero-swiper :deep(.swiper-pagination-bullet-active) {
  background: #10B981;
  transform: scale(1.2);
}

/* Custom Navigation */
.hero-swiper :deep(.swiper-button-next),
.hero-swiper :deep(.swiper-button-prev) {
  color: #10B981;
  background: rgba(255, 255, 255, 0.9);
  width: 44px;
  height: 44px;
  border-radius: 50%;
  margin-top: -22px;
  transition: all 0.3s ease;
}

.hero-swiper :deep(.swiper-button-next:hover),
.hero-swiper :deep(.swiper-button-prev:hover) {
  background: #10B981;
  color: white;
  transform: scale(1.1);
}

.hero-swiper :deep(.swiper-button-next::after),
.hero-swiper :deep(.swiper-button-prev::after) {
  font-size: 18px;
  font-weight: bold;
}

/* Small screens (768px to 991px) */
@media (min-width: 768px) and (max-width: 991px) {
  .hero-swiper :deep(.swiper-button-next),
  .hero-swiper :deep(.swiper-button-prev) {
    width: 40px;
    height: 40px;
    margin-top: -20px;
  }
  
  .hero-swiper :deep(.swiper-button-next::after),
  .hero-swiper :deep(.swiper-button-prev::after) {
    font-size: 16px;
  }
}

/* Mobile screens (576px to 767px) */
@media (min-width: 576px) and (max-width: 767px) {
  .hero-swiper :deep(.swiper-button-next),
  .hero-swiper :deep(.swiper-button-prev) {
    width: 36px;
    height: 36px;
    margin-top: -18px;
  }
  
  .hero-swiper :deep(.swiper-button-next::after),
  .hero-swiper :deep(.swiper-button-prev::after) {
    font-size: 14px;
  }
  
  .hero-swiper :deep(.swiper-pagination-bullet) {
    width: 10px;
    height: 10px;
  }
}

/* Extra small screens (below 576px) */
@media (max-width: 575px) {
  .hero-swiper :deep(.swiper-button-next),
  .hero-swiper :deep(.swiper-button-prev) {
    width: 32px;
    height: 32px;
    margin-top: -16px;
  }
  
  .hero-swiper :deep(.swiper-button-next::after),
  .hero-swiper :deep(.swiper-button-prev::after) {
    font-size: 12px;
  }
  
  .hero-swiper :deep(.swiper-pagination-bullet) {
    width: 8px;
    height: 8px;
  }
  
  .hero-swiper :deep(.swiper-pagination) {
    bottom: 15px;
  }
}
</style>