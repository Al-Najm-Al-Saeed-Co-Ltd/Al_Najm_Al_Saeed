<template>
  <WebsiteLayout>
    <Head title="Home" />

    <!-- Hero Section -->
    <section id="home" class="hero-gradient min-h-screen flex items-center relative overflow-hidden pt-20 sm:pt-24">
      <div class="absolute inset-0 bg-black opacity-10"></div>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 sm:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Left Column - Text Content -->
          <div class="text-white order-2 lg:order-1">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
              Create your dream with us,
              <span class="text-white">where every step brings joy!</span>
            </h1>
            <p class="text-base sm:text-lg md:text-xl mb-8 text-gray-100 leading-relaxed">
              We are the Experts in Construction, Maintenance, HVAC, and IT Solutions.
              Innovative solutions for a diverse range of needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 mb-12">
              <a href="#services"
                class="bg-white text-brand-green px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-gray-100 transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
                <Rocket class="w-5 h-5 mr-2" />Our Services
              </a>
              <a href="#contact"
                class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-white hover:text-brand-green transition duration-300 text-center flex items-center justify-center shadow-lg hover:shadow-xl">
                <Phone class="w-5 h-5 mr-2" />Contact Us
              </a>
            </div>
          </div>

          <!-- Right Column - Image Slider -->
          <div class="order-1 lg:order-2">
            <div class="relative">
              <!-- Image Slider -->
              <div class="image-slider-container relative overflow-hidden rounded-2xl shadow-2xl">
                <div class="slider-wrapper flex transition-transform duration-500 ease-in-out"
                  :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                  <div v-for="(slide, index) in slides" :key="index" class="slide w-full flex-shrink-0 aspect-video">
                    <img :src="slide.image" :alt="slide.alt" class="w-full h-full object-cover object-center">
                  </div>
                </div>

                <!-- Slider Navigation Dots -->
                <div class="absolute bottom-3 sm:bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                  <button v-for="(slide, index) in slides" :key="index" @click="goToSlide(index)" :class="[
                    'w-2 h-2 sm:w-3 sm:h-3 rounded-full transition duration-300',
                    currentSlide === index ? 'bg-white bg-opacity-100' : 'bg-white bg-opacity-50 hover:bg-opacity-100'
                  ]"></button>
                </div>
              </div>

              <!-- Navigation Arrows -->
              <div class="mt-4 sm:mt-6 flex justify-center space-x-3 sm:space-x-4">
                <button @click="prevSlide"
                  class="bg-brand-green hover:bg-brand-green/90 text-white w-10 h-10 sm:w-12 sm:h-12 rounded-full transition duration-300 flex items-center justify-center shadow-lg hover:shadow-xl">
                  <ChevronLeft class="w-4 h-4 sm:w-5 sm:h-5" />
                </button>
                <button @click="nextSlide"
                  class="bg-brand-green hover:bg-brand-green/90 text-white w-10 h-10 sm:w-12 sm:h-12 rounded-full transition duration-300 flex items-center justify-center shadow-lg hover:shadow-xl">
                  <ChevronRight class="w-4 h-4 sm:w-5 sm:h-5" />
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Floating Elements -->
      <div class="absolute top-16 sm:top-20 left-4 sm:left-10 w-16 h-16 sm:w-20 sm:h-20 rounded-full animate-float"
        style="background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.1;"></div>
      <div class="absolute bottom-16 sm:bottom-20 right-4 sm:right-10 w-24 h-24 sm:w-32 sm:h-32 rounded-full animate-float"
        style="animation-delay: 2s; background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1)); --tw-bg-opacity: 0.05;">
      </div>

    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
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

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
          <h2 class="text-4xl font-bold text-gray-900 mb-6">We Provide The Best Construction, HVAC & IT Services</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Comprehensive solutions tailored to meet your specific needs with excellence and innovation
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
          <!-- HVAC Systems -->
          <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
            <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
              <Snowflake class="w-8 h-8 text-blue-600" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">HVAC Systems</h3>
            <p class="text-gray-600">
              Providing expert HVAC solutions for residential and commercial spaces, focusing on efficient air
              conditioning, heating, and ventilation systems to ensure optimal indoor climate control.
            </p>
          </div>

          <!-- Building Construction -->
          <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
            <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
              <HardHat class="w-8 h-8 text-green-600" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Building Construction</h3>
            <p class="text-gray-600">
              Delivering comprehensive building construction services, from initial planning to final finishes, ensuring
              quality, safety, and durability for residential, commercial, and industrial projects.
            </p>
          </div>

          <!-- Interior Design -->
          <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
            <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
              <Paintbrush class="w-8 h-8 text-purple-600" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Interior Design</h3>
            <p class="text-gray-600">
              Creating unique, functional interior spaces that reflect client personalities and needs, combining
              aesthetic appeal with practical design for residential and commercial environments.
            </p>
          </div>

          <!-- Electro-Mechanical Works -->
          <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
            <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mb-6">
              <Zap class="w-8 h-8 text-orange-600" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Electro-Mechanical Works</h3>
            <p class="text-gray-600">
              Specializing in electro-mechanical installations, including electrical and plumbing systems, providing
              reliable, safe, and efficient solutions for diverse residential and commercial needs.
            </p>
          </div>

          <!-- Shades -->
          <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
            <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
              <Umbrella class="w-8 h-8 text-yellow-600" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Shades</h3>
            <p class="text-gray-600">
              Offering innovative shading solutions, from retractable awnings to custom shade structures, designed to
              enhance outdoor comfort and protect against harsh weather conditions.
            </p>
          </div>

          <!-- Website Development -->
          <div class="service-card bg-white p-8 rounded-xl shadow-lg border border-gray-100 transition duration-300">
            <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
              <Laptop class="w-8 h-8 text-indigo-600" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Website Development</h3>
            <p class="text-gray-600">
              Crafting user-friendly, modern websites with responsive design, tailored functionality, and SEO
              optimization, aimed at enhancing client visibility and engagement online.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- HVAC Section -->
    <section id="hvac" class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 class="text-4xl font-bold text-gray-900 mb-6">HVAC Systems</h2>
            <h3 class="text-2xl font-semibold text-brand-green mb-4">Expert HVAC Solutions</h3>
            <p class="text-xl text-gray-600 mb-6">Complete Heating, Ventilation & Air Conditioning Services</p>
            <p class="text-lg text-gray-600 mb-10 leading-relaxed">
              From new installations to comprehensive maintenance, our certified HVAC professionals ensure your indoor
              environment remains comfortable and energy-efficient year-round.
            </p>

            <div class="grid grid-cols-2 gap-8">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-brand-green rounded-lg flex items-center justify-center">
                  <Plus class="w-6 h-6 text-white" />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">New Installation</h4>
                  <p class="text-sm text-gray-600">Complete system setup</p>
                </div>
              </div>
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-brand-green rounded-lg flex items-center justify-center">
                  <Settings class="w-6 h-6 text-white" />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">Renovation</h4>
                  <p class="text-sm text-gray-600">System upgrades</p>
                </div>
              </div>
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-brand-green rounded-lg flex items-center justify-center">
                  <Wrench class="w-6 h-6 text-white" />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">Maintenance</h4>
                  <p class="text-sm text-gray-600">Regular service & repair</p>
                </div>
              </div>
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-brand-green rounded-lg flex items-center justify-center">
                  <Clock class="w-6 h-6 text-white" />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">24/7 Service</h4>
                  <p class="text-sm text-gray-600">Emergency support</p>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-gray-100 rounded-2xl p-8">
            <h3 class="text-2xl font-semibold text-gray-900 mb-6">Request A Call Back</h3>
            <p class="text-gray-600 mb-6">
              Looking for expert advice or a tailored solution? We're here to help. Whether you have questions about our
              construction, HVAC, IT services, or maintenance, our team is ready to assist you.
            </p>

            <form @submit.prevent="submitCallbackForm" class="space-y-6">
              <div class="grid gap-2">
                <Label for="name">Your Name</Label>
                <Input v-model="callbackForm.name" type="text" id="name" name="name" class="mt-1 block w-full"
                  required />
              </div>
              <div class="grid gap-2">
                <Label for="email">Your Email</Label>
                <Input v-model="callbackForm.email" type="email" id="email" name="email" class="mt-1 block w-full"
                  required />
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div class="grid gap-2">
                  <Label for="callback_date">Call Back Date</Label>
                  <Input v-model="callbackForm.callback_date" type="date" id="callback_date" name="callback_date"
                    class="mt-1 block w-full" required />
                </div>
                <div class="grid gap-2">
                  <Label for="callback_time">Call Back Time</Label>
                  <Input v-model="callbackForm.callback_time" type="time" id="callback_time" name="callback_time"
