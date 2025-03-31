<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    {{-- <header class="bg-blue-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="text-2xl font-bold">My Website</a>
    
                <!-- Navigation Links -->
                <nav class="hidden md:flex space-x-6">
                    <a href="{{ url('/') }}" class="hover:text-gray-200">Home</a>
                    <a href="{{ url('/about') }}" class="hover:text-gray-200">About</a>
                    <a href="{{ url('/contact') }}" class="hover:text-gray-200">Contact</a>
                </nav>
    
                <!-- Mobile Menu Button -->
                <button id="menuToggle" class="md:hidden text-white focus:outline-none">
                    ☰
                </button>
            </div>
    
            <!-- Mobile Menu -->
            <nav id="mobileMenu" class="hidden md:hidden bg-blue-700">
                <a href="{{ url('/') }}" class="block py-2 px-4 text-white hover:bg-blue-500">Home</a>
                <a href="{{ url('/about') }}" class="block py-2 px-4 text-white hover:bg-blue-500">About</a>
                <a href="{{ url('/contact') }}" class="block py-2 px-4 text-white hover:bg-blue-500">Contact</a>
            </nav>
        </div>
    </header>
     --}}
    {{-- <script>
        document.getElementById("menuToggle").addEventListener("click", function () {
            let mobileMenu = document.getElementById("mobileMenu");
            mobileMenu.classList.toggle("hidden");
        });
    </script> --}}
    



    <x-messages/>