<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CinéMax </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('contentcss')
</head>
<body class="bg-cinema-dark text-cinema-light">
  <div class="flex h-screen">
    @if (session('error'))
<div class="fixed top-4 right-4 z-50">
    <div class="bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg flex items-center animate-fade-in-up animate-out fade-out-down animate-duration-300">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
        {{ session('error') }}
        <button onclick="this.parentElement.parentElement.remove()" class="ml-4">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>
@endif

    @if (session('message'))
    <div class="fixed top-4 right-4 z-50">
        <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center animate-fade-in-up animate-out fade-out-down animate-duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            {{ session('message') }}
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
@endif
    <!-- Sidebar -->
    <aside class="w-64 bg-[#1a1c1e] p-6 hidden md:block flex flex-col">
      <div class="mb-8">
        <h1 class="text-2xl font-bold text-cinema-gold">CinéMax Admin</h1>
      </div>
      
      <!-- Navigation Links -->
      <nav class="space-y-2 flex-1">
        <a href="/" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
          </svg>
          Dashboard
        </a>
        <a href="/Admin/film" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
          </svg>
          Films
        </a>
        <a href="/admin/reservation" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          Réservations
        </a>
        <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
          </svg>
          Tickets
        </a>
        <a href="/Admin/users" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          Utilisateurs
        </a>
        <a href="/salle" class="sidebar-link active flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
          </svg>
          Salles
        </a>
        <a href="/seance/dashbord" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
         seances
        </a>
        <a href="/acteur" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        acteurs
        </a>
        <a href="Admin/genre" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
         genres
        </a>
        <a href="/role" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
         roles
        </a>
      </nav>
      
      <!-- Séparateur -->
      <div class="border-t border-gray-700 my-4"></div>
      
      <!-- Bouton de déconnexion -->
      <div class="mt-auto">
        <form method="POST" action="/logout">
          @csrf
          <button type="submit" class="sidebar-link w-full flex items-center px-4 py-3 rounded-lg transition-colors text-left hover:bg-red-900/20 hover:text-red-400 group">
            <svg class="w-5 h-5 mr-3 group-hover:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            Déconnexion
          </button>
        </form>
      </div>
      
      <!-- Informations utilisateur -->
      <div class="mt-4 px-4 py-3 bg-gray-800/50 rounded-lg flex items-center">
        @if(auth()->user())
        <div class="w-8 h-8 rounded-full bg-cinema-gold flex items-center justify-center text-black font-bold mr-3">
          <img src="{{url('storage/' . auth()->user()->photo )}}" 
          alt="Photo de profil" 
          class="w-8 h-8 rounded-full border-2 border-cinema-gold object-cover" />
        </div>
     
       
        <div class="overflow-hidden">
          <p class="text-sm font-medium truncate">{{ auth()->user()->name }}</p>
          <p class="text-xs text-gray-400 truncate">{{ auth()->user()->email }}</p>
        </div>
     
      </div>
      @endif
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 overflow-auto">
      @yield('content')
    </div>
  </div>
</body>
</html>