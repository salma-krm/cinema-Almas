@extends('layouts.layout')

@section('title', 'Votre Panier')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <section class="py-16 bg-gradient-to-b from-gray-900 to-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
           
            <h2 class="text-4xl font-bold text-white mt-10 mb-8 text-center">Votre <span class="text-cinema-gold">Panier</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Liste des articles dans le panier -->
                <div class="md:col-span-2">
                    @if(!empty($panier))
                        @foreach($panier as $id => $film)
                        <h3 class="cart-title">{{ $film['title'] }}</h3>
                            <div class="ticket-container bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl overflow-hidden shadow-2xl mb-6">
                                <div class="ticket-header bg-cinema-gold py-3 px-6">
                                    <h3 class="text-black text-xl font-bold text-center">cinémaMax</h3>
                                </div>
                                <div class="ticket-body flex flex-col md:flex-row p-6">
                                    <div class="ticket-image md:w-1/3">
                                        <img src="{{ url('/storage/' . $film['photo']) }}" alt="Affiche du film {{ $film['title'] }}" 
                                             class="w-full h-48 object-cover rounded-lg border-4 border-gray-700 shadow-lg">
                                    </div>
                                    <div class="ticket-details md:w-2/3 md:pl-8 pt-6 md:pt-0">
                                        <h3 class="text-cinema-gold text-2xl font-bold mb-2">{{ $film['title'] }}</h3>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                            <div class="ticket-info">
                                                <span class="text-cinema-gold font-semibold">Date:</span>
                                                <span class="text-white ml-2">{{ $film['date_sortie'] }}</span>
                                            </div>
                                            <div class="ticket-info">
                                                <span class="text-cinema-gold font-semibold">Prix unitaire:</span>
                                                <span class="text-white ml-2">€{{ number_format($film['prix_unite'], 2) }}</span>
                                            </div>
                                            <div class="ticket-info">
                                                <span class="text-cinema-gold font-semibold">Quantité:</span>
                                                <span class="text-white ml-2">{{ $film['quantity'] }}</span>
                                            </div>
                                            <div class="ticket-info">
                                                <span class="text-cinema-gold font-semibold">Total:</span>
                                                <span class="text-white ml-2">€{{ number_format($film['prix_unite'] * $film['quantity'], 2) }}</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex justify-between items-center mt-4">
                                            <form action="" method="POST" class="flex items-center">
                                                @csrf
                                                @method('PUT')
                                                <button type="button" class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-xl text-cinema-gold cursor-pointer border border-cinema-gold" onclick="decrementItem(this)">-</button>
                                                <input type="number" name="quantity" class="w-12 h-8 mx-3 text-center bg-gray-800 text-white border border-gray-700 rounded" value="{{ $film['quantity'] }}" min="1" max="10">
                                                <button type="button" class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-xl text-cinema-gold cursor-pointer border border-cinema-gold" onclick="incrementItem(this)">+</button>
                                                <button type="submit" class="ml-4 px-4 py-2 bg-cinema-gold text-black rounded hover:bg-yellow-400 text-sm">
                                                    <i class="fas fa-sync-alt mr-1"></i> Mettre à jour
                                                </button>
                                            </form>
                                            
                                            <form action="/delete/{{$id}}/panier" method="GET">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-all duration-300">
                                                    <i class="fas fa-trash-alt mr-1"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="ticket-footer flex justify-between items-center p-4 border-t border-gray-700">
                                    <div class="ticket-id text-gray-400 text-sm">Ticket #: CIN-{{ rand(10000, 99999) }}</div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl p-8 text-center">
                            <i class="fas fa-shopping-cart text-cinema-gold text-5xl mb-4"></i>
                            <p class="text-white text-xl">Votre panier est vide</p>
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
                            {{-- @if(!empty($panier))
                                <div class="space-y-4">
                                    <div class="flex justify-between text-white">
                                        <span>Nombre d'articles:</span>
                                        <span>{{ $totalItems }}</span>
                                    </div>
                                    <div class="flex justify-between text-white">
                                        <span>Sous-total:</span>
                                        <span>€{{ number_format($subtotal, 2) }}</span>
                                    </div>
                                    <div class="flex justify-between text-white">
                                        <span>TVA (20%):</span>
                                        <span>€{{ number_format($tax, 2) }}</span>
                                    </div>
                                    <div class="border-t border-gray-700 my-4"></div>
                                    <div class="flex justify-between text-cinema-gold font-bold text-xl">
                                        <span>Total:</span>
                                        <span>€{{ number_format($total, 2) }}</span>
                                    </div>
                                    
                                    <div class="mt-6">
                                        <a href="" class="block w-full bg-cinema-gold text-black px-6 py-3 rounded-lg hover:bg-yellow-400 font-bold transition-all duration-300 text-center">
                                            <i class="fas fa-credit-card mr-2"></i> Procéder au paiement
                                        </a>
                                        <a href="/films" class="block w-full mt-4 bg-transparent border border-cinema-gold text-cinema-gold px-6 py-3 rounded-lg hover:bg-gray-800 font-bold transition-all duration-300 text-center">
                                            <i class="fas fa-film mr-2"></i> Continuer mes achats
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="text-center py-8">
                                    <p class="text-gray-400">Ajoutez des billets à votre panier pour voir le résumé de votre commande</p>
                                </div>
                            @endif --}}
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
    <script src= "{{asset('js/app.js')}}"></script>
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
