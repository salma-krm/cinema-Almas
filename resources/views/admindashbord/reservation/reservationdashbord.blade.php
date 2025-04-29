@extends('admindashbord.asidbar')
@section('content')
{{-- link css --}}
<link rel="stylesheet" href="{{asset('css/dashbordreservation.css')}}"> 
</head>
<body class="bg-cinema-dark text-cinema-light">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <!-- Main Content -->
    <main class="flex-1 overflow-auto">
      <div class="p-8">
        <h1 class="text-3xl font-bold mb-8">Tableau de Bord</h1>
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <h3 class="text-cinema-light mb-2">Réservations Aujourd'hui</h3>
            <p class="text-3xl font-bold text-cinema-gold">85</p>
          </div>
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <h3 class="text-cinema-light mb-2">Tickets Vendus</h3>
            <p class="text-3xl font-bold text-cinema-gold">142</p>
          </div>
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <h3 class="text-cinema-light mb-2">Utilisateurs Actifs</h3>
            <p class="text-3xl font-bold text-cinema-gold">1,254</p>
          </div>
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <h3 class="text-cinema-light mb-2">Revenus du Jour</h3>
            <p class="text-3xl font-bold text-cinema-gold">2,580 €</p>
          </div>
        </div>

        <!-- Recent Reservations -->
        <div class="bg-[#1a1c1e] rounded-xl p-6 mb-8">
          <h2 class="text-xl font-bold mb-6">Réservations Récentes</h2>
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="text-left border-b border-gray-700">
                  <th class="pb-3 font-medium">Client</th>
                  <th class="pb-3 font-medium">Film</th>
                  <th class="pb-3 font-medium">Date</th>
                  <th class="pb-3 font-medium">Places</th>
                  <th class="pb-3 font-medium">Status</th>
                  <th class="pb-3 font-medium">Actions</th> <!-- Nouvelle colonne -->
                </tr>
              </thead>
              <tbody class="text-gray-300">
                <tr>
                  <td class="py-3">Pierre Durand</td>
                  <td class="py-3">Sintel</td>
                  <td class="py-3">15 Mars, 15:00</td>
                  <td class="py-3">4</td>
                  <td class="py-3">
                    <span id="status-badge-3" class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">Confirmée</span>
                  </td>
                  <td class="py-3">
                    <select 
                      id="status-select-3" 
                      class="bg-[#131416] border border-gray-700 rounded-lg py-1 px-2 text-sm text-white"
                      onchange="updateStatus(3, this.value)"
                    >
                      <option value="confirmed" selected>Confirmée</option>
                      <option value="pending">En attente</option>
                      <option value="cancelled">Annulée</option>
                    </select>
                  </td>
                </tr>
              </tbody>
            </table>
            
            <!-- Ajoutez cet élément pour les notifications -->
            <div id="notification" class="fixed bottom-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 transition-all duration-300 transform translate-y-16 opacity-0 hidden">
              <span id="notification-message"></span>
            </div>
            
          
          </div>
        </div>

        <!-- Room Status -->
     
      </div>
    </main>
  </div>
     <script src= "{{asset('js/dashbordreservation.js')}}"></script> 
</body>
</html>
@endsection