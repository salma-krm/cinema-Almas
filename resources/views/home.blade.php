@extends('layouts.layout')
@section(('contentcss'))
@section('content')
{{-- link css --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}"> 
<body class="bg-cinema-dark text-cinema-white min-h-screen">
    <!-- Mobile Navigation -->
    <!-- Hero Section -->
    <section class="pt-16 relative h-screen">
        <div class="absolute inset-0 bg-black opacity-60 z-0"></div>
        <div class="absolute inset-0 z-0">
            <img
                src="{{asset('images/best-iptv-provider.webp')}}"

                alt="Sintel Movie"
                class="w-full h-full object-cover" />
        </div>
        <div class="relative z-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                    Découvrez la Magie du <span class="text-cinema-gold">Cinéma</span>
                </h1>
                <p class="text-xl text-gray-300 mb-8">
                    Plongez dans un univers d'émotions avec nos dernières sorties et vivez une expérience cinématographique unique.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#movies" class="bg-cinema-gold text-cinema-dark px-8 py-3 rounded-full hover:bg-yellow-400 transition-colors font-semibold">
                        Voir les Films
                    </a>
                    <a href="#about" class="border-2 border-cinema-gold text-cinema-gold px-8 py-3 rounded-full hover:bg-cinema-gold hover:text-cinema-dark transition-colors font-semibold">
                        En Savoir Plus
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-10 left-0 right-0 flex justify-center">
            <a href="#movies" class="animate-bounce">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-cinema-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="py-20 bg-cinema-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Bienvenue à <span class="text-cinema-gold">CinéMax</span></h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Votre destination cinématographique par excellence, où chaque film devient une expérience inoubliable.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-900/50 p-8 rounded-xl text-center">
                    <div class="w-16 h-16 bg-cinema-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-cinema-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Écrans Ultra HD</h3>
                    <p class="text-gray-400">
                        Profitez de nos écrans de dernière génération pour une qualité d'image exceptionnelle.
                    </p>
                </div>

                <div class="bg-gray-900/50 p-8 rounded-xl text-center">
                    <div class="w-16 h-16 bg-cinema-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-cinema-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414-9.9m-2.828 9.9a9 9 0 010-12.728" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Son Immersif</h3>
                    <p class="text-gray-400">
                        Un système audio Dolby Atmos pour une immersion sonore totale.
                    </p>
                </div>

                <div class="bg-gray-900/50 p-8 rounded-xl text-center">
                    <div class="w-16 h-16 bg-cinema-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-cinema-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Tarifs Avantageux</h3>
                    <p class="text-gray-400">
                        Des prix accessibles et des offres spéciales pour tous les cinéphiles.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Date Selection -->
    <section id="movies" class="bg-gray-900 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Sélectionnez une date</h2>
            <div class="flex justify-between items-center overflow-x-auto pb-2">
                <button
                    data-day="13"
                    data-month="MARS"
                    class="date-button active flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                    <span class="text-2xl font-bold">13</span>
                    <span class="text-sm">MARS</span>
                </button>
                <button
                    data-day="14"
                    data-month="MARS"
                    class="date-button flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                    <span class="text-2xl font-bold">14</span>
                    <span class="text-sm">MARS</span>
                </button>
                <button
                    data-day="15"
                    data-month="MARS"
                    class="date-button flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                    <span class="text-2xl font-bold">15</span>
                    <span class="text-sm">MARS</span>
                </button>
                <button
                    data-day="16"
                    data-month="MARS"
                    class="date-button flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                    <span class="text-2xl font-bold">16</span>
                    <span class="text-sm">MARS</span>
                </button>
                <button
                    data-day="17"
                    data-month="MARS"
                    class="date-button flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                    <span class="text-2xl font-bold">17</span>
                    <span class="text-sm">MARS</span>
                </button>
            </div>
        </div>
    </section>


    <!-- After the date selection section and before the movies grid section -->
    <section class="bg-gray-900 py-0 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <h2 class="text-2xl font-bold text-white">Films à l'affiche</h2>

                <div class="flex flex-col sm:flex-row w-full md:w-auto gap-4">
                    <!-- Search by title -->
                    <div class="relative flex-grow">
                        <input type="text"name="search"id="search-movies" placeholder="Rechercher un film..."class="w-full px-4 py-2 pl-10 bg-gray-800 border border-gray-700 rounded-md text-white focus:outline-none focus:border-cinema-gold" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>

                    <!-- Filter by genre -->
                    <div class="relative flex-grow sm:flex-grow-0 sm:w-64">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        <select
                            name="genre"
                            id="filter-genre"
                            class="w-full appearance-none px-4 py-2 pl-10 bg-gray-800 border border-gray-700 rounded-md text-white focus:outline-none focus:border-cinema-gold">
                            <option value="">Tous les genres</option>
                            <option value="Action">Action</option>
                            <option value="Animation">Animation</option>
                            <option value="Aventure">Aventure</option>
                            <option value="Comédie">Comédie</option>
                            <option value="Drame">Drame</option>
                            <option value="Fantaisie">Fantaisie</option>
                            <option value="Science Fiction">Science Fiction</option>
                            <option value="Thriller">Thriller</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Movies Grid -->
<section class="py-16 bg-cinema-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <style>
            /* Fixed size for movie posters */
            .movie-poster {
                width: 200px;         /* Fixed width */
                height: 300px;        /* Fixed height - 3:2 aspect ratio is common for movie posters */
                object-fit: cover;    /* This ensures the image covers the area without distortion */
                object-position: center; /* Centers the image within the container */
            }
        
            /* For mobile responsiveness */
            @media (max-width: 768px) {
                .movie-poster {
                    width: 100%;      /* Full width on mobile */
                    height: 250px;    /* Slightly smaller height on mobile */
                }
            }
        
            /* Additional styling for the movie card */
            .movie-card {
                background-color: #1A1B1E;
                margin-bottom: 1.5rem;
            }
        </style>
        
       <div class="space-y-8">
        <div class="space-y-8">
            @foreach($films as $film)
            <!-- Movie Card -->
            <div class="movie-card bg-[#1a1c1e] rounded-xl overflow-hidden shadow-lg">
                <div class="md:flex">
                    <!-- Image Section -->
                    <div class="md:flex-shrink-0">
                        <img src="{{ url('/storage/'. $film->photo) }}" alt="{{ $film->title }}" class="movie-poster w-full h-48 object-cover" />
                    </div>
        
                    <!-- Details Section -->
                    <div class="p-8 w-full">
                        <div class="flex justify-between items-start">
                            <div>
                                <h2 class="text-2xl font-bold text-white">{{ $film->title }}</h2>
                                <p class="mt-1 text-gray-400">{{ $film->genre->name ?? 'N/A' }}</p>
                                <p class="mt-1 text-gray-400">{{ $film->langue ?? 'N/A' }}</p>
                                <span class="mt-1 text-gray-400">
                                    {{ $film->description }}
                                </span>
                            </div>
        
                            <!-- Age Restriction -->
                            <span class="inline-block bg-cinema-gold/20 text-cinema-gold px-2 py-1 rounded-md text-sm font-semibold">
                                {{ $film->age_restriction ?? 'N/A' }}
                            </span>
                        </div>
        
                        <!-- Duration -->
                        <div class="mt-3">
                            <span class="mt-1 text-gray-400">
                                Durée: {{ $film->duree }} min
                            </span>
                        </div>
        
                        <!-- Release Date -->
                        <div class="mt-3">
                            <h3 class="text-sm text-gray-400">Date de sortie</h3>
                            <span class="mt-1 text-gray-400">
                                {{ \Carbon\Carbon::parse($film->date_sortie)->format('d M Y') ?? 'Non disponible' }}
                            </span>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
</div>

        
        </div>
    </div>
</section>

    <!-- Promo Section -->
    <section class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-cinema-gold/10 rounded-2xl p-8 md:p-12 relative overflow-hidden">
                <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-cinema-gold/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-40 h-40 bg-cinema-gold/20 rounded-full blur-3xl"></div>

                <div class="relative z-10 md:flex items-center justify-between">
                    <div class="md:w-2/3 mb-8 md:mb-0">
                        <h2 class="text-3xl font-bold text-white mb-4">Offre Spéciale Étudiants</h2>
                        <p class="text-xl text-gray-300 mb-6">
                            Profitez de 30% de réduction sur tous les films du lundi au jeudi sur présentation de votre carte étudiante.
                        </p>
                        <a href="#" class="inline-block bg-cinema-gold text-cinema-dark px-8 py-3 rounded-full hover:bg-yellow-400 transition-colors font-semibold">
                            En savoir plus
                        </a>
                    </div>
                    <div class="md:w-1/3 flex justify-center">
                        <div class="bg-cinema-gold/20 p-6 rounded-full">
                            <div class="bg-cinema-gold text-cinema-dark text-center p-8 rounded-full">
                                <span class="block text-5xl font-bold">-30%</span>
                                <span class="text-lg">Étudiants</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-cinema-dark">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Questions Fréquentes</h2>
                <p class="text-xl text-gray-400">
                    Tout ce que vous devez savoir pour profiter pleinement de votre expérience cinématographique.
                </p>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-gray-900/50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 focus:outline-none flex justify-between items-center">
                        <span class="text-lg font-semibold">Comment réserver mes billets en ligne ?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="faq-icon h-6 w-6 text-cinema-gold transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-6">
                        <p class="text-gray-400">
                            La réservation en ligne est simple ! Sélectionnez le film et la séance qui vous intéressent, choisissez vos places, sélectionnez vos tarifs et procédez au paiement. Vous recevrez ensuite un e-mail de confirmation avec vos billets électroniques à présenter à l'entrée du cinéma.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item bg-gray-900/50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 focus:outline-none flex justify-between items-center">
                        <span class="text-lg font-semibold">Quels sont les différents tarifs proposés ?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="faq-icon h-6 w-6 text-cinema-gold transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-6">
                        <p class="text-gray-400">
                            Nous proposons plusieurs tarifs adaptés à tous : tarif normal (100 د.م), tarif étudiant (85 د.م), tarif moins de 12 ans (75 د.م) et Pass Jeunes Semaine (55 د.م). Des réductions supplémentaires sont disponibles pour les groupes et les séances matinales.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item bg-gray-900/50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 focus:outline-none flex justify-between items-center">
                        <span class="text-lg font-semibold">Puis-je annuler ou modifier ma réservation ?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="faq-icon h-6 w-6 text-cinema-gold transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-6">
                        <p class="text-gray-400">
                            Les réservations peuvent être modifiées ou annulées jusqu'à 2 heures avant le début de la séance. Pour toute modification, connectez-vous à votre compte ou contactez notre service client. En cas d'annulation, le remboursement sera effectué sous 5 jours ouvrés.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item bg-gray-900/50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 focus:outline-none flex justify-between items-center">
                        <span class="text-lg font-semibold">Y a-t-il un parking à proximité du cinéma ?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="faq-icon h-6 w-6 text-cinema-gold transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-6">
                        <p class="text-gray-400">
                            Oui, un parking souterrain est disponible sous le cinéma avec 3 heures gratuites pour nos clients. Présentez simplement votre ticket de cinéma à la borne de sortie du parking pour bénéficier de cette offre.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item bg-gray-900/50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 focus:outline-none flex justify-between items-center">
                        <span class="text-lg font-semibold">Proposez-vous des séances en version originale sous-titrée ?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="faq-icon h-6 w-6 text-cinema-gold transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer px-6 pb-6">
                        <p class="text-gray-400">
                            Absolument ! Nous proposons à la fois des séances en version française et en version originale sous-titrée (VOST). Consultez notre programme pour connaître les horaires des séances VOST, généralement indiquées par un logo spécifique.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Restez informé</h2>
            <p class="text-xl text-gray-400 mb-8">
                Inscrivez-vous à notre newsletter pour recevoir en avant-première notre programmation et nos offres spéciales.
            </p>
            <form class="max-w-md mx-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <input
                        type="email"
                        placeholder="Votre adresse email"
                        class="flex-grow px-4 py-3 rounded-full bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-cinema-gold"
                        required />
                    <button type="submit" class="bg-cinema-gold text-cinema-dark px-6 py-3 rounded-full hover:bg-yellow-400 font-semibold transition-colors">
                        S'inscrire
                    </button>
                </div>
            </form>
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

            // Date selection
            const dateButtons = document.querySelectorAll('.date-button');

            dateButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    dateButtons.forEach(btn => {
                        btn.classList.remove('active');
                    });

                    // Add active class to clicked button
                    this.classList.add('active');
                });
            });

            // FAQ accordion
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const faqItem = this.parentNode;
                    const icon = this.querySelector('.faq-icon');

                    // Toggle active class
                    faqItem.classList.toggle('active');

                    // Rotate icon
                    if (faqItem.classList.contains('active')) {
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        icon.style.transform = 'rotate(0)';
                    }
                });
            });
        });
    </script>
  <script src= "{{asset('js/app.js')}}"></script>

</body>
</html>
@endsection