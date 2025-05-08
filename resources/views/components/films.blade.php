<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div class="space-y-8">
      @foreach($films as $film)
      <!-- Movie Card -->
      <div class="movie-card bg-[#1a1c1e] border-2 border-gray-600 rounded-xl overflow-hidden shadow-lg">
          <div class="md:flex">
              <!-- Image Section -->
              <div class="md:flex-shrink-0">
                  <img src="{{ url('/storage/'. $film->photo) }}" alt="{{ $film->title }}" class="movie-poster w-full h-48 object-cover" />
              </div>
              <!-- Details Section -->
              <div class="p-8 w-full">
                  <div class="flex justify-between items-start">
                      <div>
                          <h4 class="text-cinema-gold text-2xl font-bold mb-2">{{ $film->title }}</h3>
                               <div class="mb-4 text-gray-300 italic"> {{ $film->description }}</div>
                      </div>
      
                      <!-- Age Restriction -->
                      <span class="inline-block bg-cinema-gold/20 text-cinema-gold px-2 py-1 rounded-md text-sm font-semibold">
                          {{ $film->age_restriction ?? 'N/A' }}
                      </span>
                  </div>
      
                  <!-- Duration -->
                  <div class="mt-3">
                      <span class="mt-2 bg-jeunecolor text-white">
                          Durée: {{ $film->duree }} s
                      </span>
                  </div>
                  <!-- Release Date -->
                  <div class="mt-3">
                      <h3 class="text-sm text-gray-400">Date de sortie</h3>
                      <span class="mt-1 bg-jeunecolor text-white">
                          {{ \Carbon\Carbon::parse($film->date_sortie)->format('d M Y') ?? 'Non disponible' }}
                      </span>
                  </div>
      
                  <!-- Button to View Details -->
                  <form action="/filmdetail/{{ $film->id }}" method="GET">
                      {{-- <input type="hidden" name="film_id" value="{{ $film->id }}"> --}}
                      <button type="submit" class="inline-block bg-cinema-gold text-cinema-dark px-6 py-2 rounded-full hover:bg-yellow-400 transition-colors font-semibold">
                          Voir Détails
                      </button>
                  </form> 
              </div>
          </div>
      </div>
      
      @endforeach
  </div>
</div>