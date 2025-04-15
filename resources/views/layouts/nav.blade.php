<nav class="bg-cinema-dark border-b border-gray-800 fixed w-full z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <span class="text-xl font-bold text-cinema-gold">CinéMax</span>
            </div>
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/home" class="text-gray-300 hover:text-cinema-gold">Films</a>
                <a href="#" class="text-gray-300 hover:text-cinema-gold">Horaires</a>
                <a href="/dashbord" class="text-gray-300 hover:text-cinema-gold">dashboard</a>
                <a href="#" class="text-gray-300 hover:text-cinema-gold">Contact</a>
                <div class="md:flex items-center space-x-4 ml-2">
                    <a href="/register" class="bg-cinema-gold text-cinema-dark px-6 py-2 rounded-full hover:bg-yellow-400 font-semibold">
                        Register
                    </a>
                    <a href="/login" class="bg-cinema-gold text-cinema-dark px-6 py-2 rounded-full hover:bg-yellow-400 font-semibold">
                        Sign up
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button
                    id="mobile-menu-button"
                    class="text-gray-300 hover:text-cinema-gold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>