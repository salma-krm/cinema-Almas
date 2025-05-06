@extends('layouts.layout')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-800">
        <div class="text-center text-white">
            <h1 class="text-6xl font-bold mb-4">404</h1>
            <p class="text-xl mb-6">Page non trouvée</p>
            <a href='/' class="bg-yellow-500 text-black py-2 px-6 rounded-full text-lg">Retour à l'accueil</a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
