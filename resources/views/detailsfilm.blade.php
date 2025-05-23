@extends('layouts.layout')
@section(('contentcss'))
@section('content')
{{-- link css --}}
<link rel="stylesheet" href="{{asset('css/detailfilm.css')}}"> 
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cinema-gold': '#F5C518',
                        'cinema-dark': '#131416',
                        'cinema-light': '#F7F7F7',
                    }
                }
            }
        }
    </script>
    <!-- Movie Hero Section -->
    <section class="relative">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-cinema-dark opacity-90 z-10"></div>
            <img src="{{ asset('storage/' . $film->photo) }}" alt="{{ $film->title }}" class="w-full h-full object-cover" />
        </div>
        
        <!-- Movie Info -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
            <div class="md:flex items-start">
                <!-- Movie Poster -->
                <div class="md:flex-shrink-0 mb-8 md:mb-0 md:mr-8">
                    <img src="{{ asset('storage/' . $film->photo) }}" alt="{{ $film->title }}" class="w-64 h-auto rounded-lg shadow-xl" />
                </div>
                
                <!-- Movie Details -->
                <div class="flex-1">
                    <div class="flex flex-wrap items-center mb-4">
                        @if($film->age_restriction)
                            <span class="bg-cinema-gold/20 text-cinema-gold px-3 py-1 rounded-full text-sm font-semibold mr-3">
                                {{ $film->age_restriction }}
                            </span>
                        @endif
                        <span class="text-gray-300 text-sm mr-3">{{ $film->date_sortie }}</span>
                        <span class="text-gray-300 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-cinema-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ $film->duree }} S
                        </span>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-cinema-light">{{ $film->title }}</h1>
                    
                    <div class="flex flex-wrap items-center mb-6">
                        <div class="flex items-center mr-6 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="font-bold text-cinema-light">8.5/10</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-2">
                            @if($film->genre)
                                <span class="bg-gray-800 text-cinema-light px-3 py-1 rounded-full text-sm">{{ $film->genre->name }}</span>
                            @endif
                           
                          
                       
                        </div>
                    </div>
                    
                    <p class="text-gray-300 mb-8 text-lg">
                        {{ $film->resume }}
                    </p>
                    
                    <div class="flex flex-wrap gap-4 mb-8">
                      <form action="/customDetail/{{ $film->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="movie_id" value="{{ $film->id }}">
                        <button class="bg-cinema-gold text-cinema-dark px-6 py-3 rounded-md hover:bg-yellow-400 transition-colors font-semibold flex items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          Voir la bande-annonce
                      </button>
                    </form>
                        <button class="border-2 border-cinema-gold text-cinema-gold px-6 py-3 rounded-md hover:bg-cinema-gold hover:text-cinema-dark transition-colors font-semibold flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Ajouter à ma liste
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabs Navigation -->
    <section class="bg-cinema-dark sticky top-0 z-20 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex overflow-x-auto py-4 scrollbar-hide">
                <a href="#about" class="text-cinema-gold border-b-2 border-cinema-gold px-4 py-2 font-medium whitespace-nowrap">À propos</a>
                <a href="#sessions" class="text-gray-400 hover:text-cinema-light hover:border-b-2 hover:border-gray-400 px-4 py-2 font-medium whitespace-nowrap">Séances</a>
                <a href="#cast" class="text-gray-400 hover:text-cinema-light hover:border-b-2 hover:border-gray-400 px-4 py-2 font-medium whitespace-nowrap">Distribution</a>
                <a href="#reviews" class="text-gray-400 hover:text-cinema-light hover:border-b-2 hover:border-gray-400 px-4 py-2 font-medium whitespace-nowrap">Critiques</a>
                <a href="#similar" class="text-gray-400 hover:text-cinema-light hover:border-b-2 hover:border-gray-400 px-4 py-2 font-medium whitespace-nowrap">Films similaires</a>
            </nav>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-cinema-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2">
                    <h2 class="text-2xl font-bold mb-6 text-cinema-light">Synopsis</h2>
                    <p class="text-gray-300 mb-8">
                        {{ $film->description }}
                    </p>

                    <div class="mt-12">
                        <h2 class="text-2xl font-bold mb-6 text-cinema-light">Détails techniques</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <h3 class="text-lg font-semibold mb-3 text-cinema-light">Production</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li><span class="text-cinema-gold">Réalisateur:</span> {{ $film->realisateur }}</li>
                                    <li><span class="text-cinema-gold">Date de sortie:</span> {{ $film->date_sortie}}</li>
                                    <li><span class="text-cinema-gold">Budget:</span> {{ number_format($film->budget, 2) }} €</li>
                                    
                                </ul>
                                
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-3 text-cinema-light">Technique</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li><span class="text-cinema-gold">Durée:</span> {{ $film->duree }} S</li>
                                    <li><span class="text-cinema-gold">Langue:</span> {{ $film->langue }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-gray-900/50 p-6 rounded-xl mb-8 border border-gray-800">
                        <h3 class="text-lg font-semibold mb-4 text-cinema-light">Informations</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 01-2-2V6a2 2 0 012-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <span class="block text-cinema-gold">Date de sortie</span>
                                    <span class="text-gray-300">{{ $film->date_sortie}}</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <span class="block text-cinema-gold">Durée</span>
                                    <span class="text-gray-300">{{ $film->duree }} S</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                </svg>
                                <div>
                                    <span class="block text-cinema-gold">Langue</span>
                                    <span class="text-gray-300">{{ $film->langue }}</span>
                                </div>
                            </li>
                            @if($film->age_restriction)
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <div>
                                        <span class="block text-cinema-gold">Public</span>
                                        <span class="text-gray-300">{{ $film->age_restriction }}</span>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                 
                </div>
            </div>
            
        </div>
    </section>
  <!-- Sessions Section -->
<!-- Sessions Section -->
<section id="sessions" class="py-16 bg-cinema-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-cinema-light mb-8">Séances disponibles</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($film->seances as $seance)
                <div class="bg-gray-900/30 backdrop-blur-sm border border-gray-800 rounded-xl overflow-hidden transition-all duration-300 group hover:border-cinema-gold hover:bg-gray-900/50 hover:scale-105">
                    <!-- Card Header with Date -->
                    <div class="bg-cinema-light/10 p-4 border-b border-gray-800 transition-all duration-300 group-hover:bg-cinema-light/20">
                        <h3 class="text-xl font-semibold text-white">
                            {{ \Carbon\Carbon::parse($seance->horaire)->translatedFormat('l d F Y') }}
                        </h3>
                    </div>
                    
                    <!-- Card Body -->
                    <div class="p-6">
                        <!-- Time with Icon -->
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 transition-transform duration-300 group-hover:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-cinema-light text-lg font-medium">
                                {{ \Carbon\Carbon::parse($seance->horaire)->format('H:i') }}
                            </span>
                        </div>
                        
                        <!-- Room with Icon -->
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 transition-transform duration-300 group-hover:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <span class="text-gray-300">
                                <span class="text-gray-400">Salle:</span>
                                <span class="text-cinema-light font-medium ml-1">
                                    {{ $seance->salle->name ?? 'Salle inconnue' }}
                                </span>
                            </span>
                           
                        </div>
                        <!-- Separate link for navigating to another page -->
                        <a href="/bookTicket/{{$seance->id}}" class="block mt-2 text-center w-full bg-cinema-gold text-cinema-dark py-3 rounded-lg font-semibold hover:bg-yellow-400 transition-all flex items-center justify-center relative overflow-hidden group-hover:brightness-110">
                            <span class="relative z-10 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 transition-transform duration-300 group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                </svg>
                                Book tickets
                            </span>
                            <span class="absolute inset-0 bg-cinema-gold scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                        </a>
                        
                    </div>
                </div>
            @empty
                <div class="col-span-3 bg-gray-900/30 backdrop-blur-sm border border-gray-800 rounded-xl p-10 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-500 mx-auto mb-4 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <p class="text-xl text-gray-400">Aucune séance disponible pour le moment.</p>
                    <p class="text-gray-500 mt-2">Veuillez vérifier ultérieurement pour les nouvelles programmations.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>



    <!-- Reviews Section -->
    <section id="reviews" class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-cinema-light">Critiques</h2>
                <button class="text-cinema-gold hover:underline font-semibold flex items-center">
                    Ajouter une critique
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
            
          <!-- In your Reviews Section -->
@forelse ($film->avis as $avis)
<div class="bg-cinema-dark rounded-xl p-6 border border-gray-800">
    <div class="flex justify-between items-start mb-4">
        <div class="flex items-center">
            <div class="w-12 h-12 rounded-full bg-gray-700 mr-4 overflow-hidden">
                <img src="{{url('/storage/'. $avis->user->photo ?? "")}}  " alt="{{$avis->user->name}}" class="w-full h-full object-cover" />
            </div>
            <div>
                <h3 class="font-semibold text-cinema-light">{{$avis->user->name}}</h3>
                <div class="flex items-center">
                    <div class="flex text-cinema-gold">
                        @for ($i = 0; $i < $avis->rating; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>   
                        @endfor
                    </div>
                    <span class="text-gray-400 text-sm ml-2">{{ $avis->created_at->diff(now())->format(' %i minutes') }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Review text (visible by default) -->
    <p class="text-gray-300 mb-2" id="avisText{{$avis->id}}">{{$avis->description}}</p>
    
    <!-- Update form (hidden by default) -->
    <form id="updateForm{{$avis->id}}" action="/avis/update/{{$avis->id}}" method="POST" class="hidden">
        @csrf
        @method('POST')
        <div class="flex items-center gap-2 mb-2">
            <input type="text" name="description" value="{{$avis->description}}" 
                   class="flex-1 bg-gray-700 text-white p-2 rounded">
            <button type="submit" class="bg-green-500 text-white px-3 py-2 rounded hover:bg-green-600">
                Update
            </button>
            <button type="button" onclick="cancelUpdate({{$avis->id}})" 
                    class="bg-gray-500 text-white px-3 py-2 rounded hover:bg-gray-600">
                Cancel
            </button>
        </div>
    </form>
    
    @auth
        @if(auth()->user()->id === $avis->user_id)
        <div class="flex gap-2">
            <!-- Edit button -->
            <button onclick="showUpdateForm({{$avis->id}})" 
                    class="text-green-500 hover:text-green-700 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
                Edit
            </button>
            
            <!-- Delete button -->
            <form action="/avis/delete/{{$avis->id}}" method="GET">
                @csrf
                <button type="submit" class="text-red-500 hover:text-red-700 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm4 0a1 1 0 012 0v6a1 1 0 11-2 0V8zm-5 9a2 2 0 002 2h6a2 2 0 002-2V7H5v10zM8 4a1 1 0 00-1-1h-1V2h8v1h-1a1 1 0 00-1 1H8z" clip-rule="evenodd" />
                    </svg>
                    Delete
                </button>
            </form>
        </div>
        @endif
    @endauth
</div>

<script>
    function showUpdateForm(avisId) {
        // Hide the review text
        document.getElementById('avisText' + avisId).classList.add('hidden');
        // Show the update form
        document.getElementById('updateForm' + avisId).classList.remove('hidden');
    }
    
    function cancelUpdate(avisId) {

        document.getElementById('avisText' + avisId).classList.remove('hidden');
        document.getElementById('updateForm' + avisId).classList.add('hidden');
    }
</script>
@empty
<!-- Your empty state code here -->
@endforelse
            
                
                <!-- Review 2 -->
              
            
            <!-- Comment Form -->
            <div class="mt-10 bg-cinema-dark rounded-xl p-6 border border-gray-800">
                <h3 class="text-lg font-semibold text-cinema-light mb-4">Laissez votre critique</h3>
                @if (session('error'))
                <p class="text-l text-red-500 mt-8 font-semibold">{{ session('error') }}</p>
                @endif
                <form action="/avis/create" method="POST" class="space-y-4">
                    @csrf
                    <!-- Rating Section -->
                    <div>
                        <label class="block text-sm text-gray-400 mb-1">Note</label>
                        <div id="ratingStars" class="flex space-x-1 text-cinema-gold cursor-pointer">
                            <!-- Star rating clickable buttons -->
                            <input type="radio" name="rating" value="1" id="star1" class="hidden" required>
                            <label for="star1" class="star h-6 w-6 text-gray-600 hover:text-yellow-400 transition">1★</label>
                
                            <input type="radio" name="rating" value="2" id="star2" class="hidden">
                            <label for="star2" class="star h-6 w-6 text-gray-600 hover:text-yellow-400 transition">2★</label>
                
                            <input type="radio" name="rating" value="3" id="star3" class="hidden">
                            <label for="star3" class="star h-6 w-6 text-gray-600 hover:text-yellow-400 transition">3★</label>
                
                            <input type="radio" name="rating" value="4" id="star4" class="hidden">
                            <label for="star4" class="star h-6 w-6 text-gray-600 hover:text-yellow-400 transition">4★</label>
                
                            <input type="radio" name="rating" value="5" id="star5" class="hidden">
                            <label for="star5" class="star h-6 w-6 text-gray-600 hover:text-yellow-400 transition">5★</label>
                        </div>
                    </div>
                
                    <!-- Comment Section -->
                    <div class="flex flex-col md:flex-row md:items-end md:space-x-4">
                        <textarea name="description" rows="3" placeholder="Votre avis..." class="w-full px-4 py-2 rounded-md bg-gray-800 text-cinema-light border border-gray-700 focus:outline-none focus:ring-2 focus:ring-cinema-gold resize-none" required></textarea>
                        <input type="hidden" name="film_id" value="{{ $film->id }}">
                
                        <!-- Submit button -->
                        <button type="submit" class="mt-2 md:mt-0 px-6 py-2 bg-cinema-gold text-gray-900 font-semibold rounded-md hover:bg-yellow-400 transition whitespace-nowrap">
                            Envoyer
                        </button>
                    </div>
                </form>
                
                
                
                
            </div>
        </div>
    </section>

    <!-- Similar Movies Section -->
 
      <section id="similar" class="py-16 bg-cinema-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-8 text-cinema-light">Films similaires</h2>
    
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($filmsSimilaires as $similar)
                    <div class="bg-gray-900/50 rounded-lg overflow-hidden group border border-gray-800 hover:border-cinema-gold transition-colors">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/'.$similar->photo) }}" alt="{{ $similar->title }}" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                <div class="p-4 w-full">
                                    <a href="">
                                        <button class="w-full bg-cinema-gold text-cinema-dark py-2 rounded-md font-semibold">Voir les détails</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-1 text-cinema-light">{{ $similar->title }}</h3>
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-cinema-gold mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="text-sm text-gray-300">Durée : {{ $similar->duree }} S</span>
                            </div>
                            <p class="text-cinema-gold text-sm">{{ $similar->genre->nom ?? '' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>  
<script>
   const input = document.getElementById("inputUpdate");
   const button = document.getElementById("buttonUodate");
   button.addEventListener(onclick(e)=>{

   });
    
</script>
    @endsection