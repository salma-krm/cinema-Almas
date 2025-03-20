@extends('layout.nav')
@section('content')
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinéMax - Paiement Sécurisé</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/paiement.css')}}">
</head>
<body class="bg-cinema-dark text-cinema-white min-h-screen">
    <!-- Navigation -->
    <!-- Payment Section -->
    <section class="pt-24 pb-32">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-center mb-8">
                <div class="bg-cinema-gold/20 px-4 py-2 rounded-full flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <span class="text-cinema-gold font-semibold">Paiement Sécurisé</span>
                </div>
            </div>

            <h1 class="text-4xl font-bold text-center mb-12">Finaliser votre réservation</h1>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Order Summary (Left Side) -->
                <div class="lg:w-1/3">
                    <div class="movie-card rounded-xl overflow-hidden sticky top-24">
                        <div class="p-6 border-b border-gray-800">
                            <h2 class="text-2xl font-bold mb-4">Récapitulatif</h2>
                            
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <img 
                                        src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/p10892939_v_h8_aa.jpg-ft3kbtHiFUqaFeKIzip7SpVt06xgxP.jpeg" 
                                        alt="Sintel Movie Poster" 
                                        class="w-20 h-auto rounded"
                                    />
                                    <div class="ml-4">
                                        <h3 class="font-semibold">Sintel</h3>
                                        <p class="text-gray-400 text-sm">Animation, Aventure, Fantaisie</p>
                                        <div class="flex items-center mt-1 text-sm text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            14 Mars 2025
                                        </div>
                                        <div class="flex items-center mt-1 text-sm text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            13:15 - Salle 7
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="border-t border-gray-800 pt-4">
                                    <h3 class="font-semibold mb-2">Places</h3>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span>Rangée F, Siège 12</span>
                                        <span>Normal</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span>Rangée F, Siège 13</span>
                                        <span>Normal</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Tarif Normal x2</span>
                                    <span>200.00 د.م</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Frais de service</span>
                                    <span>10.00 د.م</span>
                                </div>
                                <div class="border-t border-gray-800 pt-3 flex justify-between font-bold">
                                    <span>Total</span>
                                    <span class="text-cinema-gold">210.00 د.م</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Form (Right Side) -->
                <div class="lg:w-2/3">
                    <form class="space-y-8">
                        <!-- Payment Methods -->
                        <div class="payment-card rounded-xl p-6">
                            <h2 class="text-xl font-semibold mb-4">Mode de paiement</h2>
                            <div class="grid grid-cols-4 gap-4">
                                <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-4 flex items-center justify-center cursor-pointer relative">
                                    <input type="radio" name="payment-method" id="card" class="sr-only" checked>
                                    <label for="card" class="cursor-pointer w-full h-full flex items-center justify-center">
                                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-cinema-gold rounded-full"></div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>
                                    </label>
                                </div>
                                <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-4 flex items-center justify-center cursor-pointer">
                                    <input type="radio" name="payment-method" id="paypal" class="sr-only">
                                    <label for="paypal" class="cursor-pointer w-full h-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 11l5-5 5 5M7 17l5-5 5 5" />
                                        </svg>
                                    </label>
                                </div>
                                <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-4 flex items-center justify-center cursor-pointer">
                                    <input type="radio" name="payment-method" id="apple-pay" class="sr-only">
                                    <label for="apple-pay" class="cursor-pointer w-full h-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                            <line x1="12" y1="17" x2="12.01" y2="17" />
                                        </svg>
                                    </label>
                                </div>
                                <div class="bg-gray-800/50 border border-gray-700 rounded-lg p-4 flex items-center justify-center cursor-pointer">
                                    <input type="radio" name="payment-method" id="google-pay" class="sr-only">
                                    <label for="google-pay" class="cursor-pointer w-full h-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                            <line x1="9" y1="9" x2="15" y2="15" />
                                            <line x1="15" y1="9" x2="9" y2="15" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Card Information -->
                        <div class="payment-card rounded-xl p-6">
                            <h2 class="text-xl font-semibold mb-4">Informations de carte</h2>
                            
                            <div class="space-y-4">
                                <div>
                                    <label for="card-number" class="block text-sm font-medium text-gray-400 mb-1">Numéro de carte</label>
                                    <div class="relative">
                                        <input 
                                            type="text" 
                                            id="card-number" 
                                            placeholder="1234 5678 9012 3456" 
                                            class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                        >
                                        <div class="absolute right-3 top-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="expiry" class="block text-sm font-medium text-gray-400 mb-1">Date d'expiration</label>
                                        <input 
                                            type="text" 
                                            id="expiry" 
                                            placeholder="MM/AA" 
                                            class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                        >
                                    </div>
                                    <div>
                                        <label for="cvv" class="block text-sm font-medium text-gray-400 mb-1">CVV</label>
                                        <div class="relative">
                                            <input 
                                                type="text" 
                                                id="cvv" 
                                                placeholder="123" 
                                                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                            >
                                            <div class="absolute right-3 top-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-400 mb-1">Nom sur la carte</label>
                                    <input 
                                        type="text" 
                                        id="name" 
                                        placeholder="John Doe" 
                                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Billing Information -->
                        <div class="payment-card rounded-xl p-6">
                            <h2 class="text-xl font-semibold mb-4">Adresse de facturation</h2>
                            
                            <div class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="first-name" class="block text-sm font-medium text-gray-400 mb-1">Prénom</label>
                                        <input 
                                            type="text" 
                                            id="first-name" 
                                            class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                        >
                                    </div>
                                    <div>
                                        <label for="last-name" class="block text-sm font-medium text-gray-400 mb-1">Nom</label>
                                        <input 
                                            type="text" 
                                            id="last-name" 
                                            class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                        >
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-400 mb-1">Adresse</label>
                                    <input 
                                        type="text" 
                                        id="address" 
                                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                    >
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <label for="city" class="block text-sm font-medium text-gray-400 mb-1">Ville</label>
                                        <input 
                                            type="text" 
                                            id="city" 
                                            class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                        >
                                    </div>
                                    <div>
                                        <label for="postal-code" class="block text-sm font-medium text-gray-400 mb-1">Code postal</label>
                                        <input 
                                            type="text" 
                                            id="postal-code" 
                                            class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                        >
                                    </div>
                                    <div>
                                        <label for="country" class="block text-sm font-medium text-gray-400 mb-1">Pays</label>
                                        <select 
                                            id="country" 
                                            class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                        >
                                            <option value="MA">Maroc</option>
                                            <option value="FR">France</option>
                                            <option value="BE">Belgique</option>
                                            <option value="CH">Suisse</option>
                                            <option value="CA">Canada</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-400 mb-1">Email</label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-md text-white focus:border-cinema-gold"
                                    >
                                    <p class="mt-1 text-sm text-gray-500">Nous enverrons la confirmation de réservation à cette adresse</p>
                                </div>
                            </div>
                        </div>

                        <!-- Terms and Submit -->
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input 
                                        id="terms" 
                                        type="checkbox" 
                                        class="h-4 w-4 bg-gray-800 border-gray-700 rounded focus:ring-cinema-gold focus:ring-offset-gray-800"
                                    >
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="text-gray-300">J'accepte les <a href="#" class="text-cinema-gold hover:underline">conditions générales</a> et la <a href="#" class="text-cinema-gold hover:underline">politique de confidentialité</a></label>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between bg-gray-800/50 p-4 rounded-lg">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <span class="text-sm text-gray-300">Paiement sécurisé par cryptage SSL</span>
                                </div>
                                <div class="flex space-x-2">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/100px-MasterCard_Logo.svg.png" alt="MasterCard" class="h-6">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/100px-Visa_Inc._logo.svg.png" alt="Visa" class="h-6">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/American_Express_logo_%282018%29.svg/100px-American_Express_logo_%282018%29.svg.png" alt="American Express" class="h-6">
                                </div>
                            </div>
                            
                            <button type="submit" class="w-full bg-cinema-gold text-cinema-dark px-8 py-4 rounded-full hover:bg-yellow-400 font-semibold transition-colors">
                                Payer 210.00 د.م
                            </button>
                            
                            <p class="text-center text-sm text-gray-500">
                                En cliquant sur "Payer", vous confirmez votre réservation et acceptez d'être débité du montant indiqué.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Format card number with spaces
            const cardNumberInput = document.getElementById('card-number');
            cardNumberInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
                let formattedValue = '';
                
                for (let i = 0; i < value.length; i++) {
                    if (i > 0 && i % 4 === 0) {
                        formattedValue += ' ';
                    }
                    formattedValue += value[i];
                }
                
                e.target.value = formattedValue;
            });

            // Format expiry date
            const expiryInput = document.getElementById('expiry');
            expiryInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                
                if (value.length > 2) {
                    value = value.substring(0, 2) + '/' + value.substring(2, 4);
                }
                
                e.target.value = value;
            });

            // Limit CVV to 3 or 4 digits
            const cvvInput = document.getElementById('cvv');
            cvvInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 4) {
                    value = value.substring(0, 4);
                }
                e.target.value = value;
            });

            // Form submission
            const paymentForm = document.querySelector('form');
            paymentForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Here you would normally validate the form and process the payment
                // For demo purposes, we'll just show a success message
                
                alert('Paiement effectué avec succès ! Vous allez recevoir un email de confirmation.');
                // Redirect to confirmation page
                // window.location.href = 'confirmation.html';
            });
        });
    </script>
</body>

</html>
@endsection