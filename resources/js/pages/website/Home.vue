<template>
  <div class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed top-4 left-4 right-4 z-50 mx-auto max-w-7xl">
        <div class="backdrop-blur-xl bg-white/70 rounded-2xl shadow-2xl border border-white/20">
            <div class="px-6 py-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 flex items-center">
                <Building class="w-8 h-8 text-brand-green mr-3" />
                            <h1 class="text-xl sm:text-2xl font-bold text-gray-900">
                                <span class="text-brand-green">Al Najm</span> Al Saeed
                            </h1>
                        </div>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#home" class="text-gray-700 hover:text-brand-green font-medium transition duration-300">Home</a>
              <a href="#about"
                class="text-gray-700 hover:text-brand-green font-medium transition duration-300">About</a>
              <a href="#services"
                class="text-gray-700 hover:text-brand-green font-medium transition duration-300">Services</a>
                        <a href="#hvac" class="text-gray-700 hover:text-brand-green font-medium transition duration-300">HVAC</a>
              <a href="#career"
                class="text-gray-700 hover:text-brand-green font-medium transition duration-300">Career</a>
              <a href="#contact"
                class="text-gray-700 hover:text-brand-green font-medium transition duration-300">Contact</a>
              <a href="#quote"
                class="bg-brand-green hover:bg-brand-green/90 text-white px-6 py-2 rounded-xl font-medium transition duration-300">
                            Get A Quote
                        </a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
              <button @click="toggleMobileMenu" class="text-gray-700 hover:text-brand-green">
                <Menu class="w-6 h-6" />
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation -->
        <div v-show="isMobileMenuOpen" class="md:hidden border-t border-white/20">
                <div class="px-6 py-4 space-y-2">
                    <a href="#home" class="block py-2 text-gray-700 hover:text-brand-green font-medium">Home</a>
                    <a href="#about" class="block py-2 text-gray-700 hover:text-brand-green font-medium">About</a>
                    <a href="#services" class="block py-2 text-gray-700 hover:text-brand-green font-medium">Services</a>
                    <a href="#hvac" class="block py-2 text-gray-700 hover:text-brand-green font-medium">HVAC</a>
                    <a href="#career" class="block py-2 text-gray-700 hover:text-brand-green font-medium">Career</a>
                    <a href="#contact" class="block py-2 text-gray-700 hover:text-brand-green font-medium">Contact</a>
            <a href="#quote"
              class="block py-3 px-4 bg-brand-green hover:bg-brand-green/90 text-white rounded-lg font-medium text-center transition duration-300">Get
              A Quote</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-gradient min-h-screen flex items-center relative overflow-hidden pt-24">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left Column - Text Content -->
                <div class="text-white order-2 lg:order-1">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Create your dream with us, 
                        <span class="text-white">where every step brings joy!</span>
                    </h1>
                    <p class="text-lg sm:text-xl mb-8 text-gray-100 leading-relaxed">
                        We are the Experts in Construction, Maintenance, HVAC, and IT Solutions. 
                        Innovative solutions for a diverse range of needs.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
              <a href="#services"
                class="bg-white text-brand-green px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-gray-100 transition duration-300 text-center flex items-center justify-center">
                <Rocket class="w-5 h-5 mr-2" />Our Services
                        </a>
              <a href="#contact"
                class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-white hover:text-brand-green transition duration-300 text-center flex items-center justify-center">
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
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                  <button v-for="(slide, index) in slides" :key="index" @click="goToSlide(index)" :class="[
                    'w-3 h-3 rounded-full transition duration-300',
                    currentSlide === index ? 'bg-white bg-opacity-100' : 'bg-white bg-opacity-50 hover:bg-opacity-100'
                  ]"></button>
                            </div>
                        </div>
                        
                        <!-- Navigation Arrows -->
                        <div class="mt-6 flex justify-center space-x-4">
                <button @click="prevSlide"
                  class="bg-brand-green hover:bg-brand-green/90 text-white w-10 h-10 sm:w-12 sm:h-12 rounded-full transition duration-300 flex items-center justify-center shadow-lg">
                  <ChevronLeft class="w-4 h-4 sm:w-5 sm:h-5" />
                            </button>
                <button @click="nextSlide"
                  class="bg-brand-green hover:bg-brand-green/90 text-white w-10 h-10 sm:w-12 sm:h-12 rounded-full transition duration-300 flex items-center justify-center shadow-lg">
                  <ChevronRight class="w-4 h-4 sm:w-5 sm:h-5" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full animate-float"></div>
      <div class="absolute bottom-20 right-10 w-32 h-32 bg-white bg-opacity-5 rounded-full animate-float"
        style="animation-delay: 2s;"></div>
        
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">About Al Najm Al Saeed Co. Ltd.</h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto">
            At Al Najm Al Saeed Co. Ltd., we excel in delivering top-tier construction and maintenance services,
            alongside advanced HVAC and IT solutions. Our dedication to quality and innovation ensures that we provide
            tailored, comprehensive solutions that address the unique requirements of each client.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
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
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold text-gray-900 mb-8">We Are Professional & Expert Workers</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                        <div class="w-24 h-24 bg-brand-green rounded-full flex items-center justify-center mx-auto mb-4">
                            <User class="w-12 h-12 text-white" />
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">A.S Usmani</h4>
                        <p class="text-brand-green font-medium">CEO & Founder</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                        <div class="w-24 h-24 bg-brand-green rounded-full flex items-center justify-center mx-auto mb-4">
                            <User class="w-12 h-12 text-white" />
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Areeb Saeed Usmani</h4>
                        <p class="text-brand-green font-medium">Director</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                        <div class="w-24 h-24 bg-brand-green rounded-full flex items-center justify-center mx-auto mb-4">
                            <User class="w-12 h-12 text-white" />
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Suhail Saeed Usmani</h4>
                        <p class="text-brand-green font-medium">Project Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">We Provide The Best Construction, HVAC & IT Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive solutions tailored to meet your specific needs with excellence and innovation
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
                    <p class="text-lg text-gray-600 mb-8">
              From new installations to comprehensive maintenance, our certified HVAC professionals ensure your indoor
              environment remains comfortable and energy-efficient year-round.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6">
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
                    
            <form @submit.prevent="submitCallbackForm" class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                <input v-model="callbackForm.name" type="text" id="name" name="name"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
                  required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Your Email</label>
                <input v-model="callbackForm.email" type="email" id="email" name="email"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
                  required>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="callback_date" class="block text-sm font-medium text-gray-700 mb-2">Call Back Date</label>
                  <input v-model="callbackForm.callback_date" type="date" id="callback_date" name="callback_date"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
                    required>
                            </div>
                            <div>
                                <label for="callback_time" class="block text-sm font-medium text-gray-700 mb-2">Call Back Time</label>
                  <input v-model="callbackForm.callback_time" type="time" id="callback_time" name="callback_time"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
                    required>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                <textarea v-model="callbackForm.message" id="message" name="message" rows="4"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
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
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Join Our Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Be part of a dynamic team that's shaping the future of construction, HVAC, and IT solutions
                </p>
            </div>
            
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="text-center">
                    <Users class="w-16 h-16 text-brand-green mb-6 mx-auto" />
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Career Opportunities</h3>
                    <p class="text-lg text-gray-600 mb-8">
                        We're always looking for talented professionals to join our growing team. 
                        If you're passionate about excellence and innovation, we'd love to hear from you.
                    </p>
            <a href="#contact"
              class="bg-brand-green hover-bg-brand-green text-white px-8 py-4 rounded-lg font-semibold text-lg transition duration-300">
                        <Mail class="w-5 h-5 mr-2" />Send Your Resume
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Get in touch with us for any inquiries about our services
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Contact Info -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-100 rounded-2xl p-8">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Our Office</h3>
                        <div class="space-y-6">
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
                    <div class="bg-gray-50 p-8 rounded-xl">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Send us a Message</h3>
              <form @submit.prevent="submitContactForm" class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                    <input v-model="contactForm.first_name" type="text" id="first_name" name="first_name"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
                      required>
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                    <input v-model="contactForm.last_name" type="text" id="last_name" name="last_name"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
                      required>
                                </div>
                            </div>

                            <div>
                                <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                  <input v-model="contactForm.email" type="email" id="contact_email" name="contact_email"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
                    required>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                  <input v-model="contactForm.phone" type="tel" id="phone" name="phone"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
                    required>
                            </div>

                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                  <input v-model="contactForm.company" type="text" id="company" name="company"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300">
                            </div>

                            <div>
                                <label for="contact_message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                  <textarea v-model="contactForm.message" id="contact_message" name="contact_message" rows="4"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-green focus:border-transparent transition duration-300"
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

    <!-- Footer -->
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

    <!-- Back to Top Button -->
    <button v-show="showBackToTop" @click="scrollToTop"
      class="fixed bottom-8 right-8 bg-brand-green hover:bg-brand-green/90 text-white w-12 h-12 rounded-full shadow-lg transition duration-300 flex items-center justify-center">
        <ArrowUp class="w-6 h-6" />
    </button>
  </div>
