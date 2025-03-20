<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CinéMax - Administration</title>
  <script src="https://cdn.tailwindcss.com"></script>
 
  <style>
    .sidebar-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .sidebar-link.active {
      background-color: rgba(255, 255, 255, 0.1);
      color: #F5C518;
    }
  </style>
</head>
<body class="bg-cinema-dark text-cinema-light">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#1a1c1e] p-6">
      <div class="mb-8">
        <h1 class="text-2xl font-bold text-cinema-gold">CinéMax Admin</h1>
      </div>
      <nav class="space-y-2">
        <a href="#" class="sidebar-link active flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
          </svg>
          Dashboard
        </a>
        <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          Réservations
        </a>
        <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
          </svg>
          Tickets
        </a>
        <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          Utilisateurs
        </a>
        <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
          </svg>
          Salles
        </a>
        <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded-lg transition-colors">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          Tarifs
        </a>
      </nav>
    </aside>

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
                </tr>
              </thead>
              <tbody class="text-gray-300">
                <tr class="border-b border-gray-700">
                  <td class="py-3">Jean Dupont</td>
                  <td class="py-3">Les Gardiens de la Galaxie</td>
                  <td class="py-3">15 Mars, 20:30</td>
                  <td class="py-3">2</td>
                  <td class="py-3">
                    <span class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">Confirmée</span>
                  </td>
                </tr>
                <tr class="border-b border-gray-700">
                  <td class="py-3">Marie Martin</td>
                  <td class="py-3">Captain America</td>
                  <td class="py-3">15 Mars, 18:45</td>
                  <td class="py-3">3</td>
                  <td class="py-3">
                    <span class="px-2 py-1 bg-yellow-900 text-yellow-200 rounded-full text-xs">En attente</span>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">Pierre Durand</td>
                  <td class="py-3">Sintel</td>
                  <td class="py-3">15 Mars, 15:00</td>
                  <td class="py-3">4</td>
                  <td class="py-3">
                    <span class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">Confirmée</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Room Status -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <div class="flex justify-between items-start mb-4">
              <h3 class="text-xl font-bold">Salle 1</h3>
              <span class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">Disponible</span>
            </div>
            <div class="space-y-2">
              <p>Type: <span class="text-cinema-gold">IMAX</span></p>
              <p>Capacité: <span class="text-cinema-gold">200 places</span></p>
            </div>
          </div>
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <div class="flex justify-between items-start mb-4">
              <h3 class="text-xl font-bold">Salle 2</h3>
              <span class="px-2 py-1 bg-blue-900 text-blue-200 rounded-full text-xs">En séance</span>
            </div>
            <div class="space-y-2">
              <p>Type: <span class="text-cinema-gold">3D</span></p>
              <p>Capacité: <span class="text-cinema-gold">150 places</span></p>
            </div>
          </div>
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <div class="flex justify-between items-start mb-4">
              <h3 class="text-xl font-bold">Salle 3</h3>
              <span class="px-2 py-1 bg-red-900 text-red-200 rounded-full text-xs">Maintenance</span>
            </div>
            <div class="space-y-2">
              <p>Type: <span class="text-cinema-gold">Standard</span></p>
              <p>Capacité: <span class="text-cinema-gold">100 places</span></p>
            </div>
          </div>
          <div class="bg-[#1a1c1e] rounded-xl p-6">
            <div class="flex justify-between items-start mb-4">
              <h3 class="text-xl font-bold">Salle VIP</h3>
              <span class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">Disponible</span>
            </div>
            <div class="space-y-2">
              <p>Type: <span class="text-cinema-gold">Premium</span></p>
              <p>Capacité: <span class="text-cinema-gold">50 places</span></p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    // Handle sidebar navigation
    document.querySelectorAll('.sidebar-link').forEach(link => {
      link.addEventListener('click', (e) => {
        document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
        e.currentTarget.classList.add('active');
      });
    });
  </script>
     <script src= "{{asset('js/dashbord.js')}}"></script> 
</body>
</html>