<template>
  <WebsiteLayout>

    <Head title="Our Services" />

    <!-- Hero Section -->
    <section class="hero-gradient min-h-screen flex items-center relative overflow-hidden pt-20 sm:pt-24">
      <div class="absolute inset-0 bg-black opacity-10"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Left Column - Text Content -->
          <div class="text-white order-2 lg:order-1">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                  <Link :href="home()" class="inline-flex items-center text-gray-200 hover:text-white transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Home
                  </Link>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-200" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-gray-200 md:ml-2">Our Services</span>
                  </div>
                </li>
              </ol>
            </nav>

            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
              We Provide The Best
              <span class="text-white">Construction, HVAC & IT Services</span>
            </h1>
            <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-100 leading-relaxed">
              Comprehensive solutions for all your construction, HVAC, and technology needs with unmatched expertise and quality. 
              From planning to completion, we deliver excellence in every project.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 mb-12">
              <Link :href="contact()"
                class="bg-white text-brand-green px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-gray-100 transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
                <Phone class="w-5 h-5 mr-2" />Get Free Quote
              </Link>
              <a href="#services-grid"
                class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-white hover:text-brand-green transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
                <Rocket class="w-5 h-5 mr-2" />View Services
              </a>
            </div>
          </div>

          <!-- Right Column - Services Preview -->
          <div class="order-1 lg:order-2">
            <div class="relative">
              <!-- Services Icons Grid -->
              <div class="grid grid-cols-2 gap-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                  <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <Wind class="w-6 h-6 text-blue-600" />
                  </div>
                  <h3 class="text-white font-semibold text-sm">HVAC Systems</h3>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                  <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <Building2 class="w-6 h-6 text-green-600" />
                  </div>
                  <h3 class="text-white font-semibold text-sm">Construction</h3>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                  <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <Palette class="w-6 h-6 text-purple-600" />
                  </div>
                  <h3 class="text-white font-semibold text-sm">Interior Design</h3>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center hover:bg-white/20 transition-all duration-300">
                  <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <Monitor class="w-6 h-6 text-indigo-600" />
                  </div>
                  <h3 class="text-white font-semibold text-sm">Web Development</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Grid -->
    <section id="services-grid" class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- HVAC Systems -->
          <div
            class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
            <div
              class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-200 transition-colors duration-300">
              <Wind class="w-8 h-8 text-blue-600" />
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">HVAC Systems</h3>
            <p class="text-gray-600 leading-relaxed">
              Providing expert HVAC solutions for residential and commercial spaces, focusing on efficient air
              conditioning, heating, and ventilation systems to ensure optimal indoor climate control.
            </p>
          </div>

          <!-- Building Construction -->
          <div
            class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
            <div
              class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-green-200 transition-colors duration-300">
              <Building2 class="w-8 h-8 text-green-600" />
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Building Construction</h3>
            <p class="text-gray-600 leading-relaxed">
              Delivering comprehensive building construction services, from initial planning to final finishes, ensuring
              quality, safety, and durability for residential, commercial, and industrial projects.
            </p>
          </div>

          <!-- Interior Design -->
          <div
            class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
            <div
              class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors duration-300">
              <Palette class="w-8 h-8 text-purple-600" />
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Interior Design</h3>
            <p class="text-gray-600 leading-relaxed">
              Creating unique, functional interior spaces that reflect client personalities and needs, combining
              aesthetic appeal with practical design for residential and commercial environments.
            </p>
          </div>

          <!-- Electro-Mechanical Works -->
          <div
            class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
            <div
              class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-200 transition-colors duration-300">
              <Zap class="w-8 h-8 text-orange-600" />
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Electro-Mechanical Works</h3>
            <p class="text-gray-600 leading-relaxed">
              Specializing in electro-mechanical installations, including electrical and plumbing systems, providing
              reliable, safe, and efficient solutions for diverse residential and commercial needs.
            </p>
          </div>

          <!-- Shades -->
          <div
            class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
            <div
              class="w-16 h-16 bg-teal-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-teal-200 transition-colors duration-300">
              <Sun class="w-8 h-8 text-teal-600" />
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Shades</h3>
            <p class="text-gray-600 leading-relaxed">
              Offering innovative shading solutions, from retractable awnings to custom shade structures, designed to
              enhance outdoor comfort and protect against harsh weather conditions.
            </p>
          </div>

          <!-- Website Development -->
          <div
            class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
            <div
              class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-indigo-200 transition-colors duration-300">
              <Monitor class="w-8 h-8 text-indigo-600" />
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Website Development</h3>
            <p class="text-gray-600 leading-relaxed">
              Crafting user-friendly, modern websites with responsive design, tailored functionality, and SEO
              optimization, aimed at enhancing client visibility and engagement online.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
            Why Choose Us
          </span>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Excellence in Every Project
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            We combine years of experience with cutting-edge technology to deliver exceptional results
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="text-center">
            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Quality Assurance</h3>
            <p class="text-gray-600">Rigorous quality control processes ensure every project meets the highest standards</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">On-Time Delivery</h3>
            <p class="text-gray-600">We respect your timeline and deliver projects on schedule, every time</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Team</h3>
            <p class="text-gray-600">Certified professionals with extensive experience in their respective fields</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Customer Focus</h3>
            <p class="text-gray-600">Your satisfaction is our priority, with dedicated support throughout the project</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
            Our Process
          </span>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            How We Work
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            A systematic approach that ensures successful project delivery from start to finish
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="text-center">
            <div class="w-16 h-16 bg-brand-green text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
              1
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Consultation</h3>
            <p class="text-gray-600">We listen to your needs and provide expert advice on the best solutions</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-brand-green text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
              2
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Planning</h3>
            <p class="text-gray-600">Detailed project planning with timelines, budgets, and resource allocation</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-brand-green text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
              3
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Execution</h3>
            <p class="text-gray-600">Professional implementation with regular updates and quality checks</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-brand-green text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
              4
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Support</h3>
            <p class="text-gray-600">Ongoing maintenance and support to ensure long-term success</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
            Industries
          </span>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Industries We Serve
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Our expertise spans across multiple industries, delivering tailored solutions for diverse needs
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <Building2 class="w-8 h-8 text-blue-600" />
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Commercial</h3>
            <p class="text-gray-600">Office buildings, retail spaces, and commercial complexes with modern infrastructure</p>
          </div>

          <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
            <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Residential</h3>
            <p class="text-gray-600">Homes, apartments, and residential communities with comfort and efficiency</p>
          </div>

          <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
            <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Industrial</h3>
            <p class="text-gray-600">Manufacturing facilities, warehouses, and industrial complexes with robust systems</p>
          </div>

          <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
            <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Education</h3>
            <p class="text-gray-600">Schools, universities, and educational institutions with modern learning environments</p>
          </div>

          <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
            <div class="w-16 h-16 bg-teal-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Healthcare</h3>
            <p class="text-gray-600">Hospitals, clinics, and medical facilities with specialized systems and compliance</p>
          </div>

          <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
            <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Hospitality</h3>
            <p class="text-gray-600">Hotels, restaurants, and entertainment venues with guest comfort and efficiency</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-gradient-to-r from-brand-green to-brand-green-dark">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
          Ready to Start Your Project?
        </h2>
        <p class="text-xl text-white mb-8 max-w-3xl mx-auto">
          Let us bring your vision to life with our comprehensive range of services and expert team
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <Link :href="contact()"
            class="inline-flex items-center px-8 py-4 bg-white text-brand-green hover:bg-gray-100 font-semibold rounded-lg transition-colors duration-200 shadow-lg hover:shadow-xl">
          Get Free Quote
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
          </Link>
          <Link :href="home()"
            class="inline-flex items-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-brand-green font-semibold rounded-lg transition-colors duration-200">
          Learn More About Us
          </Link>
        </div>
      </div>
    </section>
  </WebsiteLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { contact, home } from '@/routes/website'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'
import { 
  Wind, 
  Building2, 
  Palette, 
  Zap, 
  Sun, 
  Monitor,
  Phone,
  Rocket
} from 'lucide-vue-next'
</script>
