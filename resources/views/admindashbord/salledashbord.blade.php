@extends('admindashbord.asidbar')
@section('content')
{{-- link css --}}
<link rel="stylesheet" href="{{asset('css/salle.css')}}"> 
<body class="bg-cinema-dark text-cinema-light">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <!-- Main Content -->
    <main class="flex-1 overflow-auto">
      <div class="p-8">
        <div class="flex justify-between items-center mb-8">
          <h1 class="text-3xl font-bold">Gestion des Salles</h1>
          <button id="open-add-room-modal" class="bg-cinema-gold hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-lg flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Ajouter une Salle
          </button>
        </div>

        <!-- Room List -->
        <div class="space-y-6">
          <!-- Room 3 -->
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
              <div class="flex flex-col mb-4 md:mb-0">
                <div class="flex items-center gap-3">
                  <h3 class="text-xl font-bold">Salle 3</h3>
                  <span class="px-2 py-1 bg-red-900 text-red-200 rounded-full text-xs">Maintenance</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2 mt-3">
                  <p>Type: <span class="text-cinema-gold">Standard</span></p>
                  <p>Capacité: <span class="text-cinema-gold">100 places</span></p>
                </div>
              </div>
              <div class="flex gap-2 w-full md:w-auto">
                <a href="edit-room.html?id=3" class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 transition-colors">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                  </svg>
                </a>
                <button class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 hover:text-red-400 transition-colors" onclick="confirmDelete(3, 'Salle 3')">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <!-- Room 4 -->
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
              <div class="flex flex-col mb-4 md:mb-0">
                <div class="flex items-center gap-3">
                  <h3 class="text-xl font-bold">Salle VIP</h3>
                  <span class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">Disponible</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2 mt-3">
                  <p>Type: <span class="text-cinema-gold">Premium</span></p>
                  <p>Capacité: <span class="text-cinema-gold">50 places</span></p>
                </div>
              </div>
              <div class="flex gap-2 w-full md:w-auto">
                <a href="edit-room.html?id=4" class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 transition-colors">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                  </svg>
                </a>
                <button class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 hover:text-red-400 transition-colors" onclick="confirmDelete(4, 'Salle VIP')">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Delete Confirmation Modal -->
  <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-[#1a1c1e] rounded-xl p-6 max-w-md w-full mx-4">
      <h3 class="text-xl font-bold mb-4">Confirmer la suppression</h3>
      <p class="mb-6">Êtes-vous sûr de vouloir supprimer <span id="roomToDelete" class="text-cinema-gold"></span> ? Cette action est irréversible.</p>
      <div class="flex justify-end gap-3">
        <button onclick="closeDeleteModal()" class="px-4 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 transition-colors">
          Annuler
        </button>
        <button id="confirmDeleteBtn" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
          Supprimer
        </button>
      </div>
    </div>
  </div>

  <!-- Add Room Modal -->
  <div id="addRoomModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-[#1a1c1e] rounded-xl w-full max-w-3xl mx-4 max-h-[90vh] overflow-y-auto">
      <div class="p-6">
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-xl font-bold text-cinema-light">Ajouter une Nouvelle Salle</h2>
          <button id="close-modal" class="text-gray-400 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <form id="add-room-form">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Left Column -->
            <div class="space-y-6">
              <div>
                <label for="room-name" class="block text-sm font-medium mb-2">Nom de la Salle *</label>
                <input type="text" id="room-name" name="name" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>
              
              <div>
                <label for="room-type" class="block text-sm font-medium mb-2">Type de Salle *</label>
                <select id="room-type" name="type" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
                  <option value="">Sélectionner un type</option>
                  <option value="standard">Standard</option>
                  <option value="imax">IMAX</option>
                  <option value="3d">3D</option>
                  <option value="premium">Premium/VIP</option>
                </select>
              </div>
              
              <div>
                <label for="room-capacity" class="block text-sm font-medium mb-2">Capacité (places) *</label>
                <input type="number" id="room-capacity" name="capacity" required min="1" max="500" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
              </div>
              
              <div>
                <label for="room-status" class="block text-sm font-medium mb-2">Statut *</label>
                <select id="room-status" name="status" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
                  <option value="available">Disponible</option>
                  <option value="in_use">En séance</option>
                  <option value="maintenance">Maintenance</option>
                </select>
              </div>
            </div>
            
            <!-- Right Column -->
            <div class="space-y-6">
              <div>
                <label class="block text-sm font-medium mb-2">Équipements</label>
                <div class="grid grid-cols-2 gap-4">
                  <div class="flex items-center">
                    <input type="checkbox" id="equipment-3d" name="equipment[]" value="3d" class="w-4 h-4 mr-2">
                    <label for="equipment-3d">Projecteur 3D</label>
                  </div>
                  <div class="flex items-center">
                    <input type="checkbox" id="equipment-dolby" name="equipment[]" value="dolby" class="w-4 h-4 mr-2">
                    <label for="equipment-dolby">Dolby Atmos</label>
                  </div>
                  <div class="flex items-center">
                    <input type="checkbox" id="equipment-surround" name="equipment[]" value="surround" class="w-4 h-4 mr-2">
                    <label for="equipment-surround">Son Surround</label>
                  </div>
                  <div class="flex items-center">
                    <input type="checkbox" id="equipment-reclining" name="equipment[]" value="reclining" class="w-4 h-4 mr-2">
                    <label for="equipment-reclining">Sièges inclinables</label>
                  </div>
                </div>
              </div>
              
              <div>
                <label for="room-description" class="block text-sm font-medium mb-2">Description</label>
                <textarea id="room-description" name="description" rows="4" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white resize-none"></textarea>
              </div>
              
              <div>
                <label for="room-maintenance-notes" class="block text-sm font-medium mb-2">Notes de maintenance</label>
                <textarea id="room-maintenance-notes" name="maintenance_notes" rows="2" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white resize-none" placeholder="Laissez vide si aucune maintenance n'est prévue"></textarea>
              </div>
            </div>
          </div>
          
          <div class="border-t border-gray-700 pt-6 flex justify-end space-x-4">
            <button type="button" id="cancel-add-room" class="px-4 py-2 bg-transparent border border-gray-600 text-gray-300 rounded-lg hover:bg-gray-800">Annuler</button>
            <button type="submit" class="px-4 py-2 bg-cinema-gold hover:bg-yellow-500 text-black font-medium rounded-lg">Ajouter la Salle</button>
          </div>
        </form>
      </div>
    </div>
  </div>

     <script src= "{{asset('js/dashbordsalle.js')}}"></script> 
</body>
</html>
@endsection

