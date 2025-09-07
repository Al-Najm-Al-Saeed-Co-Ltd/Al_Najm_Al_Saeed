<template>
  <section id="hvac-services" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          HVAC Systems
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Comprehensive HVAC Services
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          From new installations to emergency repairs and preventive maintenance - we provide complete HVAC solutions for your home and business
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- New Installation -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
            <Wrench class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">New Installation</h3>
          <p class="text-gray-600 mb-6">
            Complete HVAC system installation for new construction and replacement projects with the latest energy-efficient technology.
          </p>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Central Air Conditioning Systems
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Gas & Electric Heating Systems
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Custom Ductwork Design & Installation
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Advanced Ventilation Systems
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Smart Thermostat Integration
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Energy Efficiency Consultation
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              System Sizing & Load Calculations
            </li>
          </ul>
        </div>

        <!-- Repair Services -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
            <Hammer class="w-8 h-8 text-red-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Repair Services</h3>
          <p class="text-gray-600 mb-6">
            Fast, reliable repair services to get your HVAC system back up and running when you need it most.
          </p>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              24/7 Emergency Repairs
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              AC & Heating System Repairs
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Compressor & Motor Replacement
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Refrigerant Leak Detection & Repair
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Electrical Component Repairs
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Thermostat Troubleshooting
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Ductwork Repairs & Sealing
            </li>
          </ul>
        </div>

        <!-- Maintenance Services -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
            <Settings class="w-8 h-8 text-green-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Maintenance Services</h3>
          <p class="text-gray-600 mb-6">
            Comprehensive preventive maintenance services to extend system life and maintain peak performance.
          </p>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Seasonal System Tune-ups
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Regular Filter Replacement
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Coil Cleaning & Maintenance
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              System Performance Testing
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Lubrication & Belt Replacement
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Safety Inspections
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Energy Efficiency Optimization
            </li>
          </ul>
        </div>

        <!-- System Upgrades -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
            <TrendingUp class="w-8 h-8 text-purple-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">System Upgrades</h3>
          <p class="text-gray-600 mb-6">
            Modernize your existing HVAC systems with the latest technology for improved efficiency and comfort.
          </p>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              High-Efficiency System Upgrades
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Smart Home Integration
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Zoning System Installation
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Air Quality Improvement Systems
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              24/7 Emergency Service
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Same-Day Emergency Response
            </li>
            <li class="flex items-center">
              <Check class="w-4 h-4 text-green-500 mr-2 flex-shrink-0" />
              Weekend & Holiday Service
            </li>
          </ul>
        </div>
      </div>

      <!-- Additional Info -->
      <div class="mt-16 bg-white rounded-2xl p-8 shadow-lg">
        <div class="text-center">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Complete HVAC Solutions</h3>
          <p class="text-gray-600 mb-6 max-w-4xl mx-auto">
            From new installations to complex renovations and routine maintenance, we ensure your HVAC systems operate at peak performance, 
            providing comfort, efficiency, and reliability. Our team of skilled professionals uses state-of-the-art equipment and follows 
            industry best practices to deliver exceptional results.
          </p>
          <p class="text-gray-600 max-w-4xl mx-auto">
            Whether you need emergency repairs, system upgrades, or preventive maintenance, we're committed to keeping your indoor 
            environment comfortable and healthy year-round. Trust us to handle all your heating, cooling, and ventilation needs with precision and care.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { 
  Wrench, 
  Hammer, 
  Settings, 
  TrendingUp, 
  Check 
} from 'lucide-vue-next'
</script>
