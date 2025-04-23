@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
</head>
<body class=" text-cinema-white min-h-screen" style="background-color: rgba(0, 0, 0, 0.105); background-image: url('{{ url('/storage/' . $film->photo) }}'); background-size: cover; background-position: center;">

   <section class="pt-16 bg-cinema-dark" style="background-image: url('{{ url('/storage/' . $film->photo) }}'); background-size: cover; background-position: center;">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 photo">
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
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                     </svg>
                     <span class="ml-1">7.8/10</span>
                  </div>
               </div>
               <p class="text-gray-400 mb-8">
                  {{ $film->resume }}
               </p>
               <a href="#booking" class="bg-cinema-gold text-cinema-dark px-6 py-3 rounded-full hover:bg-yellow-400 font-semibold inline-block">
                  Book Tickets
               </a>
            </div>
            <div class="video-container">
               <div class="video-background"></div>
               <div class="video-overlay" id="video-overlay">
                  <div class="play-button" id="play-button">
                     <div class="play-button-icon"></div>
                  </div>
               </div>
               <video id="movie-trailer" class="video-player" controls>
                  <source src="{{ url('/storage/'. $film->video) }}" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
            </div>
         </div>
      </div>
   </section>

   <section id="booking" class="py-16 bg-cinema-dark">
     <!-- Booking form or content goes here -->
   </section>

   <script>
   document.addEventListener('DOMContentLoaded', function() {
    const playButton = document.getElementById('play-button');
    const videoPlayer = document.getElementById('movie-trailer');
    const videoOverlay = document.getElementById('video-overlay');
    playButton.addEventListener('click', function() {

        videoPlayer.style.display = 'block';
       
        videoOverlay.style.opacity = '0';
        videoOverlay.style.pointerEvents = 'none';
        
        videoPlayer.play();
    });

    videoPlayer.addEventListener('ended', function() {

        videoPlayer.style.display = 'none';
       
        videoOverlay.style.opacity = '1';
        videoOverlay.style.pointerEvents = 'auto';
    });
});
   </script>

   <script src="{{ asset('js/app.js') }}"></script> 
</body>
</html>
@endsection
