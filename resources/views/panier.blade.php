@extends('layouts.layout')

@section('title', 'Votre Panier')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <section class="py-16 bg-gradient-to-b from-gray-900 to-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <h2 class="text-4xl font-bold text-white mt-10 mb-8 text-center">Votre <span class="text-cinema-gold">reservation</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Liste des articles dans le panier -->
                <div class="md:col-span-2">
                    @php
                        $totalGeneral = 0;
                    @endphp

@if(!empty($panier))
@php
    $totalFilm = $panier->prix_unite * $panier->quantity;
    $totalGeneral += $totalFilm;
@endphp

<h3 class="cart-title">{{ $panier->title }}</h3>
<div class="ticket-container bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl overflow-hidden shadow-2xl mb-6">
    <div class="ticket-header bg-cinema-gold py-3 px-6">
        <h3 class="text-black text-xl font-bold text-center">cinémaMax</h3>
    </div>
    <div class="ticket-body flex flex-col md:flex-row p-6">
        <div class="ticket-image md:w-1/3">
            <img src="{{ url('/storage/' . $panier->photo) }}" alt="Affiche du film {{ $panier->title }}" 
                 class="w-full h-48 object-cover rounded-lg border-4 border-gray-700 shadow-lg">   
        </div>
        <div class="ticket-details md:w-2/3 md:pl-8 pt-6 md:pt-0">
            <h3 class="text-cinema-gold text-2xl font-bold mb-2">{{ $panier->title }}</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="ticket-info">
                    <span class="text-cinema-gold font-semibold">Date:</span>
                    <span class="text-white ml-2">{{ $panier->date_sortie }}</span>
                </div>
                <div class="ticket-info">
                    <span class="text-cinema-gold font-semibold">Prix unitaire:</span>
                    <span class="text-white ml-2">€{{ number_format($panier->prix_unite, 2) }}</span>
                </div>
                <div class="ticket-info">
                    <span class="text-cinema-gold font-semibold">Quantité:</span>
                    <span class="text-white ml-2">{{ $panier->quantity }}</span>
                </div>
                <div class="ticket-info">
                    <span class="text-cinema-gold font-semibold">Total:</span>
                    <span class="text-white ml-2">€{{ number_format($totalFilm, 2) }}</span>
                </div>
                <div class="ticket-info">
                    <span class="text-cinema-gold font-semibold">Durée:</span>
                    <span class="text-white ml-2">{{ $panier->duree }} minutes</span>
                </div>
                <div class="ticket-info">
                    <span class="text-cinema-gold font-semibold">Âge minimum:</span>
                    <span class="text-white ml-2">{{ $panier->age_restriction }}+</span>
                </div>
            </div>
            
            <div class="description mb-4">
                <h4 class="text-cinema-gold font-semibold mb-1">Description:</h4>
                <p class="text-gray-300">{{ $panier->description }}</p>
            </div>
            
            <div class="flex justify-between items-center mt-4">
                <form action="/delete/{{ $panier->id }}/panier" method="GET">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-all duration-300">
                        <i class="fas fa-trash-alt mr-1"></i> retour
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="ticket-footer flex justify-between items-center p-4 border-t border-gray-700">
        <div class="ticket-id text-gray-400 text-sm">Ticket #: CIN-{{ rand(10000, 99999) }}</div>
    </div>
</div>
@else
<div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl p-8 text-center">
    <i class="fas fa-shopping-cart text-cinema-gold text-5xl mb-4"></i>
    <p class="text-white text-xl">Votre reservation est vide</p>
    <a href="/" class="inline-block mt-6 bg-cinema-gold text-black px-6 py-2 rounded-lg hover:bg-yellow-400 font-bold transition-all duration-300">
        Voir les films disponibles
    </a>
</div>
@endif
                </div>
                
                <!-- Résumé du panier -->
                <div class="md:col-span-1">
                    <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl overflow-hidden shadow-2xl sticky top-20">
                        <div class="bg-cinema-gold py-3 px-6">
                            <h3 class="text-black text-xl font-bold text-center">Résumé de la commande</h3>
                        </div>
                        <div class="p-6">
                            <div class="mb-6">
                                <h4 class="text-white text-lg font-semibold mb-2">Total à payer :</h4>
                                <p class="text-cinema-gold text-2xl font-bold">€{{ number_format($totalGeneral, 2) }}</p>
                            </div>
                            @if (session('error'))
                            <p class="text-l text-red-500 mt-8 font-semibold">{{ session('error') }}</p>
                            @endif
                            <form method="post" action="{{ route('session') }}">    
                                @csrf
                                <button class="w-full bg-cinema-gold text-black px-4 py-2 rounded hover:bg-yellow-400 font-bold transition-all duration-300">
                                    <i class="fas fa-credit-card mr-2"></i> Passer au paiement
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400">Merci d'avoir choisi notre cinéma. Profitez de votre séance!</p>
        </div>
    </section>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function incrementItem(button) {
            const input = button.parentNode.querySelector('input');
            let currentValue = parseInt(input.value) || 0;
            if (currentValue < parseInt(input.max)) {
                input.value = currentValue + 1;
            }
        }

        function decrementItem(button) {
            const input = button.parentNode.querySelector('input');
            let currentValue = parseInt(input.value) || 0;
            if (currentValue > parseInt(input.min)) {
                input.value = currentValue - 1;
            }
        }
    </script>
@endsection
