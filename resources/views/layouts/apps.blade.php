<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'YourCompany') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600">
                {{ config('app.name', 'YourCompany') }}
            </a>
            <div class="hidden md:flex space-x-6 text-sm font-semibold">
                <a href="{{ url('/') }}" class="hover:text-blue-600">Home</a>
                <a href="{{ url('/about') }}" class="hover:text-blue-600">About</a>
                <a href="{{ url('/products') }}" class="hover:text-blue-600">Products</a>
                <a href="{{ url('/faq') }}" class="hover:text-blue-600">FAQ</a>
                <a href="{{ url('/contact') }}" class="hover:text-blue-600">Contact</a>
                <a href="{{ url('/terms') }}" class="hover:text-blue-600">Terms</a>
                <a href="{{ url('/privacy') }}" class="hover:text-blue-600">Privacy</a>
            </div>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <a href="{{ url('/') }}" class="block px-4 py-2 hover:bg-gray-100">Home</a>
            <a href="{{ url('/about') }}" class="block px-4 py-2 hover:bg-gray-100">About</a>
            <a href="{{ url('/products') }}" class="block px-4 py-2 hover:bg-gray-100">Products</a>
            <a href="{{ url('/faq') }}" class="block px-4 py-2 hover:bg-gray-100">FAQ</a>
            <a href="{{ url('/contact') }}" class="block px-4 py-2 hover:bg-gray-100">Contact</a>
            <a href="{{ url('/terms') }}" class="block px-4 py-2 hover:bg-gray-100">Terms</a>
            <a href="{{ url('/privacy') }}" class="block px-4 py-2 hover:bg-gray-100">Privacy</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 text-center text-sm text-gray-600 py-6 mt-12">
        <div class="container mx-auto px-4">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'YourCompany') }}. All rights reserved.</p>
            <div class="mt-2 space-x-4">
                <a href="{{ url('/terms') }}" class="hover:underline">Terms</a>
                <a href="{{ url('/privacy') }}" class="hover:underline">Privacy</a>
                <a href="{{ url('/contact') }}" class="hover:underline">Contact</a>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
