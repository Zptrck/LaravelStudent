<footer class="bg-gray-800 text-white py-6 mt-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm">© {{ date('Y') }} My Website. All rights reserved.</p>
            <nav class="flex space-x-4 mt-2 md:mt-0">
                <a href="{{ url('/privacy-policy') }}" class="text-sm hover:text-gray-400">Privacy Policy</a>
                <a href="{{ url('/terms') }}" class="text-sm hover:text-gray-400">Terms of Service</a>
            </nav>
        </div>
    </div>
</footer>
</body>
</html>
