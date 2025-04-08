@extends('layout.nav')
@section('content')
@section(('contentcss'))
{{-- link css --}}
<link rel="stylesheet" href="{{asset('css/detailfilm.css')}}"> 
<body class="bg-cinema-dark text-cinema-white min-h-screen">
  <!-- Navigation -->
  <!-- Movie Hero Section -->
  <section class="pt-20 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-cinema-dark z-0">
      <img 
        src="https://images.unsplash.com/photo-1635805737707-575885ab0820?w=1600&auto=format&fit=crop" 
        alt="Captain America: Brave New World" 
        class="w-full h-full object-cover opacity-30"
      />
    </div>
    <div class="relative z-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <div class="md:flex items-start gap-8">
        <!-- Movie Poster -->
        <div class="md:w-1/3 lg:w-1/4 mb-8 md:mb-0">
          <div class="rounded-xl overflow-hidden shadow-2xl border-2 border-gray-800">
            <img 
              src="https://images.unsplash.com/photo-1635805737707-575885ab0820?w=600&auto=format&fit=crop" 
              alt="Captain America: Brave New World" 
              class="w-full h-auto"
            />
          </div>
          <div class="mt-6 flex justify-center">
            <button class="trailer-button bg-cinema-gold text-cinema-dark px-8 py-3 rounded-full hover:bg-yellow-400 transition-colors font-semibold flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Voir la bande-annonce
            </button>
          </div>
        </div>
        
        <!-- Movie Details -->
        <div class="md:w-2/3 lg:w-3/4">
          <div class="flex flex-wrap items-center gap-3 mb-4">
            <span class="bg-cinema-gold/20 text-cinema-gold px-3 py-1 rounded-full text-sm font-semibold">
              Action
            </span>
            <span class="bg-cinema-gold/20 text-cinema-gold px-3 py-1 rounded-full text-sm font-semibold">
              Aventure
            </span>
            <span class="bg-cinema-gold/20 text-cinema-gold px-3 py-1 rounded-full text-sm font-semibold">
              Science Fiction
            </span>
          </div>
          
          <h1 class="text-4xl md:text-5xl font-bold mb-2">Captain America: Brave New World</h1>
          
          <div class="flex items-center gap-4 mb-6">
            <div class="flex items-center">
              <div class="rating-stars">
                <span class="star filled">★</span>
                <span class="star filled">★</span>
                <span class="star filled">★</span>
                <span class="star filled">★</span>
                <span class="star empty">★</span>
              </div>
              <span class="ml-2 text-gray-400">4.2/5</span>
            </div>
            <span class="text-gray-400">|</span>
            <span class="text-gray-400">2h 15min</span>
            <span class="text-gray-400">|</span>
            <span class="inline-block bg-cinema-gold/20 text-cinema-gold px-2 py-1 rounded-md text-sm font-semibold">
              12+
            </span>
          </div>
          
          <p class="text-xl text-gray-300 mb-6">
            Sam Wilson assume le rôle de Captain America et doit faire face à de nouvelles menaces dans un monde en pleine mutation. Après les événements de "Falcon et le Soldat de l'Hiver", Sam embrasse pleinement son nouveau rôle d'icône américaine tout en luttant contre une conspiration qui menace la stabilité mondiale.
          </p>
          
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div>
              <h3 class="text-gray-400 text-sm mb-1">Réalisateur</h3>
              <p class="font-semibold">Julius Onah</p>
            </div>
            <div>
              <h3 class="text-gray-400 text-sm mb-1">Date de sortie</h3>
              <p class="font-semibold">14 Février 2025</p>
            </div>
            <div>
              <h3 class="text-gray-400 text-sm mb-1">Langue</h3>
              <p class="font-semibold">Anglais (VOST)</p>
            </div>
            <div>
              <h3 class="text-gray-400 text-sm mb-1">Pays</h3>
              <p class="font-semibold">États-Unis</p>
            </div>
          </div>
          
          <div class="mt-8">
            <h3 class="text-xl font-semibold mb-4">Séances d'aujourd'hui</h3>
            <div class="flex flex-wrap gap-3">
              <button class="px-6 py-3 border-2 border-cinema-gold text-cinema-gold rounded-md hover:bg-cinema-gold hover:text-cinema-dark transition-colors font-semibold">
                14:15
              </button>
              <button class="px-6 py-3 border-2 border-cinema-gold text-cinema-gold rounded-md hover:bg-cinema-gold hover:text-cinema-dark transition-colors font-semibold">
                18:45
              </button>
              <button class="px-6 py-3 border-2 border-cinema-gold text-cinema-gold rounded-md hover:bg-cinema-gold hover:text-cinema-dark transition-colors font-semibold">
                21:30
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Synopsis Section -->
  <section class="py-12 bg-cinema-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold mb-6">Synopsis</h2>
      <div class="bg-gray-900/50 p-8 rounded-xl">
        <p class="text-gray-300 mb-4">
          Dans "Captain America: Brave New World", Sam Wilson (Anthony Mackie) a pleinement endossé le costume et le bouclier de Captain America, prenant la relève de Steve Rogers. Alors qu'il tente de définir ce que signifie être Captain America dans un monde post-Blip, Sam est confronté à une nouvelle menace mondiale.
        </p>
        <p class="text-gray-300 mb-4">
          Le Président des États-Unis (Harrison Ford) fait appel à Sam pour une mission diplomatique délicate qui tourne rapidement au vinaigre lorsqu'un complot international est découvert. Sam doit s'associer à Joaquin Torres (Danny Ramirez), le nouveau Faucon, et à d'anciens alliés pour déjouer une conspiration qui pourrait déclencher une nouvelle guerre froide.
        </p>
        <p class="text-gray-300">
          Alors que des super-soldats mystérieux commencent à apparaître à travers le monde, Sam découvre que le programme du sérum du super-soldat a été relancé par une organisation secrète. Il devra non seulement combattre ces nouvelles menaces, mais aussi définir ce que signifie être un symbole d'espoir dans un monde divisé par la peur et la méfiance.
        </p>
      </div>
    </div>
  </section>
  <!-- Cast Section -->
  <section class="py-12 bg-cinema-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold mb-8">Distribution</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
        <!-- Actor 1 -->
        <div class="cast-card bg-gray-900/30 rounded-xl overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300&auto=format&fit=crop" 
            alt="Anthony Mackie" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-semibold">Anthony Mackie</h3>
            <p class="text-sm text-gray-400">Sam Wilson / Captain America</p>
          </div>
        </div>
        
        <!-- Actor 2 -->
        <div class="cast-card bg-gray-900/30 rounded-xl overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&auto=format&fit=crop" 
            alt="Danny Ramirez" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-semibold">Danny Ramirez</h3>
            <p class="text-sm text-gray-400">Joaquin Torres / Falcon</p>
          </div>
        </div>
        
        <!-- Actor 3 -->
        <div class="cast-card bg-gray-900/30 rounded-xl overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&auto=format&fit=crop" 
            alt="Harrison Ford" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-semibold">Harrison Ford</h3>
            <p class="text-sm text-gray-400">Président Thaddeus Ross</p>
          </div>
        </div>
        
        <!-- Actor 4 -->
        <div class="cast-card bg-gray-900/30 rounded-xl overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=300&auto=format&fit=crop" 
            alt="Liv Tyler" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-semibold">Liv Tyler</h3>
            <p class="text-sm text-gray-400">Betty Ross</p>
          </div>
        </div>
        
        <!-- Actor 5 -->
        <div class="cast-card bg-gray-900/30 rounded-xl overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1552374196-c4e7ffc6e126?w=300&auto=format&fit=crop" 
            alt="Tim Blake Nelson" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-semibold">Tim Blake Nelson</h3>
            <p class="text-sm text-gray-400">Samuel Sterns / The Leader</p>
          </div>
        </div>
        
        <!-- Actor 6 -->
        <div class="cast-card bg-gray-900/30 rounded-xl overflow-hidden">
          <img 
            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&auto=format&fit=crop" 
            alt="Shira Haas" 
            class="w-full h-48 object-cover"
          />
          <div class="p-4">
            <h3 class="font-semibold">Shira Haas</h3>
            <p class="text-sm text-gray-400">Ruth Bat-Seraph / Sabra</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Reviews Section -->
  <section class="py-12 bg-cinema-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold">Avis des spectateurs</h2>
        <button class="bg-cinema-gold text-cinema-dark px-6 py-2 rounded-full hover:bg-yellow-400 transition-colors font-semibold">
          Ajouter un avis
        </button>
      </div>
      
      <div class="space-y-6">
        <!-- Review 1 -->
        <div class="bg-gray-900/30 p-6 rounded-xl">
          <div class="flex justify-between items-start mb-4">
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-gray-700 flex items-center justify-center text-xl font-bold mr-4">
                M
              </div>
              <div>
                <h3 class="font-semibold">Michel Dupont</h3>
                <p class="text-sm text-gray-400">Il y a 3 jours</p>
              </div>
            </div>
            <div class="rating-stars">
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
            </div>
          </div>
          <p class="text-gray-300">
            Un excellent film qui redéfinit ce que signifie être Captain America. Anthony Mackie est parfait dans ce rôle et apporte sa propre vision du personnage. Les scènes d'action sont spectaculaires et l'intrigue politique est captivante. À voir absolument !
          </p>
        </div>
        
        <!-- Review 2 -->
        <div class="bg-gray-900/30 p-6 rounded-xl">
          <div class="flex justify-between items-start mb-4">
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-gray-700 flex items-center justify-center text-xl font-bold mr-4">
                S
              </div>
              <div>
                <h3 class="font-semibold">Sophie Martin</h3>
                <p class="text-sm text-gray-400">Il y a 5 jours</p>
              </div>
            </div>
            <div class="rating-stars">
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star empty">★</span>
            </div>
          </div>
          <p class="text-gray-300">
            J'ai beaucoup aimé ce film qui offre une nouvelle perspective sur l'univers Marvel. Les performances sont solides et l'histoire est bien construite. Quelques longueurs dans le deuxième acte, mais le final est époustouflant. Harrison Ford apporte une gravité bienvenue au MCU.
          </p>
        </div>
        
        <!-- Review 3 -->
        <div class="bg-gray-900/30 p-6 rounded-xl">
          <div class="flex justify-between items-start mb-4">
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-gray-700 flex items-center justify-center text-xl font-bold mr-4">
                T
              </div>
              <div>
                <h3 class="font-semibold">Thomas Leroy</h3>
                <p class="text-sm text-gray-400">Il y a 1 semaine</p>
              </div>
            </div>
            <div class="rating-stars">
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star empty">★</span>
              <span class="star empty">★</span>
            </div>
          </div>
          <p class="text-gray-300">
            Un film divertissant mais qui manque parfois de profondeur. Les scènes d'action sont impressionnantes, mais l'intrigue est prévisible. J'aurais aimé plus d'exploration du personnage de Sam Wilson et de ses défis en tant que nouveau Captain America. Reste un bon divertissement.
          </p>
        </div>
      </div>
      
      <div class="mt-8 text-center">
        <button class="border border-gray-600 text-gray-400 px-6 py-2 rounded-full hover:border-cinema-gold hover:text-cinema-gold transition-colors">
          Voir plus d'avis
        </button>
      </div>
    </div>
  </section>

  <!-- Similar Movies Section -->
  <section class="py-12 bg-cinema-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold mb-8">Films similaires</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Movie 1 -->
        <div class="movie-card rounded-xl overflow-hidden">
          <div class="relative">
            <img 
              src="https://images.unsplash.com/photo-1596727147705-61a532a659bd?w=500&auto=format&fit=crop" 
              alt="Les Gardiens de la Galaxie" 
              class="w-full h-64 object-cover"
            />
            <div class="absolute top-2 right-2 bg-cinema-gold/90 text-cinema-dark px-2 py-1 rounded text-sm font-semibold">
              4.5/5
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-lg mb-1">Les Gardiens de la Galaxie</h3>
            <p class="text-sm text-gray-400 mb-3">Science Fiction, Comédie</p>
            <a href="#" class="text-cinema-gold hover:underline text-sm flex items-center">
              Voir les détails
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
        
        <!-- Movie 2 -->
        <div class="movie-card rounded-xl overflow-hidden">
          <div class="relative">
            <img 
              src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?w=500&auto=format&fit=crop" 
              alt="The Insiders" 
              class="w-full h-64 object-cover"
            />
            <div class="absolute top-2 right-2 bg-cinema-gold/90 text-cinema-dark px-2 py-1 rounded text-sm font-semibold">
              4.2/5
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-lg mb-1">The Insiders</h3>
            <p class="text-sm text-gray-400 mb-3">Thriller, Drame</p>
            <a href="#" class="text-cinema-gold hover:underline text-sm flex items-center">
              Voir les détails
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
        
        <!-- Movie 3 -->
        <div class="movie-card rounded-xl overflow-hidden">
          <div class="relative">
            <img 
              src="https://images.unsplash.com/photo-1626814026160-2237a95fc5a0?w=500&auto=format&fit=crop" 
              alt="Black Widow" 
              class="w-full h-64 object-cover"
            />
            <div class="absolute top-2 right-2 bg-cinema-gold/90 text-cinema-dark px-2 py-1 rounded text-sm font-semibold">
              4.0/5
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-lg mb-1">Black Widow</h3>
            <p class="text-sm text-gray-400 mb-3">Action, Espionnage</p>
            <a href="#" class="text-cinema-gold hover:underline text-sm flex items-center">
              Voir les détails
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
        
        <!-- Movie 4 -->
        <div class="movie-card rounded-xl overflow-hidden">
          <div class="relative">
            <img 
              src="https://images.unsplash.com/photo-1485846234645-a62644f84728?w=500&auto=format&fit=crop" 
              alt="The Avengers" 
              class="w-full h-64 object-cover"
            />
            <div class="absolute top-2 right-2 bg-cinema-gold/90 text-cinema-dark px-2 py-1 rounded text-sm font-semibold">
              4.8/5
            </div>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-lg mb-1">The Avengers</h3>
            <p class="text-sm text-gray-400 mb-3">Action, Science Fiction</p>
            <a href="#" class="text-cinema-gold hover:underline text-sm flex items-center">
              Voir les détails
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="py-16 bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h2 class="text-3xl font-bold mb-4">Restez informé</h2>
      <p class="text-xl text-gray-400 mb-8">
        Inscrivez-vous à notre newsletter pour recevoir en avant-première notre programmation et nos offres spéciales.
      </p>
      <form class="max-w-md mx-auto">
        <div class="flex flex-col sm:flex-row gap-4">
          <input 
            type="email" 
            placeholder="Votre adresse email" 
            class="flex-grow px-4 py-3 rounded-full bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-cinema-gold"
            required
          />
          <button type="submit" class="bg-cinema-gold text-cinema-dark px-6 py-3 rounded-full hover:bg-yellow-400 font-semibold transition-colors">
            S'inscrire
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <script src= "{{asset('js/app.js')}}"></script> 
</body>
</html>
@endsection