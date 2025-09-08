<template>
  <!-- Testimonials Section -->
  <section id="testimonials" class="py-20 bg-white" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">What Our Clients Say</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
          Don't just take our word for it - hear from our satisfied clients
        </p>
      </div>

      <!-- Testimonials Carousel -->
      <div class="swiper testimonials-swiper">
        <div class="swiper-wrapper">
          <div v-for="testimonial in testimonials" :key="testimonial.id" class="swiper-slide">
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg h-full">
              <div class="flex items-center mb-6">
                <div class="flex text-yellow-400">
                  <Star v-for="i in 5" :key="i" class="w-5 h-5 fill-current" />
                </div>
              </div>
              <p class="text-gray-600 mb-6 italic">
                "{{ testimonial.quote }}"
              </p>
              <div class="flex items-center">
                <div class="w-12 h-12 bg-brand-green rounded-full flex items-center justify-center mr-4">
                  <User class="w-6 h-6 text-white" />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">{{ testimonial.name }}</h4>
                  <p class="text-sm text-gray-600">{{ testimonial.position }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue'
import { Star, User } from 'lucide-vue-next'
import { Swiper } from 'swiper'
import { Navigation, Pagination, Autoplay } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})

// Testimonials data array
const testimonials = [
  {
    id: 1,
    quote: "Al Najm Al Saeed delivered exceptional HVAC services for our office building. Their team was professional, efficient, and the results exceeded our expectations.",
    name: "Ahmed Al-Rashid",
    position: "CEO, Tech Solutions Inc."
  },
  {
    id: 2,
    quote: "The construction quality and attention to detail were outstanding. They completed our project on time and within budget. Highly recommended!",
    name: "Sarah Johnson",
    position: "Project Manager, BuildCorp"
  },
  {
    id: 3,
    quote: "Their IT solutions transformed our business operations. The team was knowledgeable and provided excellent ongoing support.",
    name: "Mohammed Al-Zahra",
    position: "IT Director, Modern Enterprises"
  },
  {
    id: 4,
    quote: "Outstanding service and professionalism. The HVAC installation was flawless and their maintenance program keeps our systems running perfectly.",
    name: "Fatima Al-Mansouri",
    position: "Facilities Manager, Healthcare Plus"
  },
  {
    id: 5,
    quote: "The construction team exceeded our expectations. They delivered a high-quality project on schedule with excellent communication throughout.",
    name: "David Wilson",
    position: "Operations Director, Retail Group"
  },
  {
    id: 6,
    quote: "Their IT support has been invaluable to our business growth. Professional, reliable, and always available when we need them.",
    name: "Aisha Al-Hassan",
    position: "IT Manager, Finance Corp"
  }
]

// Swiper instance
let swiper = null

onMounted(() => {
  // Initialize Swiper
  swiper = new Swiper('.testimonials-swiper', {
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
    speed: 800,
    // Responsive breakpoints
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 40,
      }
    },
    // Accessibility
    a11y: {
      prevSlideMessage: 'Previous testimonial',
      nextSlideMessage: 'Next testimonial',
      firstSlideMessage: 'This is the first testimonial',
      lastSlideMessage: 'This is the last testimonial',
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

/* Testimonials Swiper Styles */
.testimonials-swiper {
  padding: 20px 0 60px 0;
}

.testimonials-swiper .swiper-slide {
  height: auto;
}

/* Custom Pagination */
.testimonials-swiper :deep(.swiper-pagination) {
  bottom: 20px;
}

.testimonials-swiper :deep(.swiper-pagination-bullet) {
  width: 12px;
  height: 12px;
  background: #d1d5db;
  opacity: 1;
  transition: all 0.3s ease;
}

.testimonials-swiper :deep(.swiper-pagination-bullet-active) {
  background: #10B981;
  transform: scale(1.2);
}

/* Custom Navigation */
.testimonials-swiper :deep(.swiper-button-next),
.testimonials-swiper :deep(.swiper-button-prev) {
  color: #10B981;
  background: rgba(255, 255, 255, 0.9);
  width: 44px;
  height: 44px;
  border-radius: 50%;
  margin-top: -22px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.testimonials-swiper :deep(.swiper-button-next:hover),
.testimonials-swiper :deep(.swiper-button-prev:hover) {
  background: #10B981;
  color: white;
  transform: scale(1.1);
}

.testimonials-swiper :deep(.swiper-button-next::after),
.testimonials-swiper :deep(.swiper-button-prev::after) {
  font-size: 18px;
  font-weight: bold;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .testimonials-swiper {
    padding: 20px 0 50px 0;
  }

  .testimonials-swiper :deep(.swiper-button-next),
  .testimonials-swiper :deep(.swiper-button-prev) {
    width: 36px;
    height: 36px;
    margin-top: -18px;
  }

  .testimonials-swiper :deep(.swiper-button-next::after),
  .testimonials-swiper :deep(.swiper-button-prev::after) {
    font-size: 14px;
  }

  .testimonials-swiper :deep(.swiper-pagination-bullet) {
    width: 10px;
    height: 10px;
  }
}
</style>