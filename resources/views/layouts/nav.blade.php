<nav class="bg-cinema-dark border-b border-gray-800 fixed w-full z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <span class="text-xl font-bold text-cinema-gold">CinéMax</span>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-gray-300 hover:text-cinema-gold">Films</a>
                <a href="#" class="text-gray-300 hover:text-cinema-gold">Contact</a>
                
                <!-- Shopping Cart -->
                <a href="/cart" class="text-gray-300 hover:text-cinema-gold relative group">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform duration-300 group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-cinema-gold text-cinema-dark rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">0</span>
                    </div>
                </a>

                @if(session()->has('user'))
                <!-- Utilisateur connecté -->
                <div class="flex items-center space-x-4 ml-6">
                    <a href="/dashbord" class="text-gray-300 hover:text-cinema-gold">Dashboard</a>
                    <span class="text-gray-300 text-sm font-medium">
                    </span>
                    <img src="{{ session('user.photo')  }}" 
                         alt="Photo de profil" 
                         class="w-8 h-8 rounded-full border-2 border-cinema-gold object-cover" />

                    <form action="/logout" method="POST" class="ml-2">
                        @csrf
                        <button type="submit" class="text-sm text-white hover:text-cinema-gold">Logout</button>
                    </form>
                </div>
                @else
                <!-- Invité -->
                <div class="flex items-center space-x-4">
                    <a href="/register" class="bg-cinema-gold text-cinema-dark px-6 py-2 rounded-full hover:bg-yellow-400 font-semibold">
                        Register
                    </a>
                    <a href="/login" class="bg-cinema-gold text-cinema-dark px-6 py-2 rounded-full hover:bg-yellow-400 font-semibold">
                        Sign in
                    </a>
                </div>
                @endif
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center space-x-4">
                <!-- Mobile Shopping Cart -->
                <a href="/cart" class="text-gray-300 hover:text-cinema-gold relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="absolute -top-2 -right-2 bg-cinema-gold text-cinema-dark rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">0</span>
                </a>
                
                <button id="mobile-menu-button" class="text-gray-300 hover:text-cinema-gold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="md:hidden bg-cinema-dark border-t border-gray-800 hidden fixed w-full z-10 top-20">
    <div class="px-4 pt-4 pb-6 space-y-2">
        <a href="/home" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Films</a>
        <a href="#" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Horaires</a>
        <a href="/dashbord" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Dashboard</a>
        <a href="#" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Contact</a>

        @if(session()->has('user'))
        <div class="flex items-center space-x-3 px-3 py-2 border-t border-gray-700 mt-2">
            <img src="{{ session('user.photo') ? asset('storage/' . session('user.photo')) : 'https://via.placeholder.com/150' }}" 
                 alt="Profil" 
                 class="w-8 h-8 rounded-full border-2 border-cinema-gold object-cover" />
            <span class="text-sm text-gray-300">{{ session('user.name') }}</span>
        </div>
        <form action="/logout" method="POST" class="px-3">
            @csrf
            <button type="submit" class="w-full text-left text-sm text-red-500 hover:text-red-400 mt-2">
                Logout
            </button>
        </form>
        @else
        <div class="flex flex-col px-3 py-2 space-y-2">
            <a href="/register" class="bg-cinema-gold text-cinema-dark px-4 py-2 rounded-full text-center font-semibold">Register</a>
            <a href="/login" class="bg-cinema-gold text-cinema-dark px-4 py-2 rounded-full text-center font-semibold">Sign in</a>
        </div>
        @endif
    </div>
</div>

<!-- Script pour menu mobile -->
<script>
    document.getElementById("mobile-menu-button").addEventListener("click", function () {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
    });
</script>