class="mt-1 block w-full" required />
                </div>
              </div>
              <div class="grid gap-2">
                <Label for="message">Message</Label>
                <textarea v-model="callbackForm.message" id="message" name="message" rows="4"
                  class="mt-1 block w-full file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex min-h-[60px] w-full min-w-0 rounded-md border bg-transparent px-3 py-2 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                  placeholder="Tell us about your needs..." required></textarea>
              </div>
              <button type="submit"
                class="w-full bg-brand-green hover:bg-brand-green/90 text-white py-3 px-6 rounded-lg font-semibold transition duration-300 flex items-center justify-center">
                <Send class="w-5 h-5 mr-2" />Request Call Back
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Career Section -->
    <section id="career" class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
          <h2 class="text-4xl font-bold text-gray-900 mb-6">Join Our Team</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Be part of a dynamic team that's shaping the future of construction, HVAC, and IT solutions
          </p>
        </div>

        <div class="bg-white rounded-2xl p-10 shadow-lg">
          <div class="text-center">
            <Users class="w-16 h-16 text-brand-green mb-8 mx-auto" />
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Career Opportunities</h3>
            <p class="text-lg text-gray-600 mb-10 leading-relaxed">
              We're always looking for talented professionals to join our growing team.
              If you're passionate about excellence and innovation, we'd love to hear from you.
            </p>
            <a href="#contact"
              class="bg-brand-green hover-bg-brand-green text-white px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 inline-flex items-center justify-center">
              <Mail class="w-5 h-5 mr-2" />Send Your Resume
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
          <h2 class="text-4xl font-bold text-gray-900 mb-6">Contact Us</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Get in touch with us for any inquiries about our services
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
          <!-- Contact Info -->
          <div class="lg:col-span-1">
            <div class="bg-gray-100 rounded-2xl p-10">
              <h3 class="text-2xl font-semibold text-gray-900 mb-8">Our Office</h3>
              <div class="space-y-8">
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <MapPin class="w-6 h-6 text-red-600" />
                  </div>
                  <div>
                    <h4 class="text-lg font-semibold text-gray-900">Address</h4>
                    <p class="text-gray-600">Prince Abdulaziz bin Musaed bin Julawi 12628</p>
                  </div>
                </div>

                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <Phone class="w-6 h-6 text-green-600" />
                  </div>
                  <div>
                    <h4 class="text-lg font-semibold text-gray-900">Call Us</h4>
                    <p class="text-gray-600">+966 (53) 616-1198</p>
                  </div>
                </div>

                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <Mail class="w-6 h-6 text-blue-600" />
                  </div>
                  <div>
                    <h4 class="text-lg font-semibold text-gray-900">Email Us</h4>
                    <p class="text-gray-600">info@alsaeedstar.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="lg:col-span-2">
            <div class="bg-gray-50 p-10 rounded-xl">
              <h3 class="text-2xl font-semibold text-gray-900 mb-8">Send us a Message</h3>
              <form @submit.prevent="submitContactForm" class="space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                  <div class="grid gap-2">
                    <Label for="first_name">First Name</Label>
                    <Input v-model="contactForm.first_name" type="text" id="first_name" name="first_name"
                      class="mt-1 block w-full" required />
                  </div>
                  <div class="grid gap-2">
                    <Label for="last_name">Last Name</Label>
                    <Input v-model="contactForm.last_name" type="text" id="last_name" name="last_name"
                      class="mt-1 block w-full" required />
                  </div>
                </div>

                <div class="grid gap-2">
                  <Label for="contact_email">Email Address</Label>
                  <Input v-model="contactForm.email" type="email" id="contact_email" name="contact_email"
                    class="mt-1 block w-full" required />
                </div>

                <div class="grid gap-2">
                  <Label for="phone">Phone Number</Label>
                  <Input v-model="contactForm.phone" type="tel" id="phone" name="phone" class="mt-1 block w-full"
                    required />
                </div>

                <div class="grid gap-2">
                  <Label for="company">Company Name</Label>
                  <Input v-model="contactForm.company" type="text" id="company" name="company"
                    class="mt-1 block w-full" />
                </div>

                <div class="grid gap-2">
                  <Label for="contact_message">Message</Label>
                  <textarea v-model="contactForm.message" id="contact_message" name="contact_message" rows="4"
                    class="mt-1 block w-full file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex min-h-[60px] w-full min-w-0 rounded-md border bg-transparent px-3 py-2 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                    placeholder="Tell us about your project..." required></textarea>
                </div>

                <button type="submit"
                  class="w-full bg-brand-green hover:bg-brand-green/90 text-white py-3 px-6 rounded-lg font-semibold transition duration-300 flex items-center justify-center">
                  <Send class="w-5 h-5 mr-2" />Send Message
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </WebsiteLayout>
</template>

