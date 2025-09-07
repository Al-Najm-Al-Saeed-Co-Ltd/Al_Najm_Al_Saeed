<template>
  <div class="bg-gray-50 custom-scrollbar overflow-x-hidden">
    <Header />
    <main>
      <slot />
    </main>
    <Footer />
    
    <!-- Notification Container -->
    <NotificationContainer />
    
    <!-- Back to Top Button -->
    <button v-show="showBackToTop" @click="scrollToTop"
      class="fixed bottom-8 right-8 bg-brand-green hover:bg-brand-green/90 text-white w-12 h-12 rounded-full shadow-lg transition duration-300 flex items-center justify-center">
      <ArrowUp class="w-6 h-6" />
    </button>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import { ArrowUp } from 'lucide-vue-next'
import Header from '@/components/website/Header.vue'
import Footer from '@/components/website/Footer.vue'
import NotificationContainer from '@/components/ui/notification/NotificationContainer.vue'

// Reactive data
const showBackToTop = ref(false)

// Methods
const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
}

const handleScroll = () => {
  showBackToTop.value = window.pageYOffset > 300
}

// Lifecycle hooks
onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<style scoped>
/* Smooth scrolling */
html {
  scroll-behavior: smooth;
}
</style>
