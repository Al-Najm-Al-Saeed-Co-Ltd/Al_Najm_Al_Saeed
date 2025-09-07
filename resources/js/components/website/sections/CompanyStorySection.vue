<template>
  <section id="story" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Content -->
        <div :class="['transition-all duration-1000', visible ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10']">
          <div class="mb-6">
            <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
              Our Story
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
              Building Excellence Since 1999
            </h2>
          </div>
          
          <div class="space-y-6 text-gray-600 leading-relaxed">
            <p class="text-lg">
              Al Najm Al Saeed was founded with a simple yet powerful vision: to deliver exceptional construction, 
              HVAC, and technology services that exceed client expectations. What started as a small local business 
              has grown into a trusted partner for projects across the region.
            </p>
            
            <p>
              Our journey began when our founder recognized the need for a company that could seamlessly integrate 
              multiple disciplines under one roof. From HVAC systems to building construction, interior design to 
              electro-mechanical works, we've built our reputation on delivering comprehensive solutions.
            </p>
            
            <p>
              Today, we're proud to have completed over 150 projects, serving clients from residential homeowners 
              to large commercial enterprises. Our commitment to quality, innovation, and customer satisfaction 
              remains the cornerstone of everything we do.
            </p>
          </div>

          <!-- Key Milestones -->
          <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-8 h-8 bg-brand-green rounded-full flex items-center justify-center">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">1999</h4>
                <p class="text-sm text-gray-600">Company Founded</p>
              </div>
            </div>
            
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-8 h-8 bg-brand-green rounded-full flex items-center justify-center">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">2010</h4>
                <p class="text-sm text-gray-600">Expanded to HVAC Services</p>
              </div>
            </div>
            
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-8 h-8 bg-brand-green rounded-full flex items-center justify-center">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">2015</h4>
                <p class="text-sm text-gray-600">Added IT Solutions</p>
              </div>
            </div>
            
            <div class="flex items-start space-x-3">
              <div class="flex-shrink-0 w-8 h-8 bg-brand-green rounded-full flex items-center justify-center">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">2024</h4>
                <p class="text-sm text-gray-600">150+ Projects Completed</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Image -->
        <div :class="['transition-all duration-1000 delay-300', visible ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-10']">
          <div class="relative">
            <img 
              src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
              alt="Construction team working on a project"
              class="rounded-2xl shadow-2xl w-full h-96 object-cover"
            />
            
            <!-- Floating Stats Card -->
            <div class="absolute bottom-4 left-4 bg-white rounded-xl shadow-xl p-6 border border-gray-100">
              <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-brand-green rounded-lg flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <div class="text-2xl font-bold text-gray-900">25+</div>
                  <div class="text-sm text-gray-600">Years of Excellence</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
defineProps({
  visible: {
    type: Boolean,
    default: false
  }
})
</script>
