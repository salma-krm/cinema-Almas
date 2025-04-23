@extends('admindashbord.asidbar')

@section('content')
<body class="bg-cinema-dark text-cinema-light">
  <div class="flex h-screen">
    <main class="flex-1 overflow-auto md:pt-0 pt-16">
      <div class="p-4 md:p-8">
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl md:text-3xl font-bold">Modifier le Film</h1>
        </div>

        <!-- Edit Movie Form -->
        <form id="edit-movie-form" method="POST" action="{{ route('update.film') }}" enctype="multipart/form-data">
          @csrf
          @method('POST') 
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
           
            <div class="space-y-6">
              <div>
                <label for="movie-title" class="block text-sm font-medium mb-2">Titre du Film *</label>
                <input type="text" id="movie-title" name="title" value="{{ old('title', $film->title) }}" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>
              <input type="hidden" name="id" value="{{ $film->id }}">

              <div>
                <label for="movie-director" class="block text-sm font-medium mb-2">Réalisateur *</label>
                <input type="text" id="movie-director" name="realisateur" value="{{ old('realisateur', $film->realisateur) }}" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>

              <div>
                <label for="movie-language" class="block text-sm font-medium mb-2">Langue *</label>
                <input type="text" id="movie-language" name="langue" value="{{ old('langue', $film->langue) }}" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>

              <div>
                <label for="movie-duration" class="block text-sm font-medium mb-2">Durée (HH:MM:SS) *</label>
                <input 
                  type="text" 
                  id="movie-duration" 
                  name="duree" 
                  value="{{ old('langue', $film->duree) }}"
                  required 
                  class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white"
                  placeholder="Ex: 02:15:30 pour 2 heures 15 minutes et 30 secondes"
                  pattern="^([0-1]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$"
                  title="Veuillez entrer une durée valide au format HH:MM:SS"
                >
              </div>

              <div>
                <label for="movie-release-date" class="block text-sm font-medium mb-2">Date de sortie *</label>
                <input type="date" id="movie-release-date" name="date_sortie" value="{{ old('date_sortie', $film->date_sortie) }}" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>

              <div>
                <label for="movie-age-restriction" class="block text-sm font-medium mb-2">Âge autorisé *</label>
                <input type="text" id="movie-age-restriction" name="age_restriction" value="{{ old('age_restriction', $film->age_restriction) }}" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>

              <div>
                <label class="block text-sm font-medium mb-2">Genres *</label>
                <select class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white" name="genre" required>
                  <option value="" disabled selected>Sélectionnez un genre</option>
                  @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $film->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
              <div>
                <label for="movie-poster" class="block text-sm font-medium mb-2">Affiche du Film</label>
                <div class="border-2 border-dashed border-gray-700 rounded-lg p-4 text-center">
                  <div id="poster-preview" class="{{ $film->photo ? '' : 'hidden' }} mb-4">
                    <img id="poster-image" src="{{ $film->photo ? asset('storage/' . $film->photo) : '/placeholder.svg' }}" alt="Aperçu de l'affiche" class="mx-auto h-40 object-contain">
                </div>
                
                  <label for="poster-upload" class="cursor-pointer">
                    <div class="flex flex-col items-center justify-center py-4">
                      <svg class="w-10 h-10 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                      <p class="text-sm text-gray-400">Cliquez pour télécharger une affiche</p>
                      <p class="text-xs text-gray-500 mt-1">PNG, JPG jusqu'à 5MB</p>
                    </div>
                    <input id="poster-upload" name="photo" type="file" accept="image/*" class="hidden" onchange="previewImage(event)">
                  </label>
                </div>
              </div>

              <div>
                <label for="movie-description" class="block text-sm font-medium mb-2">Description</label>
                <textarea id="movie-description" name="description" rows="6" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white resize-none">{{ old('description', $film->description) }}</textarea>
              </div>

              <!-- Add Resume Field -->
              <div>
                <label for="movie-resume" class="block text-sm font-medium mb-2">Résumé *</label>
                <textarea id="movie-resume" name="resume" rows="4" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white resize-none" required>{{ old('resume', $film->resume) }}</textarea>
              </div>

              <div>
                <label for="movie-budget" class="block text-sm font-medium mb-2">Prix du Film *</label>
                <input type="number" id="movie-budget" name="budget" value="{{ old('budget', $film->budget) }}" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white" placeholder="Ex : 1000000" step="0.01">
              </div>

              <div>
                <label class="block text-sm font-medium mb-2">Acteurs principaux *</label>
                <div class="mb-3">
                    @foreach ($actors as $actor)
                        <div class="flex items-center mb-2">
                            <input 
                                type="checkbox" 
                                name="cast[]" 
                                value="{{ $actor->id }}" 
                                id="actor-{{ $actor->id }}" 
                                class="form-checkbox text-indigo-600 rounded mr-2"
                               
                            >
                            <label for="actor-{{ $actor->id }}" class="text-white">{{ $actor->name }}</label>
                        </div>
                    @endforeach
                </div>
              </div>

              <div>
                <label for="movie-video" class="block text-sm font-medium mb-2">Vidéo du Film URL </label>
                <input type="text" id="movie-video" name="video" value="{{ old('video', $film->video) }}" accept="video/*" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>
            </div>
          </div>

          <div class="border-t border-gray-700 pt-6 flex justify-end space-x-4">
            <button type="button" class="px-4 py-2 bg-transparent border border-gray-600 text-gray-300 rounded-lg hover:bg-gray-800">Annuler</button>
            <button type="submit" class="px-4 py-2 bg-cinema-gold hover:bg-yellow-500 text-black font-medium rounded-lg">Mettre à jour le Film</button>
          </div>
        </form>
      </div>
    </main>
  </div>
  <script src="{{ asset('js/filmdashbord.js') }}"></script>
  <script>
    function previewImage(event) {
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function(e) {
        const preview = document.getElementById('poster-preview');
        const image = document.getElementById('poster-image');

        preview.classList.remove('hidden');
        image.src = e.target.result;
      };

      if (file) {
        reader.readAsDataURL(file);
      }
    }
  </script>
</body>
@endsection
