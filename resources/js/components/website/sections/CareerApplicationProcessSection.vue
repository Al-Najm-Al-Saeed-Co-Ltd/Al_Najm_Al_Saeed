<template>
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <span class="inline-block px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-full mb-4">
          How to Apply
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
          Application Process
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Simple and straightforward process to join our team
        </p>
      </div>

      <!-- Process Steps -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
        <!-- Step 1 -->
        <div class="text-center">
          <div class="w-16 h-16 bg-brand-green text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
            1
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Submit Application</h3>
          <p class="text-gray-600">
            Fill out our online application form and upload your resume and cover letter.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="text-center">
          <div class="w-16 h-16 bg-brand-green text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
            2
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Initial Review</h3>
          <p class="text-gray-600">
            Our HR team will review your application and qualifications within 3-5 business days.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="text-center">
          <div class="w-16 h-16 bg-brand-green text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
            3
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Interview Process</h3>
          <p class="text-gray-600">
            Selected candidates will be invited for interviews with our team members.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="text-center">
          <div class="w-16 h-16 bg-brand-green text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
            4
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Job Offer</h3>
          <p class="text-gray-600">
            Successful candidates will receive a job offer and begin their onboarding process.
          </p>
        </div>
      </div>

      <!-- Application Form -->
      <div class="bg-gray-50 rounded-2xl p-8 shadow-lg">
        <div class="text-center mb-8">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Ready to Apply?</h3>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Complete the application form below or send your resume directly to our HR department
          </p>
        </div>

        <form class="max-w-4xl mx-auto">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
              <input type="text" id="firstName" name="firstName" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent">
            </div>
            <div>
              <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
              <input type="text" id="lastName" name="lastName" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent">
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
              <input type="email" id="email" name="email" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent">
            </div>
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
              <input type="tel" id="phone" name="phone" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent">
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label for="position" class="block text-sm font-medium text-gray-700 mb-2">Position Applied For *</label>
              <select id="position" name="position" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent">
                <option value="">Select a position</option>
                <option value="hvac-technician">HVAC Technician</option>
                <option value="project-manager">Project Manager</option>
                <option value="sales-representative">Sales Representative</option>
                <option value="customer-service">Customer Service Representative</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div>
              <label for="experience" class="block text-sm font-medium text-gray-700 mb-2">Years of Experience *</label>
              <select id="experience" name="experience" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent">
                <option value="">Select experience level</option>
                <option value="0-1">0-1 years</option>
                <option value="2-3">2-3 years</option>
                <option value="4-5">4-5 years</option>
                <option value="6-10">6-10 years</option>
                <option value="10+">10+ years</option>
              </select>
            </div>
          </div>

          <div class="mb-6">
            <label for="coverLetter" class="block text-sm font-medium text-gray-700 mb-2">Cover Letter</label>
            <textarea id="coverLetter" name="coverLetter" rows="4"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent"
              placeholder="Tell us why you're interested in joining our team..."></textarea>
          </div>

          <div class="mb-6">
            <label for="resume" class="block text-sm font-medium text-gray-700 mb-2">Resume/CV *</label>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
              <Upload class="w-12 h-12 text-gray-400 mx-auto mb-4" />
              <p class="text-gray-600 mb-2">Click to upload or drag and drop</p>
              <p class="text-sm text-gray-500">PDF, DOC, DOCX (Max 10MB)</p>
              <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required
                class="hidden">
            </div>
          </div>

          <div class="mb-6">
            <label class="flex items-start">
              <input type="checkbox" name="agreement" required
                class="mt-1 mr-3 h-4 w-4 text-brand-green focus:ring-brand-green border-gray-300 rounded">
              <span class="text-sm text-gray-600">
                I agree to the <a href="#" class="text-brand-green hover:underline">Terms and Conditions</a> 
                and <a href="#" class="text-brand-green hover:underline">Privacy Policy</a> *
              </span>
            </label>
          </div>

          <div class="text-center">
            <button type="submit"
              class="bg-brand-green text-white px-8 py-4 rounded-lg font-semibold hover:bg-brand-green/90 transition duration-300 text-lg">
              Submit Application
            </button>
          </div>
        </form>
      </div>

      <!-- Contact Information -->
      <div class="mt-16 text-center">
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Questions About the Application Process?</h3>
        <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
          Our HR team is here to help. Feel free to reach out if you have any questions about our 
          application process or available positions.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="mailto:hr@alnajmalsaeed.com"
            class="inline-flex items-center px-8 py-4 bg-brand-green hover:bg-brand-green/90 text-white font-semibold rounded-lg transition-colors duration-200">
            <Mail class="w-5 h-5 mr-2" />
            hr@alnajmalsaeed.com
          </a>
          <a href="tel:+966536161198"
            class="inline-flex items-center px-8 py-4 border-2 border-brand-green text-brand-green hover:bg-brand-green hover:text-white font-semibold rounded-lg transition-colors duration-200">
            <Phone class="w-5 h-5 mr-2" />
            +966 53 616 1198
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Upload, Mail, Phone } from 'lucide-vue-next'
</script>
