@extends('layout.nav')
@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CinéMax - Tableau de Bord</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{asset('css/dashbord.css')}}">
</head>
<body class="bg-cinema-dark text-cinema-white min-h-screen">
  <!-- Navigation -->
  <!-- Mobile Navigation -->
  <div id="mobile-menu" class="md:hidden bg-cinema-dark border-t border-gray-800 hidden fixed w-full z-10 top-16">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="#" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Films</a>
      <a href="#" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Horaires</a>
      <a href="#" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Tarifs</a>
      <a href="#" class="block px-3 py-2 text-gray-300 hover:text-cinema-gold">Contact</a>
      <div class="flex items-center space-x-2 px-3 py-2">
        <span class="text-sm text-gray-300">Bienvenue, Jean Dupont</span>
        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=100&auto=format&fit=crop&q=80" 
             alt="Profile" 
             class="w-6 h-6 rounded-full border-2 border-cinema-gold"/>
      </div>
    </div>
  </div>
  <!-- Main Content -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-12">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <!-- Sidebar -->
      <div class="md:col-span-1">
        <div class="dashboard-card rounded-xl shadow-lg p-6">
          <div class="text-center mb-6">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=200&auto=format&fit=crop&q=80" 
                 alt="Photo de profil" 
                 class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-cinema-gold"/>
            <h2 class="text-xl font-bold text-white">Jean Dupont</h2>
            <p class="text-gray-400">Membre depuis 2024</p>
          </div>
          <div class="space-y-3">
            <button class="w-full bg-cinema-gold text-cinema-dark px-4 py-2 rounded-full hover:bg-yellow-400 font-semibold transition-colors">
              Modifier le profil </button>
            <button class="w-full border border-cinema-gold text-cinema-gold px-4 py-2 rounded-full hover:bg-cinema-gold/10 transition-colors">
              Déconnexion
            </button>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="md:col-span-3 space-y-6">
        <!-- Profile Section -->
        <div class="dashboard-card rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-white">Informations du profil</h3>
          <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-300 mb-1">Prénom</label>
              <input type="text" value="Jean" 
                     class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800/50 focus:outline-none focus:border-cinema-gold text-white"/>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-300 mb-1">Nom</label>
              <input type="text" value="Dupont" 
                     class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800/50 focus:outline-none focus:border-cinema-gold text-white"/>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-300 mb-1">Email</label>
              <input type="email" value="jean.dupont@exemple.fr" 
                     class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800/50 focus:outline-none focus:border-cinema-gold text-white"/>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-300 mb-1">Téléphone</label>
              <input type="tel" value="06 12 34 56 78" 
                     class="w-full px-4 py-2 rounded-lg border border-gray-700 bg-gray-800/50 focus:outline-none focus:border-cinema-gold text-white"/>
            </div>
            <div class="md:col-span-2">
              <button class="bg-cinema-gold text-cinema-dark px-6 py-2 rounded-full hover:bg-yellow-400 font-semibold transition-colors">
                Enregistrer les modifications
              </button>
            </div>
          </form>
        </div>

        <!-- Upcoming Reservations -->
        <div class="dashboard-card rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-white">Réservations à venir</h3>
          <div class="space-y-4">
            <div class="border border-gray-700 rounded-lg p-4 hover:border-cinema-gold transition-colors">
              <div class="flex flex-col md:flex-row md:items-center justify-between">
                <div>
                  <h4 class="font-bold text-white">Dune: Deuxième Partie</h4>
                  <p class="text-gray-400">15 mars 2024 - 19h30</p>
                  <p class="text-sm text-gray-400">2 billets • Salle A • Sièges: F12, F13</p>
                </div>
                <div class="text-right mt-3 md:mt-0">
                  <span class="bg-cinema-gold/10 text-cinema-gold px-3 py-1 rounded-full text-sm font-semibold">Confirmé</span>
                  <button class="block mt-2 text-cinema-gold hover:text-yellow-400">Voir le billet</button>
                </div>
              </div>
            </div>
            <div class="border border-gray-700 rounded-lg p-4 hover:border-cinema-gold transition-colors">
              <div class="flex flex-col md:flex-row md:items-center justify-between">
                <div>
                  <h4 class="font-bold text-white">Gladiator II</h4>
                  <p class="text-gray-400">22 mars 2024 - 20h00</p>
                  <p class="text-sm text-gray-400">3 billets • Salle B • Sièges: D5, D6, D7</p>
                </div>
                <div class="text-right mt-3 md:mt-0">
                  <span class="bg-cinema-gold/10 text-cinema-gold px-3 py-1 rounded-full text-sm font-semibold">Confirmé</span>
                  <button class="block mt-2 text-cinema-gold hover:text-yellow-400">Voir le billet</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Favorite Films -->
        <div class="dashboard-card rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-white">Films favoris</h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Sintel -->
            <div class="border border-gray-700 rounded-lg overflow-hidden hover:border-cinema-gold transition-colors">
              <div class="flex">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/p10892939_v_h8_aa.jpg-ft3kbtHiFUqaFeKIzip7SpVt06xgxP.jpeg" 
                     alt="Sintel" 
                     class="w-24 h-32 object-cover"/>
                <div class="p-4 flex-1">
                  <h4 class="font-bold text-white">Sintel</h4>
                  <p class="text-sm text-gray-400 mb-2">Animation, Aventure • 15 min</p>
                  <div class="flex items-center">
                    <span class="text-cinema-gold">★★★★★</span>
                    <span class="ml-2 text-sm text-gray-400">5.0/5</span>
                  </div>
                  <button class="mt-2 text-cinema-gold hover:text-yellow-400">
                    Retirer des favoris
                  </button>
                </div>
              </div>
            </div>
            
            <!-- Captain America -->
            <div class="border border-gray-700 rounded-lg overflow-hidden hover:border-cinema-gold transition-colors">
              <div class="flex">
                <img src="https://images.unsplash.com/photo-1635805737707-575885ab0820?w=200&auto=format&fit=crop" 
                     alt="Captain America" 
                     class="w-24 h-32 object-cover"/>
                <div class="p-4 flex-1">
                  <h4 class="font-bold text-white">Captain America: Brave New World</h4>
                  <p class="text-sm text-gray-400 mb-2">Action, Aventure • 135 min</p>
                  <div class="flex items-center">
                    <span class="text-cinema-gold">★★★★☆</span>
                    <span class="ml-2 text-sm text-gray-400">4.2/5</span>
                  </div>
                  <button class="mt-2 text-cinema-gold hover:text-yellow-400">
                    Retirer des favoris
                  </button>
                </div>
              </div>
            </div>
            
            <!-- The Insiders -->
            <div class="border border-gray-700 rounded-lg overflow-hidden hover:border-cinema-gold transition-colors">
              <div class="flex">
                <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?w=200&auto=format&fit=crop" 
                     alt="The Insiders" 
                     class="w-24 h-32 object-cover"/>
                <div class="p-4 flex-1">
                  <h4 class="font-bold text-white">The Insiders</h4>
                  <p class="text-sm text-gray-400 mb-2">Thriller, Drame • 115 min</p>
                  <div class="flex items-center">
                    <span class="text-cinema-gold">★★★★☆</span>
                    <span class="ml-2 text-sm text-gray-400">4.5/5</span>
                  </div>
                  <button class="mt-2 text-cinema-gold hover:text-yellow-400">
                    Retirer des favoris
                  </button>
                </div>
              </div>
            </div>
            
            <!-- Les Gardiens de la Galaxie -->
            <div class="border border-gray-700 rounded-lg overflow-hidden hover:border-cinema-gold transition-colors">
              <div class="flex">
                <img src="https://images.unsplash.com/photo-1596727147705-61a532a659bd?w=200&auto=format&fit=crop" 
                     alt="Les Gardiens de la Galaxie" 
                     class="w-24 h-32 object-cover"/>
                <div class="p-4 flex-1">
                  <h4 class="font-bold text-white">Les Gardiens de la Galaxie</h4>
                  <p class="text-sm text-gray-400 mb-2">Science Fiction, Comédie • 150 min</p>
                  <div class="flex items-center">
                    <span class="text-cinema-gold">★★★★★</span>
                    <span class="ml-2 text-sm text-gray-400">4.8/5</span>
                  </div>
                  <button class="mt-2 text-cinema-gold hover:text-yellow-400">
                    Retirer des favoris
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- History -->
        <div class="dashboard-card rounded-xl shadow-lg p-6">
          <h3 class="text-xl font-bold mb-4 text-white">Historique des réservations</h3>
          <div class="overflow-x-auto">
            <table class="min-w-full">
              <thead>
                <tr>
                  <th class="px-4 py-2 text-left text-gray-400">Film</th>
                  <th class="px-4 py-2 text-left text-gray-400">Date</th>
                  <th class="px-4 py-2 text-left text-gray-400">Salle</th>
                  <th class="px-4 py-2 text-left text-gray-400">Billets</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-800">
                <tr>
                  <td class="px-4 py-3 text-white">Oppenheimer</td>
                  <td class="px-4 py-3 text-gray-400">10 février 2024</td>
                  <td class="px-4 py-3 text-gray-400">Salle C</td>
                  <td class="px-4 py-3 text-gray-400">2</td>
                </tr>
                <tr>
                  <td class="px-4 py-3 text-white">Joker</td>
                  <td class="px-4 py-3 text-gray-400">25 janvier 2024</td>
                  <td class="px-4 py-3 text-gray-400">Salle A</td>
                  <td class="px-4 py-3 text-gray-400">1</td>
                </tr>
                <tr>
                  <td class="px-4 py-3 text-white">Avatar: La Voie de l'Eau</td>
                  <td class="px-4 py-3 text-gray-400">5 janvier 2024</td>
                  <td class="px-4 py-3 text-gray-400">Salle IMAX</td>
                  <td class="px-4 py-3 text-gray-400">3</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Mobile menu toggle
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');
      
      mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
      });
    });
  </script>
  <script src= "{{asset('js/app.js')}}"></script>
</body>
</html>
@endsection