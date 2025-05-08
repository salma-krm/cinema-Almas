@extends('admindashbord.asidbar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/salle.css') }}">

<body class="bg-cinema-dark text-cinema-light">
  <div class="flex h-screen">
    <main class="flex-1 overflow-auto">
      <div class="p-8">
        <div class="flex justify-between items-center mb-8">
          <h1 class="text-3xl font-bold">Gestion des Séances</h1>
          <a href="/seance" class="bg-cinema-gold hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-lg flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Ajouter une Séance
          </a>
        </div>

        @foreach ($seances as $seance)
        <div class="mt-[5px] mb-[5px]">
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <div class="flex flex-col md:flex-row gap-4">
              <div class="w-24 h-24 flex items-center justify-center rounded-full border-2 border-cinema-gold bg-gray-800">
                <span class="text-white font-bold text-center text-sm px-2">{{ \Carbon\Carbon::parse($seance->horaire)->format('d/m H:i') }}</span>
              </div>

              <div class="flex-1">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-2">
                  <div>
                    <h3 class="text-xl font-bold">{{ $seance->film->title ?? 'Film inconnu' }}</h3>
                    <p class="text-sm text-white mt-1">Salle : <span class="text-cinema-gold font-semibold">{{ $seance->salle->name ?? 'Salle inconnue' }}</span></p>
                  </div>

                  <div class="flex gap-2 mt-2 md:mt-0">
                    <form method="POST" action="/update/{{ $seance->id }}/seance">
                      @csrf
                      <input type="hidden" name="id" value="{{ $seance->id }}"> 
                      <button type="submit" class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 hover:text-blue-400 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                      </button>
                    </form>
                    
                    <button class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 hover:text-red-400 transition-colors"
                      onclick="confirmDelete({{ $seance->id }}, '{{ $seance->film->title }}')">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </main>
  </div>

  <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-[#1a1c1e] rounded-xl p-6 max-w-md w-full mx-4">
        <h3 class="text-xl font-bold mb-4">Confirmer la suppression</h3>
        <p class="mb-6">Supprimer la séance de <span id="seanceToDelete" class="text-cinema-gold"></span> ?</p>
        <div class="flex justify-end gap-3">
            <button onclick="closeDeleteModal()" class="px-4 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 transition-colors">
                Annuler
            </button>
            <form id="deleteForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                    Supprimer
                </button>
            </form>
        </div>
    </div>
  </div>

  <script>
    function confirmDelete(id, title) {
        document.getElementById("seanceToDelete").innerText = title;
        const formAction = '/delete/' + id + '/seance';
        document.getElementById("deleteForm").action = formAction;
        document.getElementById("deleteModal").classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById("deleteModal").classList.add('hidden');
    }
  </script>

  <script src="{{ asset('js/dashbordsalle.js') }}"></script>
</body>
@endsection
