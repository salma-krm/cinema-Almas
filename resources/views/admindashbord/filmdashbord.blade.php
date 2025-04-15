@extends('admindashbord.asidbar')
@section('content')
<body class="bg-cinema-dark text-cinema-light">
  <div class="flex h-screen"> 
    <!-- Sidebar -->
    <!-- Mobile menu button -->
    <div class="md:hidden fixed top-0 left-0 right-0 bg-[#1a1c1e] p-4 flex items-center justify-between z-10">
      <h1 class="text-xl font-bold text-cinema-gold">CinéMax Admin</h1>
      <button id="mobile-menu-button" class="text-white">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
   
    <!-- Main Content -->
    <main class="flex-1 overflow-auto md:pt-0 pt-16">
      <div class="p-4 md:p-8">
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl md:text-3xl font-bold">Gestion des Films</h1>
          <button id="open-add-movie-modal" class="bg-cinema-gold hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-lg flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Ajouter un Film
          </button>
        </div>

        <!-- Search and Filter -->
        <div class="bg-[#1a1c1e] rounded-xl p-4 md:p-6 mb-6">
          <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
              <label for="search" class="block text-sm font-medium mb-2">Rechercher</label>
              <div class="relative">
                <input type="text" id="search" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white" placeholder="Titre, réalisateur, acteur...">
                <svg class="w-5 h-5 absolute right-3 top-2.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>
            </div>
            <div class="md:w-1/4">
              <label for="genre" class="block text-sm font-medium mb-2">Genre</label>
              <select id="genre" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
                <option value="">Tous les genres</option>
                <option value="action">Action</option>
                <option value="comedy">Comédie</option>
                <option value="drama">Drame</option>
                <option value="scifi">Science-Fiction</option>
                <option value="horror">Horreur</option>
              </select>
            </div>
            <div class="md:w-1/4">
              <label for="status" class="block text-sm font-medium mb-2">Statut</label>
              <select id="status" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
                <option value="">Tous les statuts</option>
                <option value="current">En cours</option>
                <option value="upcoming">À venir</option>
                <option value="archived">Archivé</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Movies List -->
        <div class="bg-[#1a1c1e] rounded-xl p-4 md:p-6 mb-6">
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="text-left border-b border-gray-700">
                  <th class="pb-3 font-medium">Titre</th>
                  <th class="pb-3 font-medium">Durée</th>
                  <th class="pb-3 font-medium">Genre</th>
                  <th class="pb-3 font-medium">Statut</th>
                  <th class="pb-3 font-medium">Séances</th>
                  <th class="pb-3 font-medium">Actions</th>
                </tr>
              </thead>
              <tbody class="text-gray-300">
                <tr class="border-b border-gray-700">
                  <td class="py-3">
                    <div class="flex items-center">
                      <div class="w-10 h-14 bg-gray-800 rounded mr-3"></div>
                      <div>
                        <p class="font-medium">Les Gardiens de la Galaxie</p>
                        <p class="text-sm text-gray-400">James Gunn</p>
                      </div>
                    </div>
                  </td>
                  <td class="py-3">2h 15m</td>
                  <td class="py-3">Action, Sci-Fi</td>
                  <td class="py-3">
                    <span class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">En cours</span>
                  </td>
                  <td class="py-3">12</td>
                  <td class="py-3">
                    <div class="flex space-x-2">
                      <button class="p-1 text-blue-400 hover:text-blue-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                      </button>
                      <button class="p-1 text-red-400 hover:text-red-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr class="border-b border-gray-700">
                  <td class="py-3">
                    <div class="flex items-center">
                      <div class="w-10 h-14 bg-gray-800 rounded mr-3"></div>
                      <div>
                        <p class="font-medium">Dune</p>
                        <p class="text-sm text-gray-400">Denis Villeneuve</p>
                      </div>
                    </div>
                  </td>
                  <td class="py-3">2h 35m</td>
                  <td class="py-3">Sci-Fi, Aventure</td>
                  <td class="py-3">
                    <span class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">En cours</span>
                  </td>
                  <td class="py-3">8</td>
                  <td class="py-3">
                    <div class="flex space-x-2">
                      <button class="p-1 text-blue-400 hover:text-blue-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                      </button>
                      <button class="p-1 text-red-400 hover:text-red-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr class="border-b border-gray-700">
                  <td class="py-3">
                    <div class="flex items-center">
                      <div class="w-10 h-14 bg-gray-800 rounded mr-3"></div>
                      <div>
                        <p class="font-medium">Black Widow</p>
                        <p class="text-sm text-gray-400">Cate Shortland</p>
                      </div>
                    </div>
                  </td>
                  <td class="py-3">2h 14m</td>
                  <td class="py-3">Action, Espionnage</td>
                  <td class="py-3">
                    <span class="px-2 py-1 bg-blue-900 text-blue-200 rounded-full text-xs">À venir</span>
                  </td>
                  <td class="py-3">5</td>
                  <td class="py-3">
                    <div class="flex space-x-2">
                      <button class="p-1 text-blue-400 hover:text-blue-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                      </button>
                      <button class="p-1 text-red-400 hover:text-red-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <div class="flex items-center">
                      <div class="w-10 h-14 bg-gray-800 rounded mr-3"></div>
                      <div>
                        <p class="font-medium">Interstellar</p>
                        <p class="text-sm text-gray-400">Christopher Nolan</p>
                      </div>
                    </div>
                  </td>
                  <td class="py-3">2h 49m</td>
                  <td class="py-3">Sci-Fi, Drame</td>
                  <td class="py-3">
                    <span class="px-2 py-1 bg-gray-700 text-gray-300 rounded-full text-xs">Archivé</span>
                  </td>
                  <td class="py-3">0</td>
                  <td class="py-3">
                    <div class="flex space-x-2">
                      <button class="p-1 text-blue-400 hover:text-blue-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                      </button>
                      <button class="p-1 text-red-400 hover:text-red-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-between items-center">
          <div class="text-sm text-gray-400">
            Affichage de 1-4 sur 24 films
          </div>
          <div class="flex space-x-1">
            <button class="px-3 py-1 bg-[#1a1c1e] rounded-md text-gray-400 hover:bg-[#252729]">Précédent</button>
            <button class="px-3 py-1 bg-cinema-gold rounded-md text-black font-medium">1</button>
            <button class="px-3 py-1 bg-[#1a1c1e] rounded-md text-gray-400 hover:bg-[#252729]">2</button>
            <button class="px-3 py-1 bg-[#1a1c1e] rounded-md text-gray-400 hover:bg-[#252729]">3</button>
            <button class="px-3 py-1 bg-[#1a1c1e] rounded-md text-gray-400 hover:bg-[#252729]">Suivant</button>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Add Movie Modal -->
  <div id="add-movie-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
    <div class="bg-[#1a1c1e] rounded-xl w-full max-w-3xl mx-4 max-h-[90vh] overflow-y-auto">
      <div class="p-6">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-xl font-bold text-cinema-light">Ajouter un Nouveau Film</h2>
          <button id="close-modal" class="text-gray-400 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <form id="add-movie-form">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Left Column -->
            <div class="space-y-6">
              <div>
                <label for="movie-title" class="block text-sm font-medium mb-2">Titre du Film *</label>
                <input type="text" id="movie-title" name="title" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>
              
              <div>
                <label for="movie-director" class="block text-sm font-medium mb-2">Réalisateur *</label>
                <input type="text" id="movie-director" name="director" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>
              
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="movie-duration" class="block text-sm font-medium mb-2">Durée (minutes) *</label>
                  <input type="number" id="movie-duration" name="duration" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
                </div>
                <div>
                  <label for="movie-release-date" class="block text-sm font-medium mb-2">Date de sortie *</label>
                  <input type="date" id="movie-release-date" name="releaseDate" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
                </div>
              </div>
              
              <div>
                <label for="movie-genre" class="block text-sm font-medium mb-2">Genre *</label>
                <select id="movie-genre" name="genre" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
                  <option value="">Sélectionner un genre</option>
                  <option value="action">Action</option>
                  <option value="comedy">Comédie</option>
                  <option value="drama">Drame</option>
                  <option value="scifi">Science-Fiction</option>
                  <option value="horror">Horreur</option>
                  <option value="adventure">Aventure</option>
                  <option value="animation">Animation</option>
                  <option value="thriller">Thriller</option>
                </select>
              </div>
              
              <div>
                <label for="movie-status" class="block text-sm font-medium mb-2">Statut *</label>
                <select id="movie-status" name="status" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
                  <option value="current">En cours</option>
                  <option value="upcoming">À venir</option>
                  <option value="archived">Archivé</option>
                </select>
              </div>
            </div>
            
            <!-- Right Column -->
            <div class="space-y-6">
              <div>
                <label for="movie-poster" class="block text-sm font-medium mb-2">Affiche du Film</label>
                <div class="border-2 border-dashed border-gray-700 rounded-lg p-4 text-center">
                  <div id="poster-preview" class="hidden mb-4">
                    <img id="poster-image" src="/placeholder.svg" alt="Aperçu de l'affiche" class="mx-auto h-40 object-contain">
                  </div>
                  <label for="poster-upload" class="cursor-pointer">
                    <div class="flex flex-col items-center justify-center py-4">
                      <svg class="w-10 h-10 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                      <p class="text-sm text-gray-400">Cliquez pour télécharger une affiche</p>
                      <p class="text-xs text-gray-500 mt-1">PNG, JPG jusqu'à 5MB</p>
                    </div>
                    <input id="poster-upload" name="poster" type="file" accept="image/*" class="hidden">
                  </label>
                </div>
              </div>
              
              <div>
                <label for="movie-description" class="block text-sm font-medium mb-2">Description</label>
                <textarea id="movie-description" name="description" rows="6" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white resize-none"></textarea>
              </div>
              
              <div>
                <label for="movie-cast" class="block text-sm font-medium mb-2">Acteurs principaux</label>
                <input type="text" id="movie-cast" name="cast" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white" placeholder="Séparez les noms par des virgules">
              </div>
            </div>
          </div>
          
          <div class="border-t border-gray-700 pt-6 flex justify-end space-x-4">
            <button type="button" id="cancel-add-movie" class="px-4 py-2 bg-transparent border border-gray-600 text-gray-300 rounded-lg hover:bg-gray-800">Annuler</button>
            <button type="submit" class="px-4 py-2 bg-cinema-gold hover:bg-yellow-500 text-black font-medium rounded-lg">Ajouter le Film</button>
          </div>
        </form>
      </div>
    </div>
  </div>
     <script src= "{{asset('js/filmdashbord.js')}}"></script> 
     <script src= "{{asset('js/dashbord.js')}}"></script> 

</body>
</html>
@endsection

