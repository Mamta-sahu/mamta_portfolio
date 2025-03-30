@extends('frontend.layout.app')
<style>
    .dropdown-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }
    .dropdown-menu.open {
        max-height: 200px; /* Adjust height as needed */
    }
    a.know_more {
    position: absolute;
    z-index: 10;
}
</style>
@section('content')
    <!-- Hero  -->
    <div class="relative bg-gray-50" id="main">
        <div class="absolute bottom-0 right-0 overflow-hidden lg:inset-y-0">
            <img class="w-auto h-full"
                src="https://d33wubrfki0l68.cloudfront.net/1e0fc04f38f5896d10ff66824a62e466839567f8/699b5/images/hero/3/background-pattern.png"
                alt="" />
        </div>

        <section class="relative py-12 sm:py-16 lg:pt-20 lg:pb-36  mt-4" id="profile">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid grid-cols-1 gap-y-8 lg:items-center lg:grid-cols-2 sm:gap-y-20 xl:grid-cols-5">
                    <div class="text-center xl:col-span-2 lg:text-left md:px-16 lg:px-0">
                        <div class="max-w-sm mx-auto sm:max-w-md md:max-w-full">
                            <h1
                                class="text-4xl font-bold leading-tight text-gray-900 sm:text-5xl sm:leading-tight lg:text-6xl lg:leading-tight font-pj">
                                Hi, I am Mamta Sahu <span class="font-bold" style="font-size: 33px; color: rgb(255 200 61);">(Web Developer)</span></h1>
                                

                            <div class="mt-8 lg:mt-12 lg:flex lg:items-center">
                                

                                <p class="mt-4 px-5 text-lg text-gray-900 lg:mt-0 lg:ml-4 font-pj">Dedicated in website development seeking to leverage technical expertise for personal and organizational growth. Passionate about web development with hands-on experience in Laravel, PHP, and frontend technologies.
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 sm:flex sm:items-center sm:justify-center lg:justify-start sm:space-x-5 lg:mt-12">
                            
                            <a href="{{asset('')}}portfolio/assets/images/Mamta_Sahu_Laravel_Developer.pdf" 
                                download="Mamta_Sahu_Resume.pdf" 
                                title="Download Resume"
                                class="inline-flex items-center px-4 py-4 mt-4 text-lg font-bold transition-all duration-200 bg-transparent border border-transparent sm:mt-0 font-pj justify-center rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 hover:bg-gray-200 focus:bg-gray-200"
                                role="button">
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    Download Resume
                                </a>

                        </div>
                    </div>

                    <div class="xl:col-span-3">
                        <img class="w-full mx-auto scale-110"
                            src="{{asset('')}}portfolio/assets/images/profile.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Aboutus -->

    <section class="relative bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white py-24 px-6 overflow-hidden"
        id="about_us">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <!-- Left Side (Image) -->
            <div class="md:w-1/2 relative">
                <img src="{{asset('')}}portfolio/assets/images/about.jpg"
                    alt="About Us"
                    class="rounded-xl shadow-xl w-full h-auto transform hover:scale-105 transition duration-300">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-black/30 rounded-xl"></div>
            </div>

            <!-- Right Side (Content) -->
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-5xl font-bold leading-tight">About Me</h2>
                <p class="mt-6 text-lg text-gray-200">
                    A motivated PHP developer with a strong background in building functional and dynamic web applications. With a degree in Computer Science from AKTU University and hands-on experience in Laravel, PHP, JavaScript, and frontend technologies. 
                </p>
                <p class="mt-4 text-lg text-gray-200">
                    I have worked on multiple web projects that improved user experience and efficiency.
                </p>
                <a href="https://www.linkedin.com/in/mamta-sahu-57680b1ba/" 
   target="_blank" 
   rel="noopener noreferrer"
   class="know_more mt-8 inline-block bg-white text-blue-600 font-semibold py-3 px-8 rounded-full 
          shadow-lg hover:bg-blue-600 hover:text-white transition-all duration-300">
    Know More
