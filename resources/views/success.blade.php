@extends('layouts.layout')

@section('title', 'Confirmation de Réservation')

@section('content')
<link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<section class="py-20 bg-gradient-to-b from-gray-900 to-black min-h-screen">
    <div class="max-w-2xl mx-auto px-6 text-center">
        <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl shadow-2xl p-10">
            <div class="text-5xl text-cinema-gold mb-6">
                <i class="fas fa-ticket-alt"></i>
            </div>

            <h1 class="text-3xl font-bold text-white mb-4">{{ $message }}</h1>
            <div class="text-left text-white space-y-4">
                <p><span class="text-cinema-gold font-semibold">🎬 Film :</span> {{ $ticket->title ?? 'N/A' }}</p>
                <p><span class="text-cinema-gold font-semibold"> Quantité :</span> {{ $ticket->quantity ?? 1 }}</p>
                <p><span class="text-cinema-gold font-semibold"> Prix unitaire :</span> {{ $ticket->prix_unite }} €</p>
                <p><span class="text-cinema-gold font-semibold"> Date de sortie :</span> {{ $ticket->date_sortie }}</p>
                <p><span class="text-cinema-gold font-semibold"> Total :</span> {{ $ticket->prix_unite * $ticket->quantity }} €</p>
                <p><span class="text-cinema-gold font-semibold">🔖 Référence :</span> {{ $reference }}</p>
            </div>

            <a href="/" class="inline-block mt-8 bg-cinema-gold text-black px-6 py-3 rounded-lg font-bold hover:bg-yellow-400 transition-all duration-300">
                <i class="fas fa-home mr-2"></i> Retour à l'accueil
            </a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</section>
@endsection
