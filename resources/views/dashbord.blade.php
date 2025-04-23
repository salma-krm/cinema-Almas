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

<div class="bg-cinema-dark text-white min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-2xl bg-[#1a1c1e] rounded-xl shadow-lg p-8">
        <!-- Page Title -->
        <div class="mb-6 text-center">
            <h1 class="text-2xl font-bold">Mon Profil</h1>
            <p class="text-gray-400">Gérez vos informations personnelles</p>
        </div>

        <!-- User Form -->
        <form id="user-form" method="POST" action="" enctype="multipart/form-data">
            @csrf
            <!-- Profile Picture -->
            <!-- Profile Picture -->
<div class="mb-8 flex flex-col items-center">
    <div class="relative mb-4">
        <img id="profile-preview"
             src="{{ $user->photo }}" 
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
                <button type="button" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg flex-1" id="delete-account">
                    Supprimer le compte
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Script JS -->

@endsection
