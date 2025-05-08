@php
    use Illuminate\Support\Str;
@endphp

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

                @if(auth()->check())
                    <div class="flex items-center space-x-4 ml-6">
                        @if(auth()->user()->roles->name === 'admin')
                            <a href="/users" class="text-gray-300 hover:text-cinema-gold">Dashboard</a>
                        @endif

                        <a href="/dashbord">
                            <img src="{{ url('storage/' . auth()->user()->photo) }}"
                                 alt="Profile Picture" 
                                 class="w-8 h-8 rounded-full border-2 border-cinema-gold object-cover hover:opacity-80 transition duration-200" />
                        </a>

                        <form action="/logout" method="POST" class="ml-2">
                            @csrf
                            <button type="submit" class="text-sm text-white hover:text-cinema-gold">Logout</button>
                        </form>
                    </div>
                @else
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
        <a href="/" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Films</a>

        @if(auth()->check() && auth()->user()->roles->name === 'admin')
            <a href="/users" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Dashboard</a>
        @else
            <a href="#" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Contact</a>
        @endif

        @if(auth()->check())
            <a href="/dashbord" class="flex items-center space-x-3 px-3 py-2 border-t border-gray-700 mt-2 hover:opacity-80 transition duration-200">
                <img src="{{ Str::startsWith(auth()->user()->photo, 'data:image') ? auth()->user()->photo : asset('storage/' . auth()->user()->photo) }}"
                     alt="Profile" 
                     class="w-8 h-8 rounded-full border-2 border-cinema-gold object-cover" />
                <span class="text-sm text-gray-300">{{ auth()->user()->name }}</span>
            </a>
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

<!-- Script for mobile menu -->
<script>
    document.getElementById("mobile-menu-button").addEventListener("click", function () {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
    });
</script>
