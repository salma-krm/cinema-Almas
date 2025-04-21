@extends('layouts.layout')
@section('content')

<link rel="stylesheet" href="{{asset('css/login.css')}}"> 
<body class="bg-cinema-dark text-cinema-white min-h-screen">
  <!-- Navigation -->
  <!-- Login Form -->
  <div class="pt-20 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-gray-900/50 p-8 rounded-xl shadow-lg backdrop-blur-sm border border-gray-800">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-white">
          Bienvenue
        </h2>
        <p class="mt-2 text-center text-sm text-gray-400">
          Vous n'avez pas de compte?
          <a href="register.html" class="font-medium text-cinema-gold hover:text-yellow-400">
            Inscrivez-vous ici
          </a>
        </p>
      </div>

  
      <form method="POST" action="{{ route('login') }}">
        @csrf
    @method('POST')
        <div class="rounded-md shadow-sm space-y-4">
          @if (session('message'))
          <p class="text-sm text-green-500 mt-2 font-semibold">{{ session('message') }}</p>
      @endif
      
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">
                    Adresse email
                </label>
                <input id="email" name="email" type="email" required
                    class="mt-1 appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-700 bg-gray-800/50 placeholder-gray-500 text-white focus:outline-none focus:ring-cinema-gold focus:border-cinema-gold focus:z-10 sm:text-sm"
                    placeholder="Votre email" />
            </div>
    
            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">
                    Mot de passe
                </label>
                <input id="password" name="password" type="password" required
                    class="mt-1 appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-700 bg-gray-800/50 placeholder-gray-500 text-white focus:outline-none focus:ring-cinema-gold focus:border-cinema-gold focus:z-10 sm:text-sm"
                    placeholder="Votre mot de passe" />
            </div>

        </div>
    
        <!-- Remember Me + Forgot Password -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember" name="remember" type="checkbox"
                    class="h-4 w-4 text-cinema-gold focus:ring-cinema-gold border-gray-700 rounded" />
                <label for="remember" class="ml-2 block text-sm text-gray-300">
                    Se souvenir de moi
                </label>
            </div>
    
            <div class="text-sm">
                <a href="/forgot-password" class="font-medium text-cinema-gold hover:text-yellow-400">
                    Mot de passe oublié ?
                </a>
            </div>
        </div>
    
        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-full text-cinema-dark bg-cinema-gold hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cinema-gold"
                aria-label="Se connecter">
                Se connecter
            </button>
        </div>
    </form>
    
    
      

      <div class="mt-6">
        <div class="relative">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-700"></div>
          </div>
          <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-gray-900 text-gray-400">Ou continuer avec</span>
          </div>
        </div>

        <div class="mt-6 grid grid-cols-2 gap-3">
          <button type="button"
            class="w-full inline-flex justify-center py-2 px-4 border border-gray-700 rounded-md shadow-sm bg-gray-800 text-sm font-medium text-white hover:bg-gray-700">
            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/>
            </svg>
            Google
          </button>
          <button type="button"
            class="w-full inline-flex justify-center py-2 px-4 border border-gray-700 rounded-md shadow-sm bg-gray-800 text-sm font-medium text-white hover:bg-gray-700">
            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
              <path d="M22,12.1c0-5.7-4.6-10.2-10.2-10.2c-5.7,0-10.2,4.6-10.2,10.2c0,5.1,3.7,9.3,8.5,10.1v-7.1H7.1v-3H10V9.4c0-2.9,1.7-4.5,4.4-4.5c1.3,0,2.6,0.2,2.6,0.2v2.9h-1.5c-1.4,0-1.9,0.9-1.9,1.8V12h3.2l-0.5,3h-2.7v7.1C18.3,21.4,22,17.2,22,12.1z"/>
            </svg>
            Facebook
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
   <script src= "{{asset('js/app.js')}}"></script> 
</body>
</html>
@endsection