<template>
  <!-- About Section -->
  <section id="about" class="py-20 bg-white" :class="{ 'animate-fade-in-up': visible }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-20">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">About Al Najm Al Saeed Co. Ltd.</h2>
        <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
          At Al Najm Al Saeed Co. Ltd., we excel in delivering top-tier construction and maintenance services,
          alongside advanced HVAC and IT solutions. Our dedication to quality and innovation ensures that we provide
          tailored, comprehensive solutions that address the unique requirements of each client.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
        <div>
          <h3 class="text-3xl font-bold text-gray-900 mb-6">Innovative Solutions for a Diverse Range of Needs</h3>
          <p class="text-lg text-gray-600 mb-6">
            From creating robust structures to maintaining them with precision, and optimizing your HVAC and IT
            systems, our team is committed to delivering exceptional results on time and to the highest standards.
          </p>
          <p class="text-lg text-gray-600">
            Our expertise spans across various sectors, ensuring that we meet the evolving needs of our clients with
            precision and excellence. Al Najm Al Saeed Co. Ltd. is your trusted partner for high-quality, reliable,
            and efficient services that drive success and sustainability in every project we undertake.
          </p>
        </div>
        <div class="bg-gray-100 rounded-2xl p-8">
          <div class="grid grid-cols-2 gap-6">
            <div class="text-center">
              <div class="w-16 h-16 bg-brand-green rounded-full flex items-center justify-center mx-auto mb-4">
                <TrendingUp class="w-8 h-8 text-white" />
              </div>
              <h4 class="font-semibold text-gray-900 mb-2">Strategic Planning</h4>
              <p class="text-sm text-gray-600">Comprehensive project planning and execution</p>
            </div>
            <div class="text-center">
              <div class="w-16 h-16 bg-brand-green rounded-full flex items-center justify-center mx-auto mb-4">
                <Users class="w-8 h-8 text-white" />
              </div>
              <h4 class="font-semibold text-gray-900 mb-2">Skilled Professionals</h4>
              <p class="text-sm text-gray-600">Highly qualified and experienced team</p>
            </div>
            <div class="text-center">
              <div class="w-16 h-16 bg-brand-green rounded-full flex items-center justify-center mx-auto mb-4">
                <Settings class="w-8 h-8 text-white" />
              </div>
              <h4 class="font-semibold text-gray-900 mb-2">Cutting-Edge Technology</h4>
              <p class="text-sm text-gray-600">Latest tools and technologies</p>
            </div>
            <div class="text-center">
              <div class="w-16 h-16 bg-brand-green rounded-full flex items-center justify-center mx-auto mb-4">
                <CheckSquare class="w-8 h-8 text-white" />
              </div>
              <h4 class="font-semibold text-gray-900 mb-2">Efficient Management</h4>
              <p class="text-sm text-gray-600">Streamlined project management</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Team Section -->
      <div class="text-center">
        <div class="mb-16">
          <h3 class="text-4xl font-bold text-gray-900 mb-4">We Are Professional & Expert Workers</h3>
          <div class="w-24 h-1 bg-brand-green mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
          <div
            class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
            <div class="relative mb-6">
              <div
                class="w-32 h-32 rounded-full overflow-hidden mx-auto border-4 border-brand-green shadow-lg group-hover:border-brand-green/80 transition-all duration-300">
                <img
                  src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80"
                  alt="A.S Usmani" class="w-full h-full object-cover">
              </div>
              <div
                class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-brand-green rounded-full flex items-center justify-center shadow-lg">
                <User class="w-4 h-4 text-white" />
              </div>
            </div>
            <h4 class="text-2xl font-bold text-gray-900 mb-2">A.S Usmani</h4>
            <p class="text-brand-green font-semibold text-lg mb-6">CEO & Founder</p>
            <div class="flex justify-center space-x-4">
              <a href="#"
                class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-blue-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 group">
                <Linkedin class="w-5 h-5" />
              </a>
              <a href="#"
                class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-blue-500 hover:text-blue-500 hover:bg-blue-50 transition-all duration-300 group">
                <Facebook class="w-5 h-5" />
              </a>
              <a href="#"
                class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-green-500 hover:text-green-500 hover:bg-green-50 transition-all duration-300 group">
                <MessageCircle class="w-5 h-5" />
              </a>
            </div>
          </div>
          <div
            class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
            <div class="relative mb-6">
              <div
                class="w-32 h-32 rounded-full overflow-hidden mx-auto border-4 border-brand-green shadow-lg group-hover:border-brand-green/80 transition-all duration-300">
                <img
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80"
                  alt="Areeb Saeed Usmani" class="w-full h-full object-cover">
              </div>
              <div
                class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-brand-green rounded-full flex items-center justify-center shadow-lg">
                <User class="w-4 h-4 text-white" />
              </div>
            </div>
            <h4 class="text-2xl font-bold text-gray-900 mb-2">Areeb Saeed Usmani</h4>
            <p class="text-brand-green font-semibold text-lg mb-6">Director</p>
            <div class="flex justify-center space-x-4">
              <a href="#"
                class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-blue-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 group">
                <Linkedin class="w-5 h-5" />
              </a>
              <a href="#"
                class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-blue-500 hover:text-blue-500 hover:bg-blue-50 transition-all duration-300 group">
                <Facebook class="w-5 h-5" />
              </a>
              <a href="#"
                class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-green-500 hover:text-green-500 hover:bg-green-50 transition-all duration-300 group">
                <MessageCircle class="w-5 h-5" />
              </a>
            </div>
          </div>
          <div
            class="group bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
            <div class="relative mb-6">
              <div
                class="w-32 h-32 rounded-full overflow-hidden mx-auto border-4 border-brand-green shadow-lg group-hover:border-brand-green/80 transition-all duration-300">
                <img
                  src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=150&q=80"
                  alt="Suhail Saeed Usmani" class="w-full h-full object-cover">
              </div>
              <div
                class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-brand-green rounded-full flex items-center justify-center shadow-lg">
                <User class="w-4 h-4 text-white" />
              </div>
            </div>
            <h4 class="text-2xl font-bold text-gray-900 mb-2">Suhail Saeed Usmani</h4>
            <p class="text-brand-green font-semibold text-lg mb-6">Project Manager</p>
            <div class="flex justify-center space-x-4">
              <a href="#"
                class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-blue-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 group">
                <Linkedin class="w-5 h-5" />
              </a>
              <a href="#"
                class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-blue-500 hover:text-blue-500 hover:bg-blue-50 transition-all duration-300 group">
                <Facebook class="w-5 h-5" />
              </a>
              <a href="#"
                class="w-10 h-10 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-600 hover:border-green-500 hover:text-green-500 hover:bg-green-50 transition-all duration-300 group">
                <MessageCircle class="w-5 h-5" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { TrendingUp, Users, Settings, CheckSquare, User, Linkedin, Facebook, MessageCircle } from 'lucide-vue-next'

// Props
const props = defineProps({
  visible: {
    type: Boolean,
    default: false
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
</style>