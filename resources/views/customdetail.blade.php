@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">

    <body class="text-cinema-white min-h-screen" style="background-color: rgba(0, 0, 0, 0.105); background-image: url('{{ url('/storage/' . $film->photo) }}'); background-size: cover; background-position: center;">

    <!-- Film Section -->
    <section class="pt-16 bg-cinema-dark" style="background-image: url('{{ url('/storage/' . $film->photo) }}'); background-size: cover; background-position: center;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl font-bold mb-4">{{ $film->title }}</h1>
                    <p class="text-gray-300 mb-6">{{ $film->description }}</p>
                    <div class="flex flex-wrap gap-4 mb-6">
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">{{ $film->genre->name }}</span>
                    </div>

                    <div class="flex items-center mb-6">
                        <div class="bg-cinema-gold text-cinema-dark px-2 py-1 rounded font-bold mr-3">IMDb</div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-cinema-gold" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="ml-1">7.8/10</span>
                        </div>
                    </div>

                    <p class="text-gray-400 mb-8">{{ $film->resume }}</p>

                    <a href="#booking" class="bg-cinema-gold text-cinema-dark px-6 py-3 rounded-full hover:bg-yellow-400 font-semibold inline-block">
                        Book Tickets
                    </a>
                </div>

               <!-- Video Player -->
     <div class="video-container relative rounded-lg overflow-hidden shadow-lg">
      <div id="video-player-container">
       <video id="movie-trailer" class="video-player w-full aspect-video" controls style="display: none;">
           <source id="local-video-source" src="{{ url('/storage/' . $film->video) }}" type="video/mp4">
           Your browser does not support the video tag.
       </video>
       <iframe id="youtube-player" class="video-player w-full aspect-video" frameborder="0" style="display: none;" 
               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
               allowfullscreen>
       </iframe>
   </div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function() {
       var videoUrl = "{{ $film->video }}"; // From Blade variable
       var youtubePlayer = document.getElementById('youtube-player');
       var localPlayer = document.getElementById('movie-trailer');

       // Check if video URL is a YouTube URL
       var isYoutube = videoUrl.includes('youtube.com');
       if (isYoutube) {
           // Extract YouTube ID
           var youtubeId = videoUrl.match(/(?:v=|\/)([0-9A-Za-z_-]{11})/);
           if (youtubeId && youtubeId[1]) {
               youtubePlayer.src = "https://www.youtube.com/embed/" + youtubeId[1];
               youtubePlayer.style.display = 'block';  // Show the iframe
           }
       } else if (videoUrl) {
           localPlayer.style.display = 'block';  // Show the video player
       }
   });
</script>

            </div>
        </div>
    </section>

    <!-- Actors Section -->
    <section class="py-12 bg-cinema-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl text-white mb-8">Acteurs de film</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                @forelse($film->acteurs as $acteur)
                    <div class="bg-gray-900 rounded-lg overflow-hidden border-2 border-gray-700 hover:border-cinema-gold transition-all duration-300 hover:shadow-lg hover:shadow-cinema-gold/20">
                        <div class="h-48 overflow-hidden relative group">
                            <img src="{{ url('/storage/' . $acteur->photo) }}" alt="{{ $acteur->name }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                                <span class="text-cinema-gold font-bold text-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    {{ $acteur->name }}
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-cinema-gold font-semibold text-lg">{{ $acteur->name }}</h3>
                            <p class="text-gray-400 text-sm">as {{ $acteur->pivot->character_name }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-400">Aucun acteur trouvé pour ce film.</p>
                @endforelse
            </div>
        </div>
    </section>

 
    <section id="booking" class="py-16 bg-cinema-dark">
        
    </section>

    <script src="{{ asset('js/app.js') }}"></script>
@endsection