</a>

            </div>
        </div>

        <!-- Wave Divider -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg viewBox="0 0 1440 320" class="w-full">
                <path fill="white" fill-opacity="1"
                    d="M0,256L48,266.7C96,277,192,299,288,293.3C384,288,480,256,576,250.7C672,245,768,267,864,261.3C960,256,1056,224,1152,213.3C1248,203,1344,213,1392,218.7L1440,224V320H0Z">
                </path>
            </svg>
        </div>
    </section>



    <!-- Feature -->

    <section class="bg-white-50 py-16 px-4" id="features">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-900">My Skills</h2>
            {{--<p class="mt-4 text-gray-600">Explore the powerful features that make our platform stand out.</p>--}}

            <div class="mt-12 grid gap-6 sm:grid-cols-2 md:grid-cols-3">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 transition-all hover:scale-105">
                    <div class="flex items-center justify-center text-blue-500 text-5xl">
                        <img src="{{asset('')}}portfolio/assets/images/laravel.png">
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Laravel</h3>
                    {{-- <p class="mt-2 text-gray-600">Experience blazing fast performance with our optimized systems.</p> --}}
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 transition-all hover:scale-105">
                    <div class="flex items-center justify-center text-green-500 text-5xl">
                        <img src="{{asset('')}}portfolio/assets/images/php.svg" style="width: 100px; height: 100px;">
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">PHP</h3>
                    
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 transition-all hover:scale-105">
                    <div class="flex items-center justify-center text-yellow-500 text-5xl">
                        <img src="{{asset('')}}portfolio/assets/images/MySQL.png" style="width: 100px; height: 100px;">
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">MySQL</h3>
                    
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 transition-all hover:scale-105">
                    <div class="flex items-center justify-center text-red-500 text-5xl">
                        <img src="{{asset('')}}portfolio/assets/images/hcj.jpg" style="width: 170px; height: 100px;">
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">HTML|CSS|JS</h3>
                    
                </div>

                <!-- Feature 5 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200 transition-all hover:scale-105">
                    <div class="flex items-center justify-center text-purple-500 text-5xl">
                        <img src="{{asset('')}}portfolio/assets/images/bootstrap.jpg" style="width: 100px; height: 100px;">
                    </div>
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Bootstrap</h3>
                    
                </div>

                
            </div>
        </div>
    </section>
    <!-- Service -->
    <section class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white py-16 px-6"
        id="services">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-5xl font-bold mt-4">Work Experience</h2>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-1">
                <!-- Service Card 1 -->
                <div
                    class="p-8 bg-white/10 border border-gray-600 rounded-2xl shadow-lg backdrop-blur-lg hover:scale-105 transition-transform duration-300">
                    
                    <h4 class="text-2xl font-semibold mt-4" style="text-align: start">Mind Power Research And Training Institute (May 2023 - Sep 2024)</h4>
                    <ul class="text-gray-400 mt-2" style="text-align: start; list-style:circle">
                        <li>Developed Gemologist, Astrologer, Portfolio, and Trayambkeshwar projects.</li>
                        <li>Managed both frontend and backend development.</li>
                        <li>Created 5+ fully functional websites with clean, reusable code.</li>
                    </ul>
                </div>

                <!-- Service Card 2 -->
                <div
                    class="p-8 bg-white/10 border border-gray-600 rounded-2xl shadow-lg backdrop-blur-lg hover:scale-105 transition-transform duration-300">
                    <h4 class="text-2xl font-semibold mt-4" style="text-align: start">SWA Softech (December 2023 - Present)</h4>
                    <ul class="text-gray-400 mt-2" style="text-align: start; list-style:circle">
                        <li>Developing and optimizing dynamic web applications. Contributed to projects while managing both frontend and backend development, ensuring clean, efficient, and reusable code. </li>
                        
                    </ul>
                </div>

                
            </div>
        </div>
    </section>


    <!-- Steps  -->
    {{-- <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Projects
                </h2>
            </div>

            <div class="relative mt-12 lg:mt-20">
                <div class="absolute inset-x-0 hidden xl:px-44 top-2 md:block md:px-20 lg:px-28">
                    <img class="w-full"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/steps/2/curved-dotted-line.svg"
                        alt="Pipeline process" />
                </div>

                <div class="relative grid grid-cols-1 text-center gap-y-12 md:grid-cols-3 gap-x-12">
                    <!-- First Dropdown (Active by Default) -->
                    <div>
                        <div class="relative w-max">
                            <button data-dropdown="dropdown1" class="dropdownButton mt-6 w-full bg-gray-800 text-xl font-semibold text-white py-2 px-4 rounded-lg md:mt-10">
                                Trayambkeshwar (Feb 2024 - Apr 2024)
                            </button>
            
                            <div data-menu="dropdown1" class="dropdownMenu absolute left-0 mt-2 w-full min-w-[200px] bg-gray-800 text-white border border-gray-700 rounded-lg shadow-lg">
                                <ul class="text-gray-400 mt-2 px-6 py-2" style="text-align: start; list-style:circle">
                                    <li>Developed an online course selling platform focused on gemology.</li>
                                    <li>Technologies used: Laravel, HTML, CSS, Bootstrap, JavaScript, AJAX, jQuery, MySQL.</li>
                                    <li>Integrated PhonePe payment gateway and Google Analytics for user tracking.</li>
                                    <li>Implemented IP tracking to analyze visitor locations</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
            
                    <!-- Second Dropdown -->
                    <div>
                        <div class="relative w-max">
                            <button data-dropdown="dropdown2" class="dropdownButton mt-6 w-full bg-gray-800 text-xl font-semibold text-white py-2 px-4 rounded-lg md:mt-10">
                                MPRTI Website (May 2024 - Sep 2024)
                            </button>
            
                            <div data-menu="dropdown2" class="dropdownMenu absolute left-0 mt-2 w-full min-w-[200px] bg-gray-800 text-white border border-gray-700 rounded-lg shadow-lg hidden">
                                <ul class="text-gray-400 mt-2 px-6 py-2" style="text-align: start; list-style:circle">
                                    <li>Built and maintained the official MPRTI website for personal development training programs.</li>
                                    <li>Designed a user-friendly interface to display courses, workshops, and training programs.</li>
                                    <li>Technologies used: Laravel, HTML, CSS, Bootstrap, JavaScript, AJAX, jQuery, PHP, MySQL.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                </div>            
            </div>
        </div>
    </section> --}}
    <section class="py-16 bg-gray-100">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">My Projects</h2>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Trayambkeshwar Project -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Trayambkeshwar</h3>
                    <p class="text-gray-600 mt-2">An online course platform focusing on gemology and energy-wise scanning of gems.</p>
                    <a href="https://www.trayambkeshwar.com/" target="_blank" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold">
                        View Project →
                    </a>
                </div>
    
                <!-- Gemologist Project -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Gemologist</h3>
                    <p class="text-gray-600 mt-2">A dynamic platform for gemstone analysis and recommendations.</p>
                    <a href="https://gritl.in/" target="_blank" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold">
                        View Project →
                    </a>
                </div>
    
                <!-- Astrologer Project -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Astrologer</h3>
                    <p class="text-gray-600 mt-2">A web application offering astrological predictions and reports.</p>
                    <a href="https://astrocure.gritl.in/" target="_blank" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold">
                        View Project →
                    </a>
                </div>
    
                <!-- Coaching Institute Project -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">MPRTI</h3>
                    <p class="text-gray-600 mt-2">MPRTI (Mind Power Research and Training Institute) is an online platform offering courses focused on unlocking the full potential of the human mind.</p>
                    <a href="hhttps://mprti.in/" target="_blank" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold">
                        View Project →
                    </a>
                </div>
    
                <!-- Portfolio Website -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Portfolio</h3>
                    <p class="text-gray-600 mt-2">A beautifully designed personal portfolio website dedicated to showcasing the life, teachings, and work of a renowned spiritual master. </p>
                    <a href="https://rajnishmishra.com/" target="_blank" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold">
                        View Project →
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Engineers Society Education</h3>
                    <p class="text-gray-600 mt-2">A digital platform designed to efficiently manage coaching classes, student data, teachers, and associates. The system provides an all-in-one solution for coaching institutes to streamline administrative tasks, track student progress, and manage faculty members effectively. </p>
                    <a href="https://edu.smartwebarts.co.in/" target="_blank" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-semibold">
                        View Project →
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
    <section
        class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-black to-gray-800 px-6 py-4" id="enquiry">
        <div class="max-w-7xl w-full flex flex-col md:flex-row items-center gap-12">
            <!-- Left Content -->
            <div class="md:w-1/2 text-white">
                <p class="text-blue-400 uppercase tracking-wide text-sm">Got a project in mind?</p>
                <h2 class="text-5xl font-bold mt-4 leading-tight">
                    I turn ideas into powerful digital experiences.
                </h2>
                <p class="mt-4 text-gray-400">
                    With expertise in Laravel, PHP, and web development, I craft seamless, efficient, and scalable solutions tailored to your needs.
                    <br> <br>
                    Let’s build something amazing together!
                </p>
            </div>

            <!-- Contact Form (Glassmorphism Effect) -->
            <div class="md:w-1/2 bg-white/5 p-8 rounded-2xl shadow-xl backdrop-blur-lg border border-gray-600 max-w-lg">
                @if(session('success'))
                    <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <h3 class="text-white text-lg font-semibold">
                    Let's create something extraordinary together! 
                </h3>
                <form action="{{ route('contact.store') }}" method="POST" class="mt-6 space-y-4">
                    @csrf
                    <input type="text" name="name" placeholder="First & Last name"
                        class="w-full px-4 py-3 bg-transparent border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('name')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                    <input type="email" name="email" placeholder="Email address"
                        class="w-full px-4 py-3 bg-transparent border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('email')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                    <input type="number" name="phone" placeholder="Phone number"
                        class="w-full px-4 py-3 bg-transparent border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('phone')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                    <textarea name="message" placeholder="Write your message"
                        class="w-full px-4 py-3 bg-transparent border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 h-24"></textarea>
                        @error('message')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                    <button type="submit"
                        class="w-full mt-4 px-6 py-3 text-white bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll(".dropdownButton");

            buttons.forEach(button => {
                button.addEventListener("click", function () {
                    const dropdownID = this.getAttribute("data-dropdown");
                    const menu = document.querySelector(`[data-menu="${dropdownID}"]`);
                    
                    // Close all dropdowns first
                    document.querySelectorAll(".dropdownMenu").forEach(menu => menu.classList.add("hidden"));

                    // Toggle the clicked dropdown
                    menu.classList.toggle("hidden");
                });
            });

            // Close dropdown when clicking outside
            document.addEventListener("click", (event) => {
                if (!event.target.closest(".relative")) {
                    document.querySelectorAll(".dropdownMenu").forEach(menu => menu.classList.add("hidden"));
                }
            });
        });
    </script>
    <script>document.querySelector("svg").addEventListener("click", () => console.log("Clicked!"));
    </script>
@endsection
