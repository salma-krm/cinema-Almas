@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <section class="py-16 bg-gradient-to-b from-gray-900 to-black ">
        <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:px-8">
           
            <h2 class="text-4xl font-bold text-white mt-10 mb-8 text-center">Votre <span class="text-cinema-gold">ticket</span></h2>
            
            <div class="grid grid-cols-1 gap-8">
                <div class="ticket-container bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl overflow-hidden shadow-2xl">
                    <div class="ticket-header bg-cinema-gold py-3 px-6">
                        <h3 class="text-black text-xl font-bold text-center">cinémaMax</h3>
                    </div>
                    <div class="ticket-body flex flex-col md:flex-row p-6">
                        <div class="ticket-image md:w-1/3">
                            <img src="{{ url('/storage/' . $seance->film->photo) }}" alt="{{ $seance->film->title }}" 
                                 class="w-full h-64 object-cover rounded-lg border-4 border-gray-700 shadow-lg">
                        </div>
                        <div class="ticket-details md:w-2/3 md:pl-8 pt-6 md:pt-0">
                            <h3 class="text-cinema-gold text-2xl font-bold mb-2">{{ $seance->film->title }}</h3>
                            <div class="mb-4 text-gray-300 italic">{{ $seance->film->description }}</div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                <div class="ticket-info">
                                    <span class="text-cinema-gold font-semibold">Durée:</span>
                                    <span class="text-white ml-2">{{ $seance->film->duree }} min</span>
                                </div>
                                <div class="ticket-info">
                                    <span class="text-cinema-gold font-semibold">Âge:</span>
                                    <span class="text-white ml-2">{{ $seance->film->age_restriction }}</span>
                                </div>
                                <div class="ticket-info">
                                    <span class="text-cinema-gold font-semibold">Prix:</span>
                                    <span class="text-white ml-2">€{{ $seance->film->budget }}</span>
                                    
                                </div>
                                <div class="ticket-info">
                                <span class="text-cinema-gold font-semibold">date:</span>
                                <span class="text-white ml-2">{{ $seance->horaire }}</span>
                                </div>
                            </div>
                            
                            <!-- Quantity Control Buttons -->
                            <div class="flex items-center mt-6 mb-4">
                                <span class="text-cinema-gold font-semibold mr-4">place:</span>
                                <button class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-xl text-cinema-gold cursor-pointer border border-cinema-gold" onclick="decrementQuantity()">-</button>
                                <input type="number" class="w-12 h-8 mx-3 text-center bg-gray-800 text-white border border-gray-700 rounded" id="quantity" value="1" min="1" max="10">
                                <button class="w-8 h-8 bg-gray-800 rounded-full flex items-center justify-center text-xl text-cinema-gold cursor-pointer border border-cinema-gold" onclick="incrementQuantity()">+</button>
                            </div>

                            <div class="mt-6">
                                <button class="bg-cinema-gold text-black px-6 py-2 rounded-lg hover:bg-yellow-400 font-bold transition-all duration-300 shadow-lg transform hover:scale-105" onclick="openAddToCartModal()">
                                    <i class="fas fa-plus-circle mr-2"></i> reserve ticket
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-footer flex justify-between items-center p-4 border-t border-gray-700">
                        <div class="ticket-id text-gray-400 text-sm">Ticket #: CIN-{{ rand(10000, 99999) }}</div> 
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

    <!-- Modal pour ajouter au panier -->
    <div id="addToCartModal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
        <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-lg max-w-md w-full mx-4 border-2 border-cinema-gold">
            <div class="p-4 border-b border-gray-700 flex justify-between items-center">
                <h5 class="text-lg font-medium text-cinema-gold">reserve "{{ $seance->film->title }}" ticket </h5>
                <button type="button" class="text-gray-400 hover:text-cinema-gold" onclick="closeModal()">
                    <span class="sr-only">Fermer</span>
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-4 text-white">
                <p>Êtes-vous sûr de vouloir ajouter <span id="quantityDisplay">1</span> billet(s) pour ce film  ?</p>
            </div>
            <form action="">
              <input type="hidden" value="quantity=1">
            </form>
         
            <div class="p-4 bg-gray-900 flex justify-end space-x-2">
              
                <button type="button" class="px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600" onclick="closeModal()">Annuler</button>
                <a href="/Panier/{{ $seance->id }}?quantity=1" id="confirmAddToCart" class="px-4 py-2 bg-cinema-gold text-black rounded hover:bg-yellow-400">Confirmer</a> 
        </div>
    </div>

    <!-- Bouton avec l'icône du panier -->
    <a href="/Panier" class="fixed bottom-5 right-5 bg-cinema-gold text-black rounded-full p-4 text-2xl shadow-lg hover:bg-yellow-400">
        <i class="fas fa-shopping-cart"></i>
    </a>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function incrementQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            const maxValue = parseInt(quantityInput.getAttribute('max'));
            
            if (currentValue < maxValue) {
                quantityInput.value = currentValue + 1;
                updateQuantityDisplay();
            }
        }

        function decrementQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updateQuantityDisplay();
            }
        }
        
        function updateQuantityDisplay() {
            const quantity = document.getElementById('quantity').value;
            document.getElementById('quantityDisplay').textContent = quantity;
            
            // Update the URL for adding to cart
            const confirmBtn = document.getElementById('confirmAddToCart');
            const seanceId = confirmBtn.href.split('/').pop().split('?')[0];
            confirmBtn.href = `/Panier/${seanceId}?quantity=${quantity}`;
        }
        
        function openAddToCartModal() {
            document.getElementById('addToCartModal').classList.remove('hidden');
            updateQuantityDisplay();
        }
        
        function closeModal() {
            document.getElementById('addToCartModal').classList.add('hidden');
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateQuantityDisplay();
        });
    </script>
@endsection