{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen relative bg-gray-50 p-4">
    <div class="absolute bottom-0 right-0 overflow-hidden lg:inset-y-0">
        <img class="w-auto h-full"
            src="https://d33wubrfki0l68.cloudfront.net/1e0fc04f38f5896d10ff66824a62e466839567f8/699b5/images/hero/3/background-pattern.png"
            alt="" />
    </div>
    <div class="flex flex-col md:flex-row w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Left Section -->
        <div class="w-full md:w-1/2 bg-gray-100 flex items-center justify-center">
            <img src="{{asset('assets/images/login_image.jpeg')}}" alt="Login Illustration" class="w-full h-full">
        </div>
        
        
        <!-- Right Section with Image -->
        <div class="w-full md:w-1/2 flex flex-col justify-center p-8">
            <a href="/"class="flex justify-center mb-4">
                <img src="https://d33wubrfki0l68.cloudfront.net/682a555ec15382f2c6e7457ca1ef48d8dbb179ac/f8cd3/images/logo.svg" alt="Logo" class="w-24">
            </a>
            <h2 class="text-3xl font-bold text-gray-900">Login to Your Account</h2>
            <p class="text-gray-600 mt-2">Join with 4600+ Developers and start getting feedback now.</p>
            <form action="#" method="POST" class="mt-6">
                <div>
                    <label class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" required 
                        class="w-full px-4 py-2 mt-1 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mt-4 relative">
                    <label class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" name="password" id="password" required 
                        class="w-full px-4 py-2 mt-1 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="button" id="togglePassword" class="absolute bottom-2 right-3 flex items-center text-gray-500">
                            <span id="eyeIcon">👁️</span>
                        </button>
                        
                </div>
                <div class="flex items-center justify-between mt-4">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" class="mr-2"> Remember me
                    </label>
                    <a href="#" class="text-sm text-red-500 hover:underline">Forgot password?</a>
                </div>
                <button type="submit" 
                    class="w-full px-4 py-2 mt-4 font-semibold px-8 text-lg font-bold text-white transition-all duration-200 bg-gray-900 border border-transparent rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 font-pj justif-center hover:bg-gray-600">
                    Login
                </button>
            </form>
            <p class="mt-4 text-sm text-gray-600">Don't have an account? 
                <a href="#" class="text-red-500 hover:underline">Sign up</a>
            </p>
        </div>
        
    </div>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.textContent = '🙈';
            } else {
                passwordField.type = 'password';
                eyeIcon.textContent = '👁️';
            }
        });
    </script>
</body>
</html>