@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CinéMax - Cinema Seat Booking</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{asset('css/reservation.css')}}">
</head>
<body class="bg-cinema-dark text-cinema-white min-h-screen">
   <!-- Navigation -->
  <!-- Hero Section with Video -->
  <section class="pt-16 bg-cinema-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 photo">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <div>
          <h1 class="text-4xl font-bold mb-4">Sintel</h1>
          <p class="text-gray-300 mb-6">A short film by The Blender Foundation</p>
          <div class="flex flex-wrap gap-4 mb-6">
            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Animation</span>
            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Adventure</span>
            <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Fantasy</span>
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
            Sintel is a short computer animated film by the Blender Foundation, part of the Blender Foundation's "Durian" open movie project. 
            It follows the story of a girl named Sintel who is searching for a baby dragon she calls Scales.
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
            <source src="https://download.blender.org/durian/trailer/sintel_trailer-720p.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </section>
  <!-- Booking Section -->
  <section id="booking" class="py-16 bg-cinema-dark">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8">Select Your Seats</h2>
      
      <!-- Screen -->
      <div class="relative mb-10">
        <div class="w-full h-10 bg-gray-800 rounded-t-lg mb-8 flex items-center justify-center">
          <p class="text-sm text-gray-400">SCREEN</p>
        </div>
        <div class="screen-perspective w-4/5 h-1 bg-cinema-gold mx-auto mb-12 screen-line"></div>
      </div>
      
      <!-- Seats Container -->
      <div id="seat-container" class="flex flex-col items-center gap-2 mb-10">
        <!-- Rows will be generated by JavaScript -->
      </div>
      
      <!-- Legend -->
      <div class="flex justify-center gap-8 mb-8">
        <div class="flex items-center">
          <div class="w-6 h-6 bg-gray-600 rounded mr-2"></div>
          <span>Available</span>
        </div>
        <div class="flex items-center">
          <div class="w-6 h-6 bg-cinema-gold rounded mr-2"></div>
          <span>Selected</span>
        </div>
        <div class="flex items-center">
          <div class="w-6 h-6 bg-cinema-dark border border-gray-700 rounded mr-2"></div>
          <span>Reserved</span>
        </div>
      </div>
      
      <!-- Info -->
      <div class="text-center mb-8">
        <p class="selected-count">You have selected <span id="count">0</span> seats</p>
        <p class="text-sm text-gray-400 mt-2">Click on a seat to select or deselect it</p>
      </div>
      
      <!-- Action Button -->
      <div class="flex justify-center">
        <button id="book-button" class="bg-cinema-gold text-cinema-dark px-8 py-3 rounded-full hover:bg-yellow-400 font-semibold disabled:opacity-50 disabled:cursor-not-allowed">
          Book Selected Seats
          <a href="./tarifs.html"></a>
        </button>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const container = document.getElementById('seat-container');
      const bookButton = document.getElementById('book-button');
      const countElement = document.getElementById('count');
      // Video player functionality
      const videoOverlay = document.getElementById('video-overlay');
      const playButton = document.getElementById('play-button');
      const videoPlayer = document.getElementById('movie-trailer');
      
      playButton.addEventListener('click', function() {
        // Show video player
        videoPlayer.style.display = 'block';
        // Hide overlay with play button
        videoOverlay.style.opacity = '0';
        videoOverlay.style.pointerEvents = 'none';
        // Start playing the video
        videoPlayer.play();
      });
      
      // Reset video when it ends
      videoPlayer.addEventListener('ended', function() {
        // Hide video player
        videoPlayer.style.display = 'none';
        // Show overlay with play button
        videoOverlay.style.opacity = '1';
        videoOverlay.style.pointerEvents = 'auto';
      });
      
      // Create 10 rows with 10 seats each (100 seats total)
      const rows = 10;
      const seatsPerRow = 10;
      const rowLabels = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
      
      // Randomly mark some seats as reserved (about 15%)
      const reservedSeats = new Set();
      const totalSeats = rows * seatsPerRow;
      const reservedCount = Math.floor(totalSeats * 0.15);
      
      for (let i = 0; i < reservedCount; i++) {
        const randomSeat = Math.floor(Math.random() * totalSeats);
        reservedSeats.add(randomSeat);
      }
      
      // Create rows and seats
      for (let i = 0; i < rows; i++) {
        const row = document.createElement('div');
        row.className = 'flex gap-1 mb-1';
        
        // Add row label
        const rowLabel = document.createElement('div');
        rowLabel.className = 'row-label';
        rowLabel.textContent = rowLabels[i];
        row.appendChild(rowLabel);
        
        for (let j = 0; j < seatsPerRow; j++) {
          const seatIndex = i * seatsPerRow + j;
          const seat = document.createElement('div');
          seat.className = 'seat';
          seat.dataset.row = rowLabels[i];
          seat.dataset.seat = j + 1;
          
          // Mark some seats as reserved
          if (reservedSeats.has(seatIndex)) {
            seat.classList.add('reserved');
          } else {
            seat.addEventListener('click', function() {
              if (!this.classList.contains('reserved')) {
                this.classList.toggle('selected');
                updateSelectedCount();
              }
            });
          }
          
          // Add seat number
          seat.textContent = j + 1;
          
          row.appendChild(seat);
        }
        
        container.appendChild(row);
      }
      
      // Update selected count
      function updateSelectedCount() {
        const selectedSeats = document.querySelectorAll('.seat.selected');
        countElement.textContent = selectedSeats.length;
        
        // Enable/disable book button
        bookButton.disabled = selectedSeats.length === 0;
        if (selectedSeats.length === 0) {
          bookButton.classList.add('opacity-50', 'cursor-not-allowed');
        } else {
          bookButton.classList.remove('opacity-50', 'cursor-not-allowed');
        }
      }
      
      // Initialize button state
      bookButton.disabled = true;
      bookButton.classList.add('opacity-50', 'cursor-not-allowed');
      
      // Add event listener to book button
      bookButton.addEventListener('click', function() {
        const selectedSeats = document.querySelectorAll('.seat.selected');
        const seatsInfo = Array.from(selectedSeats).map(seat => {
          return `${seat.dataset.row}${seat.dataset.seat}`;
        });
        
        if (seatsInfo.length > 0) {
          alert(`You have booked seats: ${seatsInfo.join(', ')}`);
          
          // Mark selected seats as reserved
          selectedSeats.forEach(seat => {
            seat.classList.remove('selected');
            seat.classList.add('reserved');
            
            // Remove event listener by cloning and replacing
            const newSeat = seat.cloneNode(true);
            seat.parentNode.replaceChild(newSeat, seat);
          });
          
          updateSelectedCount();
        }
      });
      
      // Mobile menu toggle
      mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
      });

      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          
          const targetId = this.getAttribute('href');
          if (targetId === '#') return;
          
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop - 70, // Adjust for fixed header
              behavior: 'smooth'
            });
            
            // Close mobile menu if open
            if (!mobileMenu.classList.contains('hidden')) {
              mobileMenu.classList.add('hidden');
            }
          }
        });
      });
    });
  </script>
   <script src= "{{asset('js/app.js')}}"></script> 
</body>
</html>

@endsection