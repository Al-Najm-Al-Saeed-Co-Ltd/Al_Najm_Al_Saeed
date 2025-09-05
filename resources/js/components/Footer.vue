<template>
  <footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="col-span-1 md:col-span-2">
          <div class="flex items-center mb-4">
            <Building class="w-8 h-8 text-brand-green mr-3" />
            <h3 class="text-2xl font-bold">
              <span class="text-brand-green">Al Najm</span> Al Saeed
            </h3>
          </div>
          <p class="text-gray-300 mb-4">
            Welcome to Al Najm Al Saeed Co. Ltd., where innovation drives excellence in construction, HVAC, IT
            services, and maintenance. Our expert team delivers precise, tailored solutions to meet your needs with
            unmatched expertise.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <Facebook class="w-6 h-6" />
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <Twitter class="w-6 h-6" />
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <Linkedin class="w-6 h-6" />
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
              <Instagram class="w-6 h-6" />
            </a>
          </div>
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
          <ul class="space-y-2">
            <li><a href="#home" class="text-gray-300 hover:text-white transition duration-300">Home</a></li>
            <li><a href="#about" class="text-gray-300 hover:text-white transition duration-300">About Us</a></li>
            <li><a href="#services" class="text-gray-300 hover:text-white transition duration-300">Our Services</a>
            </li>
            <li><a href="#hvac" class="text-gray-300 hover:text-white transition duration-300">HVAC Services</a></li>
            <li><a href="#contact" class="text-gray-300 hover:text-white transition duration-300">Contact Us</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-4">Our Services</h4>
          <ul class="space-y-2 text-gray-300">
            <li>HVAC Installation</li>
            <li>HVAC Renovation</li>
            <li>HVAC Maintenance</li>
            <li>Building Construction</li>
            <li>Interior Design</li>
            <li>Website Development</li>
          </ul>
        </div>
      </div>

      <div class="border-t border-gray-800 mt-8 pt-8 text-center">
        <p class="text-gray-400">
          © Al Najm Al Saeed Co. Ltd. 2025. All Rights Reserved.
        </p>
        <p class="text-gray-400 mt-2">
          Designed & Developed by Al Najm Al Saeed Co. Ltd.
        </p>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { Building, Facebook, Twitter, Linkedin, Instagram } from 'lucide-vue-next'
</script>
