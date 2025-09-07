<template>
  <section id="benefits" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          Employee Benefits
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Comprehensive Benefits Package
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          We offer competitive benefits to support our employees' well-being and professional growth
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Health & Wellness -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
            <Heart class="w-8 h-8 text-red-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Health & Wellness</h3>
          <ul class="space-y-3 text-gray-600">
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Comprehensive health insurance
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Dental and vision coverage
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Wellness programs
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Mental health support
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Annual health checkups
            </li>
          </ul>
        </div>

        <!-- Financial Benefits -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
            <DollarSign class="w-8 h-8 text-green-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Financial Benefits</h3>
          <ul class="space-y-3 text-gray-600">
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Competitive salary packages
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Performance bonuses
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Retirement savings plan
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Profit sharing
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Financial planning assistance
            </li>
          </ul>
        </div>

        <!-- Time Off -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
            <Calendar class="w-8 h-8 text-blue-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Time Off</h3>
          <ul class="space-y-3 text-gray-600">
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Generous vacation days
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Sick leave
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Personal days
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              National holidays
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Flexible scheduling
            </li>
          </ul>
        </div>

        <!-- Professional Development -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
            <GraduationCap class="w-8 h-8 text-purple-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Professional Development</h3>
          <ul class="space-y-3 text-gray-600">
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Training and certification programs
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Conference attendance
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Mentorship opportunities
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Skill development workshops
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Tuition reimbursement
            </li>
          </ul>
        </div>

        <!-- Work Environment -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6">
            <Users class="w-8 h-8 text-yellow-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Work Environment</h3>
          <ul class="space-y-3 text-gray-600">
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Modern office facilities
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Collaborative workspace
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Latest technology and tools
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Team building activities
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Employee recognition programs
            </li>
          </ul>
        </div>

        <!-- Additional Perks -->
        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
          <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6">
            <Gift class="w-8 h-8 text-indigo-600" />
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Additional Perks</h3>
          <ul class="space-y-3 text-gray-600">
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Company vehicle (for field positions)
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Uniform and safety equipment
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Employee discounts
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Referral bonuses
            </li>
            <li class="flex items-center">
              <Check class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" />
              Long-term service awards
            </li>
          </ul>
        </div>
      </div>

      <!-- Benefits Summary -->
      <div class="mt-16 bg-white rounded-2xl p-8 shadow-lg">
        <div class="text-center">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Why Our Benefits Matter</h3>
          <p class="text-gray-600 mb-6 max-w-4xl mx-auto">
            We believe that taking care of our employees is essential to our success. Our comprehensive benefits 
            package is designed to support your health, financial well-being, and professional growth. We're 
            committed to creating an environment where you can thrive both personally and professionally.
          </p>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div class="text-center">
              <div class="text-3xl font-bold text-brand-green mb-2">100%</div>
              <p class="text-gray-600">Health Insurance Coverage</p>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-brand-green mb-2">25+</div>
              <p class="text-gray-600">Paid Days Off</p>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-brand-green mb-2">$5K</div>
              <p class="text-gray-600">Annual Training Budget</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { 
  Heart, 
  DollarSign, 
  Calendar, 
  GraduationCap, 
  Users, 
  Gift, 
  Check 
} from 'lucide-vue-next'
</script>
