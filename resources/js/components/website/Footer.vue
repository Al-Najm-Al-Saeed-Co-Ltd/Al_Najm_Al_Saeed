<template>
  <footer class="bg-gray-900 text-white py-8 sm:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
        <!-- Company Info Section -->
        <div class="col-span-1 sm:col-span-2 lg:col-span-2">
          <div class="flex items-center mb-4">
            <Link :href="home()" class="flex items-center">
              <img src="/assets/website/logo-white.svg" alt="Al Najm Al Saeed" class="h-10 sm:h-12 lg:h-14 w-auto" />
            </Link>
          </div>
          <p class="text-gray-300 mb-4 text-sm sm:text-base leading-relaxed">
            Welcome to Al Najm Al Saeed Co. Ltd., where innovation drives excellence in construction, HVAC, IT
            services, and maintenance. Our expert team delivers precise, tailored solutions to meet your needs with
            unmatched expertise.
          </p>
          <div class="flex space-x-3 sm:space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <Facebook class="w-5 h-5 sm:w-6 sm:h-6" />
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <Twitter class="w-5 h-5 sm:w-6 sm:h-6" />
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <Linkedin class="w-5 h-5 sm:w-6 sm:h-6" />
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <Instagram class="w-5 h-5 sm:w-6 sm:h-6" />
            </a>
          </div>
        </div>

        <!-- Quick Links Section -->
        <div class="col-span-1">
          <h4 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4">Quick Links</h4>
          <ul class="space-y-2">
            <li><a href="#home"
                class="text-gray-300 hover:text-white transition duration-300 text-sm sm:text-base">Home</a></li>
            <li><a href="#about"
                class="text-gray-300 hover:text-white transition duration-300 text-sm sm:text-base">About Us</a></li>
            <li><a href="#services"
                class="text-gray-300 hover:text-white transition duration-300 text-sm sm:text-base">Our Services</a>
            </li>
            <li><a href="#hvac" class="text-gray-300 hover:text-white transition duration-300 text-sm sm:text-base">HVAC
                Services</a></li>
            <li><a href="#contact"
                class="text-gray-300 hover:text-white transition duration-300 text-sm sm:text-base">Contact Us</a></li>
          </ul>
        </div>

        <!-- Services Section -->
        <div class="col-span-1">
          <h4 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4">Our Services</h4>
          <ul class="space-y-2 text-gray-300">
            <li class="text-sm sm:text-base">HVAC Installation</li>
            <li class="text-sm sm:text-base">HVAC Renovation</li>
            <li class="text-sm sm:text-base">HVAC Maintenance</li>
            <li class="text-sm sm:text-base">Building Construction</li>
            <li class="text-sm sm:text-base">Interior Design</li>
            <li class="text-sm sm:text-base">Website Development</li>
          </ul>
        </div>
      </div>

      <div class="border-t border-gray-800 mt-6 sm:mt-8 pt-6 sm:pt-8 text-center">
        <p class="text-gray-400 text-xs sm:text-sm">
          © Al Najm Al Saeed Co. Ltd. 2025. All Rights Reserved.
        </p>
        <p class="text-gray-400 mt-1 sm:mt-2 text-xs sm:text-sm">
          Designed & Developed by Al Najm Al Saeed Co. Ltd.
        </p>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { home } from '@/routes/website'
import { Facebook, Twitter, Linkedin, Instagram } from 'lucide-vue-next'
</script>