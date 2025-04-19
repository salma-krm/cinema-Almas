@extends('admindashbord.asidbar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/salle.css') }}">

<body class="bg-cinema-dark text-cinema-light">
  <div class="flex h-screen">
    <!-- Main Content -->
    <main class="flex-1 overflow-auto">
      <div class="p-8">
        <div class="flex justify-between items-center mb-8">
          <h1 class="text-3xl font-bold">Gestion des Rôles</h1>
          <a href="/rolecreate" class="bg-cinema-gold hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-lg flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Ajouter un Rôle
          </a>
        </div>

        <!-- Liste des Rôles -->
        @foreach ($roles as $role)
        <div class="mt-[5px] mb-[5px]">
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
              <div class="flex flex-col mb-4 md:mb-0">
                <div class="flex items-center gap-3">
                  <h3 class="text-xl font-bold">{{ $role->name }}</h3>
                </div>
              </div>
              <div class="flex gap-2">
                <form method="POST" action="/update/{{ $role->id }}/role">
                  @csrf
                  <input type="hidden" name="id" value="{{ $role->id }}"> 
                  <button type="submit" class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 hover:text-blue-400 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                  </button>
                </form>
                
                <button class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 hover:text-red-400 transition-colors"
                  onclick="confirmDelete({{ $role->id }}, '{{ $role->name }}')">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </main>
  </div>

  <!-- Modal de confirmation suppression -->
  <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-[#1a1c1e] rounded-xl p-6 max-w-md w-full mx-4">
        <h3 class="text-xl font-bold mb-4">Confirmer la suppression</h3>
        <p class="mb-6">Êtes-vous sûr de vouloir supprimer le rôle <span id="roleToDelete" class="text-cinema-gold"></span> ? Cette action est irréversible.</p>
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
    function confirmDelete(id, name) {
        document.getElementById("roleToDelete").innerText = name;
        document.getElementById("deleteForm").action = '/delete/' + id + '/role';
        document.getElementById("deleteModal").classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById("deleteModal").classList.add('hidden');
    }
  </script>

  <script src="{{ asset('js/dashbordsalle.js') }}"></script>
</body>
@endsection