</template>

<script setup>
import { ref, reactive, onMounted, onUnmounted } from 'vue'
import {
  Building,
  Menu,
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
  ArrowUp,
  Facebook,
  Twitter,
  Linkedin,
  Instagram
} from 'lucide-vue-next'

// Reactive data
const isMobileMenuOpen = ref(false)
const currentSlide = ref(0)
const showBackToTop = ref(false)

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
const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}

const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % slides.value.length
}

const prevSlide = () => {
  currentSlide.value = (currentSlide.value - 1 + slides.value.length) % slides.value.length
}

const goToSlide = (index) => {
  currentSlide.value = index
}

const scrollToTop = () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
  })
}

const handleScroll = () => {
  showBackToTop.value = window.pageYOffset > 300
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
  window.addEventListener('scroll', handleScroll)

        // Auto-play slider
  const sliderInterval = setInterval(nextSlide, 5000)

  // Cleanup on unmount
  onUnmounted(() => {
    clearInterval(sliderInterval)
  })
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
    </script>

<style scoped>
.gradient-bg {
  background: linear-gradient(135deg, #3d9970 0%, #2d7a5a 100%);
}

.hero-gradient {
  background: linear-gradient(135deg, #3d9970 0%, #2d7a5a 50%, #1a5a3a 100%);
}

.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 25px -5px rgba(61, 153, 112, 0.2), 0 10px 10px -5px rgba(61, 153, 112, 0.1);
}

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

.brand-green {
  color: #3d9970;
}

.bg-brand-green {
  background-color: #3d9970;
}

.hover-bg-brand-green:hover {
  background-color: #2d7a5a;
}

.border-brand-green {
  border-color: #3d9970;
}

.text-brand-green {
  color: #3d9970;
}

/* Smooth scrolling */
html {
  scroll-behavior: smooth;
}

/* Custom scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #3d9970;
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: #2d7a5a;
}
</style>