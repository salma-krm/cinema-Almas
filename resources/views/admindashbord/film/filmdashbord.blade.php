@extends('admindashbord.asidbar')
@section('content')
<body class="bg-cinema-dark text-cinema-light">
  <div class="flex h-screen"> 
    <!-- Main Content -->
    <main class="flex-1 overflow-auto md:pt-0 pt-16">
      <div class="p-4 md:p-8">
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl md:text-3xl font-bold">Gestion des Films</h1>
          <a href="/filmcreate" class="inline-block">
            <button class="bg-cinema-gold hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-lg flex items-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
              Ajouter un Film
            </button>
          </a>
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
                @foreach($films as $film)
                <tr class="border-b border-gray-700">
                  <td class="py-3">
                    <div class="flex items-center">
                      <div class="w-10 h-14 bg-gray-800 rounded mr-3 overflow-hidden">
                        <img src="{{ asset('storage/' . $film->photo) }}" alt="Affiche" class="h-full object-cover">
                      </div>
                      <div>
                        <p class="font-medium">{{ $film->title }}</p>
                        <p class="text-sm text-gray-400">{{ $film->realisateur }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="py-3">{{ $film->duree }} s</td>
                  <td class="py-3">{{ $film->genre->name ?? 'N/A' }}</td>
                  <td class="py-3">
                    <span class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">En cours</span>
                  </td>
                  <td class="py-3">{{ $film->seances->count() ?? 0 }}</td>

                  <td class="py-3">
                    <div class="flex space-x-2">
                      <!-- Modifier -->
                      <form method="POST" action="{{ route('edit.film', $film->id) }}" class="inline-block">
                        @csrf
                        <button type="submit" class="p-1 text-blue-400 hover:text-blue-300">
                          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M12 15l-4 1 1-4 6.768-6.768z"/>
                          </svg>
                        </button>
                      </form>

                      <!-- Supprimer -->
                      <div class="flex gap-2">
                        <a href="{{ route('film.delete', $film->id) }}" class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 hover:text-red-400 transition-colors">
                          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>  


        <!-- Pagination -->
        <div >
          {{$films->links()}}
        </div>
      </div>
    </main>
  </div>


  <script src="{{ asset('js/filmdashbord.js') }}"></script>
</body>
@endsection
