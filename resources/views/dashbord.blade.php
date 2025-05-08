@extends('layouts.layout')

@section('contentcss')
<link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">
@endsection
@section('content')
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'cinema-gold': '#fbc531',
                    'cinema-dark': '#121212',
                }
            }
        }
    }
</script>

<div class="bg-cinema-dark text-white min-h-screen px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Profil Section -->
        <div class="w-full bg-[#1a1c1e] rounded-xl shadow-lg p-8 mb-10">
            <!-- Page Title -->
            <div class="mb-6 text-center">
                <h1 class="text-2xl font-bold">Mon Profil</h1>
                <p class="text-gray-400">Gérez vos informations personnelles</p>
            </div>

            <!-- User Form -->
            <form id="user-form" method="POST" action="/update/user" enctype="multipart/form-data">
              
                <div class="mb-8 flex flex-col items-center">
                    <div class="relative mb-4">
                        <!-- Check if photo is a Data URL or a file URL -->
                        <img id="profile-preview"
                             src=" {{url('storage/' . $user->photo )}}"
                             alt="Photo de profil" 
                             class="w-32 h-32 rounded-full border-4 border-cinema-gold object-cover" />
                    </div>

                    <!-- Input + Button visible -->
                    <label for="photo-upload"
                           class="cursor-pointer inline-flex items-center bg-cinema-gold text-black px-4 py-2 rounded-lg hover:bg-yellow-400 transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 7h2l3.6 7.59L5.25 18H19a1 1 0 000-2H6.42l.93-2h7.57a1 1 0 00.96-.73l1.36-4.09A1 1 0 0016.36 8H7.21l-.94-2H3z"/>
                        </svg>
                        Choisir une photo
                    </label>
                    <input type="file" id="photo-upload" name="photo" accept="image/*" class="hidden">

                    <!-- Nom du fichier sélectionné -->
                    <p id="file-name" class="text-sm text-gray-400 mt-2"></p>
                </div>

                @csrf
                @if (session('message'))
                <p class="text-sm text-green-500 mt-2 font-semibold">{{ session('message') }}</p>
                @endif
                @if (session('error'))
                <p class="text-l text-red-500 mt-8 font-semibold">{{ session('error') }}</p>
                @endif

                <!-- Personal Information -->
                <div class="space-y-6 mb-8">
                    <div>
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" value="{{ $user->name }}" required
                               class="w-full rounded bg-gray-800 p-2 text-white">
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}" required
                               class="w-full rounded bg-gray-800 p-2 text-white">
                    </div>

                    <div>
                        <label for="new-password">Mot de passe</label>
                        @error('password')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                      @enderror
                        <input type="password" id="new-password" name="password"
                               class="w-full rounded bg-gray-800 p-2 text-white" placeholder="Laissez mot passe actuel">
                    </div>

                    <div>
                        <label for="new-password">Nouveau mot de passe</label>
                        <input type="password" id="new-password" name="new_password"
                               class="w-full rounded bg-gray-800 p-2 text-white" placeholder="Laissez vide pour ne pas changer">
                    </div>

                    <div>
                        <label for="confirm-password">Confirmer le mot de passe</label>
                        <input type="password" id="confirm-password" name="confirm_password"
                               class="w-full rounded bg-gray-800 p-2 text-white" placeholder="Laissez vide pour ne pas changer">
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <button type="submit" class="bg-cinema-gold hover:bg-yellow-400 text-black font-bold py-2 px-4 rounded-lg flex-1">
                        Mettre à jour le profil
                    </button>
                    <a href="/user/inActiveUser/{{ $user->id }}" 
                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg flex-1 text-center block">
                        Supprimer le compte
                     </a>
                     
                </div>
            </form>
        </div>

        <!-- Historique des Réservations -->
        <div class="bg-[#1a1c1e] rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold mb-6 text-cinema-gold text-center">Mes Réservations</h2>

            @if($user->reservations->isEmpty())
                <p class="text-gray-400 text-center">Aucune réservation trouvée.</p>
            @else
                <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($user->reservations as $reservation)
                        <div class="bg-gray-800 p-6 rounded-lg shadow-md border-l-4 border-cinema-gold hover:bg-gray-700 transition duration-300">
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-lg font-semibold text-white truncate">{{ $reservation->seance->film->title }}</h3>
                                <span class="bg-cinema-gold text-black text-xs font-bold px-2 py-1 rounded">
                                    {{ $reservation->quantite }} place(s)
                                </span>
                            </div>
                            
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center text-gray-300">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    {{ \Carbon\Carbon::parse($reservation->seance->horaire)->format('d/m/Y') }}
                                </div>
                                
                                <div class="flex items-center text-gray-300">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ \Carbon\Carbon::parse($reservation->seance->horaire)->format('H:i') }}
                                </div>
                                
                                <div class="flex items-center text-gray-300">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    Salle {{ $reservation->seance->salle->name }}
                                </div>
                                
                                <div class="flex items-center text-gray-300">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    Réservé le {{ \Carbon\Carbon::parse($reservation->created_at)->format('d/m/Y') }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
<script src= "{{asset('js/dashbordsalle.js')}}"></script> 
