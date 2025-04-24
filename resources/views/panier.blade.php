@extends('layouts.layout')
@section('contentcss')
@section('content')
{{-- link css --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
<body class="bg-cinema-dark text-cinema-white min-h-screen">
    <!-- Breadcrumb Navigation -->
    <section class="bg-gray-900 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2">
                    <li>
                        <a href="{{ route('accueil') }}" class="text-gray-400 hover:text-cinema-gold">
                            Accueil
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <span class="ml-2 text-cinema-gold">Panier</span>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Cart Section -->
    <section class="py-16 bg-cinema-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-12 text-white">Votre Panier</h1>

            @if(count($cartItems) > 0)
                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Cart Items -->
                    <div class="lg:w-2/3">
                        <div class="space-y-6">
                            @foreach($cartItems as $item)
                            <!-- Cart Item -->
                            <div class="bg-[#1a1c1e] border-2 border-gray-600 rounded-xl overflow-hidden shadow-lg">
                                <div class="md:flex">
                                    <!-- Image Section -->
                                    <div class="md:flex-shrink-0">
                                        <img src="{{ url('/storage/'. $item->film->photo) }}" alt="{{ $item->film->title }}" class="w-full h-48 md:w-64 object-cover" />
                                    </div>
                                    
                                    <!-- Details Section -->
                                    <div class="p-6 w-full">
                                        <div class="flex flex-col md:flex-row justify-between md:items-start">
                                            <div>
                                                <h2 class="text-xl font-bold text-white">{{ $item->film->title }}</h2>
                                                <div class="mt-2 flex flex-col sm:flex-row sm:gap-8">
                                                    <p class="text-gray-400">
                                                        <span class="text-cinema-gold">Date:</span> 
                                                        {{ \Carbon\Carbon::parse($item->seance->date)->format('d M Y') }}
                                                    </p>
                                                    <p class="text-gray-400">
                                                        <span class="text-cinema-gold">Heure:</span> 
                                                        {{ $item->seance->heure }}
                                                    </p>
                                                </div>
                                                <p class="mt-2 text-gray-400">
                                                    <span class="text-cinema-gold">Salle:</span> 
                                                    {{ $item->seance->salle->numero }}
                                                </p>
                                            </div>
                                            
                                            <!-- Price -->
                                            <div class="mt-4 md:mt-0 flex flex-col items-end">
                                                <span class="text-xl text-cinema-gold font-bold">{{ $item->prix }} د.م</span>
                                                <span class="text-sm text-gray-400">par place</span>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-6 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                            <!-- Quantity Selector -->
                                            <div class="flex items-center mb-4 sm:mb-0">
                                                <span class="text-gray-400 mr-4">Nombre de places:</span>
                                                <div class="flex items-center bg-gray-800 rounded-lg">
                                                    <button type="button" class="decrement-seats px-3 py-1 text-cinema-gold hover:bg-gray-700 rounded-l-lg" data-item-id="{{ $item->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                                        </svg>
                                                    </button>
                                                    <input type="number" name="quantity[{{ $item->id }}]" class="seats-quantity w-12 bg-gray-800 text-center text-white border-none focus:outline-none" value="{{ $item->quantity }}" min="1" max="10" readonly data-price="{{ $item->prix }}" data-item-id="{{ $item->id }}">
                                                    <button type="button" class="increment-seats px-3 py-1 text-cinema-gold hover:bg-gray-700 rounded-r-lg" data-item-id="{{ $item->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                            <!-- Subtotal and Remove -->
                                            <div class="flex items-center space-x-6">
                                                <span class="text-white font-semibold item-subtotal">
                                                    Total: {{ $item->prix * $item->quantity }} د.م
                                                </span>
                                                <form action="{{ route('cart.remove') }}" method="POST" class="inline-block">
                                                    @csrf
                                                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                                                    <button type="submit" class="text-red-500 hover:text-red-400">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <div class="mt-8 flex justify-between">
                            <a href="{{ route('films.index') }}" class="flex items-center text-cinema-gold hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                Continuer mes achats
                            </a>
                            
                            <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="quantities" id="quantities-json" value="">
                                <button type="submit" class="bg-cinema-gold text-cinema-dark px-6 py-2 rounded-full hover:bg-yellow-400 transition-colors font-semibold" id="update-cart">
                                    Mettre à jour le panier
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Cart Summary -->
                    <div class="lg:w-1/3 mt-8 lg:mt-0">
                        <div class="bg-[#1a1c1e] border-2 border-gray-600 rounded-xl p-6 sticky top-20">
                            <h2 class="text-xl font-bold mb-6 text-white">Récapitulatif</h2>
                            
                            <div class="space-y-3 mb-6">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-400">Sous-total</span>
                                    <span class="text-white font-semibold" id="cart-subtotal">{{ $subtotal }} د.م</span>
                                </div>
                                @if($discountAmount > 0)
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-400">Remise</span>
                                    <span class="text-green-500 font-semibold">-{{ $discountAmount }} د.م</span>
                                </div>
                                @endif
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-400">TVA (20%)</span>
                                    <span class="text-white font-semibold" id="cart-tax">{{ $taxAmount }} د.م</span>
                                </div>
                            </div>
                            
                            <div class="border-t border-gray-700 pt-4 mb-6">
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-semibold text-white">Total</span>
                                    <span class="text-xl font-bold text-cinema-gold" id="cart-total">{{ $total }} د.م</span>
                                </div>
                            </div>
                            
                            <!-- Promo Code Input -->
                            <div class="mb-6">
                                <form action="{{ route('cart.apply-promo') }}" method="POST" class="flex">
                                    @csrf
                                    <input type="text" name="promo_code" placeholder="Code promo" class="flex-grow px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-l-md focus:outline-none focus:border-cinema-gold">
                                    <button type="submit" class="bg-cinema-gold text-cinema-dark px-4 py-2 rounded-r-md hover:bg-yellow-400 transition-colors font-semibold">
                                        Appliquer
                                    </button>
                                </form>
                                @if(session('promo_success'))
                                    <p class="mt-2 text-sm text-green-500">{{ session('promo_success') }}</p>
                                @endif
                                @if(session('promo_error'))
                                    <p class="mt-2 text-sm text-red-500">{{ session('promo_error') }}</p>
                                @endif
                            </div>
                            
                            <!-- Checkout Button -->
                            <a href="{{ route('checkout') }}" class="block w-full bg-cinema-gold text-cinema-dark text-center px-6 py-3 rounded-full hover:bg-yellow-400 transition-colors font-semibold">
                                Procéder au paiement
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <!-- Empty Cart -->
                <div class="bg-[#1a1c1e] border-2 border-gray-600 rounded-xl p-12 text-center">
                    <div class="bg-cinema-gold/20 p-6 inline-flex rounded-full mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-cinema-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4">Votre panier est vide</h2>
                    <p class="text-gray-400 mb-8">Découvrez notre sélection de films et ajoutez-les à votre panier.</p>
                    <a href="{{ route('films.index') }}" class="bg-cinema-gold text-cinema-dark px-8 py-3 rounded-full hover:bg-yellow-400 transition-colors font-semibold inline-block">
                        Voir les films
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Recommendations Section -->
    <section class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-8 text-white">Vous pourriez aussi aimer</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($recommendedFilms as $film)
                <!-- Recommended Movie Card -->
                <div class="bg-[#1a1c1e] border border-gray-600 rounded-xl overflow-hidden shadow-lg transition-transform hover:-translate-y-1 hover:shadow-xl">
                    <div class="relative overflow-hidden">
                        <img src="{{ url('/storage/'. $film->photo) }}" alt="{{ $film->title }}" class="w-full h-48 object-cover" />
                        <div class="absolute top-0 right-0 bg-cinema-gold text-cinema-dark text-xs font-bold px-2 py-1 m-2 rounded">
                            {{ $film->age_restriction }}
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-white truncate">{{ $film->title }}</h3>
                        <p class="text-gray-400 text-sm">{{ $film->genre->name ?? 'N/A' }}</p>
                        
                        <div class="mt-4">
                            <form action="{{ route('films.show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="film_id" value="{{ $film->id }}">
                                <button type="submit" class="w-full bg-cinema-gold/20 text-cinema-gold px-4 py-2 rounded-md hover:bg-cinema-gold hover:text-cinema-dark transition-colors font-semibold">
                                    Voir Détails
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Seats quantity selector functionality
            const decrementBtns = document.querySelectorAll('.decrement-seats');
            const incrementBtns = document.querySelectorAll('.increment-seats');
            
            // Function to update item subtotal
            function updateItemSubtotal(input) {
                const price = parseFloat(input.dataset.price);
                const quantity = parseInt(input.value);
                const subtotal = price * quantity;
                
                // Find and update the subtotal display
                const itemRow = input.closest('.bg-[#1a1c1e]');
                const subtotalElement = itemRow.querySelector('.item-subtotal');
                subtotalElement.textContent = `Total: ${subtotal.toFixed(2)} د.م`;
                
                // Update cart totals
                updateCartTotals();
            }
            
            // Update all cart totals
            function updateCartTotals() {
                // Calculate new subtotal
                let subtotal = 0;
                document.querySelectorAll('.seats-quantity').forEach(input => {
                    const price = parseFloat(input.dataset.price);
                    const quantity = parseInt(input.value);
                    subtotal += price * quantity;
                });
                
                // Calculate tax and total
                const tax = subtotal * 0.2; // 20% VAT
                const total = subtotal + tax;
                
                // Update the displayed totals
                document.getElementById('cart-subtotal').textContent = `${subtotal.toFixed(2)} د.م`;
                document.getElementById('cart-tax').textContent = `${tax.toFixed(2)} د.م`;
                document.getElementById('cart-total').textContent = `${total.toFixed(2)} د.م`;
                
                // Prepare quantities for form submission
                const quantities = {};
                document.querySelectorAll('.seats-quantity').forEach(input => {
                    quantities[input.dataset.itemId] = input.value;
                });
                
                document.getElementById('quantities-json').value = JSON.stringify(quantities);
            }
            
            // Decrement buttons
            decrementBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    const value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                        updateItemSubtotal(input);
                    }
                });
            });
            
            // Increment buttons
            incrementBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    const value = parseInt(input.value);
                    if (value < 10) {
                        input.value = value + 1;
                        updateItemSubtotal(input);
                    }
                });
            });
            
            // Initialize cart totals on page load
            updateCartTotals();
        });
    </script>
</body>
@endsection