<script setup>
import { ref, reactive, onMounted, onUnmounted } from 'vue'
import { Head } from '@inertiajs/vue3'
import {
  Rocket,
  Phone,
  ChevronLeft,
  ChevronRight,
  TrendingUp,
  Users,
  Settings,
  CheckSquare,
  User,
  Snowflake,
  HardHat,
  Paintbrush,
  Zap,
  Umbrella,
  Laptop,
  Plus,
  Wrench,
  Clock,
  Send,
  MapPin,
  Mail,
  MessageCircle,
  Linkedin,
  Facebook
} from 'lucide-vue-next'
import { Input } from '@/components/ui/input'
import { Label } from '@/components/ui/label'
import WebsiteLayout from '@/layouts/website/WebsiteLayout.vue'

// Reactive data
const currentSlide = ref(0)

// Slider data
const slides = ref([
  {
    image: 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
    alt: 'Construction Site'
  },
  {
    image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
    alt: 'HVAC System'
  },
  {
    image: 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
    alt: 'IT Services'
  },
  {
    image: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
    alt: 'Maintenance Work'
  }
])

// Form data
const callbackForm = reactive({
  name: '',
  email: '',
  callback_date: '',
  callback_time: '',
  message: ''
})

const contactForm = reactive({
  first_name: '',
  last_name: '',
  email: '',
  phone: '',
  company: '',
  message: ''
})

