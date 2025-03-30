<!-- Header -->
<header class="fixed top-0 left-0 w-full bg-white/50 backdrop-blur-md shadow-sm z-50 py-4 md:py-6">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between ">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="#main" title="Logo"
                    class="flex rounded outline-none focus:ring-1 focus:ring-gray-900 focus:ring-offset-2">
                    <img class="w-auto h-8"
                        src="{{asset('')}}portfolio/assets/images/portfolio.png"
                        alt="Logo" />
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="menu-btn" type="button" class="text-gray-900 focus:outline-none">
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden lg:flex lg:items-center lg:space-x-10">
                <a href="#about_us" class="text-base font-medium text-gray-900 hover:text-gray-600">About Me</a>
                <a href="#features" class="text-base font-medium text-gray-900 hover:text-gray-600">Skills</a>
                <a href="#services" class="text-base font-medium text-gray-900 hover:text-gray-600">Experience</a>
                <a href="#integration" class="text-base font-medium text-gray-900 hover:text-gray-600">Projects</a>
                <div class="w-px h-5 bg-gray-300"></div>
                {{--<a href="{{ route('login') }}" class="text-base font-medium text-gray-900 hover:text-gray-600">Login</a>--}}
                <a href="#enquiry"
                    class="px-5 py-2 text-base font-semibold text-gray-900 border border-gray-900 rounded-xl hover:bg-gray-900 hover:text-white">Contact</a>
            </nav>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4 space-y-4 text-center">
            <a href="#about-us" class="block text-gray-900 text-lg font-medium hover:text-gray-600">About Us</a>
            <a href="#features" class="block text-gray-900 text-lg font-medium hover:text-gray-600">Features</a>
            <a href="#services" class="block text-gray-900 text-lg font-medium hover:text-gray-600">Services</a>
            <a href="#integration" class="block text-gray-900 text-lg font-medium hover:text-gray-600">Integration</a>
            <a href="#pricing" class="block text-gray-900 text-lg font-medium hover:text-gray-600">Pricing</a>
            <hr class="border-gray-300">
            <a href="{{ route('login')}}" class="block text-gray-900 text-lg font-medium hover:text-gray-600">Login</a>
            <a href="#enquiry"
                class="block w-full px-5 py-2 text-lg font-semibold text-gray-900 border border-gray-900 rounded-xl hover:bg-gray-900 hover:text-white">Have a project in mind ?</a>
        </div>
    </div>
</header>