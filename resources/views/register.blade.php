@extends('layouts.layout')
@section('content')

{{-- link css --}}
<link rel="stylesheet" href="{{asset('css/register.css')}}"> 
<body class="bg-cinema-dark text-cinema-white min-h-screen">
  <!-- Navigation -->
  <!-- Registration Form -->
  <div class="pt-20 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-gray-900/50 p-8 rounded-xl shadow-lg backdrop-blur-sm border border-gray-800">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-white">
          Créer votre compte
        </h2>
        <p class="mt-2 text-center text-sm text-gray-400">
          Vous avez déjà un compte?
          <a href="login.html" class="font-medium text-cinema-gold hover:text-yellow-400">
            Connectez-vous ici
          </a>
        </p>
      </div>


      
      <form method="POST" action="/createuser">
        @csrf
      
        <!-- Nom -->
        <div>
          <label for="last-name" class="block text-sm font-medium text-gray-300">Nom</label>
          <input id="last-name" name="name" type="text" required
            class="mt-1 appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-700 bg-gray-800/50 placeholder-gray-500 text-white focus:outline-none focus:ring-cinema-gold focus:border-cinema-gold focus:z-10 sm:text-sm"
            placeholder="Votre nom">
          <p id="last-name-error" class="text-sm text-red-500 mt-1"></p>
        </div>
      
        <!-- Email -->
        <div class="mt-4">
          
          <label for="email" class="block text-sm font-medium text-gray-300">Adresse email</label>
          <input id="email" name="email" type="email" required
            class="mt-1 appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-700 bg-gray-800/50 placeholder-gray-500 text-white focus:outline-none focus:ring-cinema-gold focus:border-cinema-gold focus:z-10 sm:text-sm"
            placeholder="Votre email">
            @error('email')
            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
          @enderror
          
        </div>
      
        <!-- Mot de passe -->
        <div class="mt-4">
          <label for="password" class="block text-sm font-medium text-gray-300">Mot de passe</label>
          <input id="password" name="password" type="password" required
            class="mt-1 appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-700 bg-gray-800/50 placeholder-gray-500 text-white focus:outline-none focus:ring-cinema-gold focus:border-cinema-gold focus:z-10 sm:text-sm"
            placeholder="Créer un mot de passe">
          <p id="password-error" class="text-sm text-red-500 mt-1"></p>
        </div>
      
        <!-- Confirmer mot de passe -->
        <div class="mt-4">
          <label for="confirm-password" class="block text-sm font-medium text-gray-300">Confirmer le mot de passe</label>
          <input id="confirm-password" name="password_confirmation" type="password" required
            class="mt-1 appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-700 bg-gray-800/50 placeholder-gray-500 text-white focus:outline-none focus:ring-cinema-gold focus:border-cinema-gold focus:z-10 sm:text-sm"
            placeholder="Confirmer votre mot de passe">
          <p id="confirm-password-error" class="text-sm text-red-500 mt-1"></p>
        </div>
      
        <!-- Bouton d'envoi -->
        <button type="submit" class="mt-6 p-2 w-full bg-cinema-gold text-white rounded-lg">S'inscrire</button>
      </form>
      

      <div class="mt-6">
        <div class="relative">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-700"></div>
          </div>
          <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-gray-900 text-gray-400">Ou s'inscrire avec</span>
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
     <script src= "{{asset('js/register.js')}}"></script> 
</body>
</html>
@endsection