// Methods
const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % slides.value.length
}

const prevSlide = () => {
  currentSlide.value = (currentSlide.value - 1 + slides.value.length) % slides.value.length
}

const goToSlide = (index) => {
  currentSlide.value = index
}

const submitCallbackForm = () => {
  // Handle form submission
  console.log('Callback form submitted:', callbackForm)
  alert('Thank you for your callback request! We will get back to you soon.')

  // Reset form
  Object.keys(callbackForm).forEach(key => {
    callbackForm[key] = ''
  })
}

const submitContactForm = () => {
  // Handle form submission
  console.log('Contact form submitted:', contactForm)
  alert('Thank you for your message! We will get back to you soon.')

  // Reset form
  Object.keys(contactForm).forEach(key => {
    contactForm[key] = ''
  })
}

// Lifecycle hooks
onMounted(() => {
  // Auto-play slider
  const sliderInterval = setInterval(nextSlide, 5000)

  // Cleanup on unmount
  onUnmounted(() => {
    clearInterval(sliderInterval)
  })
})
</script>

<style scoped>
/* All brand colors, gradients, and utilities are now defined globally in app.css */

.animate-float {
  animation: float 6s ease-in-out infinite;
}

@keyframes float {

  0%,
  100% {
    transform: translateY(0px);
  }

  50% {
    transform: translateY(-20px);
  }
}
</style>