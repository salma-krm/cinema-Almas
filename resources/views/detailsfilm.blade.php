<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Film - CinéMax</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cinema-gold': '#F5C518',
                        'cinema-dark': '#131416',
                        'cinema-light': '#F7F7F7',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-cinema-dark text-white min-h-screen">
    <!-- Header/Navigation -->
    <header class="bg-cinema-dark shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-cinema-gold">CinéMax</a>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-300 hover:text-cinema-gold transition-colors">Accueil</a>
                    <a href="#" class="text-gray-300 hover:text-cinema-gold transition-colors">Films</a>
                    <a href="#" class="text-gray-300 hover:text-cinema-gold transition-colors">Événements</a>
                    <a href="#" class="text-gray-300 hover:text-cinema-gold transition-colors">Contact</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-300 hover:text-cinema-gold transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </a>
                    <a href="#" class="bg-cinema-gold text-cinema-dark px-4 py-2 rounded-full hover:bg-yellow-400 transition-colors font-semibold">Réserver</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex items-center space-x-2 text-sm text-gray-400">
                <a href="#" class="hover:text-cinema-gold transition-colors">Accueil</a>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <a href="#" class="hover:text-cinema-gold transition-colors">Films</a>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <span class="text-cinema-gold">Sintel</span>
            </div>
        </div>
    </div>

    <!-- Movie Hero Section -->
    <section class="relative">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-cinema-dark opacity-90 z-10"></div>
            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/p10892939_v_h8_aa.jpg-ft3kbtHiFUqaFeKIzip7SpVt06xgxP.jpeg" alt="Sintel" class="w-full h-full object-cover" />
        </div>
        
        <!-- Movie Info -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
            <div class="md:flex items-start">
                <!-- Movie Poster -->
                <div class="md:flex-shrink-0 mb-8 md:mb-0 md:mr-8">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/p10892939_v_h8_aa.jpg-ft3kbtHiFUqaFeKIzip7SpVt06xgxP.jpeg" alt="Sintel" class="w-64 h-auto rounded-lg shadow-xl" />
                </div>
                
                <!-- Movie Details -->
                <div class="flex-1">
                    <div class="flex flex-wrap items-center mb-4">
                        <span class="bg-cinema-gold/20 text-cinema-gold px-3 py-1 rounded-full text-sm font-semibold mr-3">
                            Tous publics
                        </span>
                        <span class="text-gray-400 text-sm mr-3">2010</span>
                        <span class="text-gray-400 text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            15min
                        </span>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Sintel</h1>
                    
                    <div class="flex flex-wrap items-center mb-6">
                        <div class="flex items-center mr-6 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="font-bold">8.5/10</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-2">
                            <span class="bg-gray-800 px-3 py-1 rounded-full text-sm">Animation</span>
                            <span class="bg-gray-800 px-3 py-1 rounded-full text-sm">Aventure</span>
                            <span class="bg-gray-800 px-3 py-1 rounded-full text-sm">Fantaisie</span>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 mb-8 text-lg">
                        Un court métrage d'animation qui suit l'histoire d'une jeune fille nommée Sintel qui recherche un bébé dragon qu'elle appelle Scales. Sintel a sauvé Scales après avoir trouvé le petit dragon blessé et l'a soigné jusqu'à ce qu'il retrouve sa santé. Les deux sont devenus les meilleurs amis, mais un jour, Scales a été enlevé par un dragon adulte. Sintel part alors à la recherche de son ami, sans se douter des surprises qui l'attendent.
                    </p>
                    
                    <div class="flex flex-wrap gap-4 mb-8">
                        <button class="bg-cinema-gold text-cinema-dark px-6 py-3 rounded-md hover:bg-yellow-400 transition-colors font-semibold flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Voir la bande-annonce
                        </button>
                        <button class="border-2 border-cinema-gold text-cinema-gold px-6 py-3 rounded-md hover:bg-cinema-gold hover:text-cinema-dark transition-colors font-semibold flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Ajouter à ma liste
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabs Navigation -->
    <section class="bg-gray-900 sticky top-0 z-20 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex overflow-x-auto py-4 scrollbar-hide">
                <a href="#about" class="text-cinema-gold border-b-2 border-cinema-gold px-4 py-2 font-medium whitespace-nowrap">À propos</a>
                <a href="#sessions" class="text-gray-400 hover:text-white px-4 py-2 font-medium whitespace-nowrap">Séances</a>
                <a href="#cast" class="text-gray-400 hover:text-white px-4 py-2 font-medium whitespace-nowrap">Distribution</a>
                <a href="#reviews" class="text-gray-400 hover:text-white px-4 py-2 font-medium whitespace-nowrap">Critiques</a>
                <a href="#similar" class="text-gray-400 hover:text-white px-4 py-2 font-medium whitespace-nowrap">Films similaires</a>
            </nav>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-cinema-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2">
                    <h2 class="text-2xl font-bold mb-6">Synopsis</h2>
                    <p class="text-gray-300 mb-8">
                        Sintel est un court métrage d'animation en 3D réalisé par le studio Blender Foundation. L'histoire suit une jeune fille nommée Sintel qui vit seule dans un monde médiéval fantastique. Un jour, elle trouve un bébé dragon blessé qu'elle nomme Scales. Après l'avoir soigné, ils deviennent inséparables.
                    </p>
                    <p class="text-gray-300 mb-8">
                        Cependant, leur bonheur est de courte durée lorsqu'un dragon adulte enlève Scales. Déterminée à retrouver son ami, Sintel entreprend un long et périlleux voyage à travers des montagnes enneigées, des déserts arides et des forêts mystérieuses.
                    </p>
                    <p class="text-gray-300">
                        Au cours de son périple, elle rencontre un vieux chasseur de dragons qui lui apprend à combattre. Finalement, Sintel retrouve Scales, mais elle fait une découverte déchirante qui remet en question tout ce qu'elle croyait savoir sur son ami et sur elle-même.
                    </p>

                    <div class="mt-12">
                        <h2 class="text-2xl font-bold mb-6">Détails techniques</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <h3 class="text-lg font-semibold mb-3">Production</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li><span class="text-gray-500">Réalisateur:</span> Colin Levy</li>
                                    <li><span class="text-gray-500">Scénariste:</span> Martin Lodewijk</li>
                                    <li><span class="text-gray-500">Studio:</span> Blender Foundation</li>
                                    <li><span class="text-gray-500">Date de sortie:</span> 27 septembre 2010</li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-3">Technique</h3>
                                <ul class="space-y-2 text-gray-300">
                                    <li><span class="text-gray-500">Durée:</span> 15 minutes</li>
                                    <li><span class="text-gray-500">Format:</span> Animation 3D</li>
                                    <li><span class="text-gray-500">Langue:</span> Anglais</li>
                                    <li><span class="text-gray-500">Budget:</span> 400 000 €</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-gray-900/50 p-6 rounded-xl mb-8">
                        <h3 class="text-lg font-semibold mb-4">Informations</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <span class="block text-gray-500">Date de sortie</span>
                                    <span>27 septembre 2010</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <span class="block text-gray-500">Durée</span>
                                    <span>15 minutes</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                </svg>
                                <div>
                                    <span class="block text-gray-500">Langue</span>
                                    <span>Anglais</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                </svg>
                                <div>
                                    <span class="block text-gray-500">Format</span>
                                    <span>Animation 3D</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-900/50 p-6 rounded-xl">
                        <h3 class="text-lg font-semibold mb-4">Récompenses</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <span>Meilleur court métrage d'animation</span>
                                    <span class="block text-gray-500">Festival du Film d'Animation, 2011</span>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cinema-gold mr-3 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <span>Prix spécial du jury</span>
                                    <span class="block text-gray-500">Siggraph, 2011</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sessions Section -->
    <section id="sessions" class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-8">Séances disponibles</h2>
            
            <!-- Date Selection -->
            <div class="mb-8">
                <div class="flex justify-between items-center overflow-x-auto pb-4">
                    <button class="date-button active flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                        <span class="text-2xl font-bold">13</span>
                        <span class="text-sm">MARS</span>
                    </button>
                    <button class="date-button flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                        <span class="text-2xl font-bold">14</span>
                        <span class="text-sm">MARS</span>
                    </button>
                    <button class="date-button flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                        <span class="text-2xl font-bold">15</span>
                        <span class="text-sm">MARS</span>
                    </button>
                    <button class="date-button flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                        <span class="text-2xl font-bold">16</span>
                        <span class="text-sm">MARS</span>
                    </button>
                    <button class="date-button flex flex-col items-center p-4 rounded-lg min-w-[100px]">
                        <span class="text-2xl font-bold">17</span>
                        <span class="text-sm">MARS</span>
                    </button>
                </div>
            </div>
            
            <!-- Sessions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Session 1 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold">13:00</h3>
                                <p class="text-gray-400">Salle 1 - Standard</p>
                            </div>
                            <span class="bg-green-900/30 text-green-400 px-2 py-1 rounded text-sm">Disponible</span>
                        </div>
                        <div class="flex items-center text-gray-400 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <span>Version originale sous-titrée</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-lg font-bold">85 د.م</span>
                                <span class="text-gray-400 text-sm"> / personne</span>
                            </div>
                            <button class="bg-cinema-gold text-cinema-dark px-4 py-2 rounded-md hover:bg-yellow-400 transition-colors font-semibold">
                                Réserver
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Session 2 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold">15:30</h3>
                                <p class="text-gray-400">Salle 3 - Premium</p>
                            </div>
                            <span class="bg-yellow-900/30 text-yellow-400 px-2 py-1 rounded text-sm">Places limitées</span>
                        </div>
                        <div class="flex items-center text-gray-400 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <span>Version française</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-lg font-bold">110 د.م</span>
                                <span class="text-gray-400 text-sm"> / personne</span>
                            </div>
                            <button class="bg-cinema-gold text-cinema-dark px-4 py-2 rounded-md hover:bg-yellow-400 transition-colors font-semibold">
                                Réserver
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Session 3 -->
                <div class="bg-gray-800 rounded-xl overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold">20:15</h3>
                                <p class="text-gray-400">Salle 2 - Standard</p>
                            </div>
                            <span class="bg-green-900/30 text-green-400 px-2 py-1 rounded text-sm">Disponible</span>
                        </div>
                        <div class="flex items-center text-gray-400 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                            <span>Version originale sous-titrée</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-lg font-bold">85 د.م</span>
                                <span class="text-gray-400 text-sm"> / personne</span>
                            </div>
                            <button class="bg-cinema-gold text-cinema-dark px-4 py-2 rounded-md hover:bg-yellow-400 transition-colors font-semibold">
                                Réserver
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cast Section -->
    <section id="cast" class="py-16 bg-cinema-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-8">Distribution</h2>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                <!-- Cast Member 1 -->
                <div class="bg-gray-900/50 rounded-lg overflow-hidden">
                    <img src="/placeholder.svg?height=200&width=150" alt="Halina Reijn" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Halina Reijn</h3>
                        <p class="text-gray-400 text-sm">Sintel (voix)</p>
                    </div>
                </div>
                
                <!-- Cast Member 2 -->
                <div class="bg-gray-900/50 rounded-lg overflow-hidden">
                    <img src="/placeholder.svg?height=200&width=150" alt="Thom Hoffman" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Thom Hoffman</h3>
                        <p class="text-gray-400 text-sm">Shaman (voix)</p>
                    </div>
                </div>
                
                <!-- Director -->
                <div class="bg-gray-900/50 rounded-lg overflow-hidden">
                    <img src="/placeholder.svg?height=200&width=150" alt="Colin Levy" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Colin Levy</h3>
                        <p class="text-gray-400 text-sm">Réalisateur</p>
                    </div>
                </div>
                
                <!-- Writer -->
                <div class="bg-gray-900/50 rounded-lg overflow-hidden">
                    <img src="/placeholder.svg?height=200&width=150" alt="Martin Lodewijk" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Martin Lodewijk</h3>
                        <p class="text-gray-400 text-sm">Scénariste</p>
                    </div>
                </div>
                
                <!-- Producer -->
                <div class="bg-gray-900/50 rounded-lg overflow-hidden">
                    <img src="/placeholder.svg?height=200&width=150" alt="Ton Roosendaal" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Ton Roosendaal</h3>
                        <p class="text-gray-400 text-sm">Producteur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold">Critiques</h2>
                <button class="text-cinema-gold hover:underline font-semibold flex items-center">
                    Ajouter une critique
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
            
            <div class="space-y-6">
                <!-- Review 1 -->
                <div class="bg-gray-800 rounded-xl p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-700 mr-4 overflow-hidden">
                                <img src="/placeholder.svg?height=50&width=50" alt="User" class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <h3 class="font-semibold">Sophie Martin</h3>
                                <div class="flex items-center">
                                    <div class="flex text-cinema-gold">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-400 text-sm ml-2">il y a 2 jours</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300">
                        Une animation époustouflante et une histoire touchante. Ce court métrage m'a vraiment émue, surtout la fin qui est à la fois belle et déchirante. La qualité visuelle est impressionnante pour un projet open source.
                    </p>
                </div>
                
                <!-- Review 2 -->
                <div class="bg-gray-800 rounded-xl p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-gray-700 mr-4 overflow-hidden">
                                <img src="/placeholder.svg?height=50&width=50" alt="User" class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <h3 class="font-semibold">Thomas Dubois</h3>
                                <div class="flex items-center">
                                    <div class="flex text-cinema-gold">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-400 text-sm ml-2">il y a 1 semaine</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300">
                        Un chef-d'œuvre technique qui montre ce qu'on peut faire avec des logiciels libres comme Blender. L'histoire est simple mais efficace, et les paysages sont magnifiques. Je recommande vivement ce court métrage à tous les amateurs d'animation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Movies Section -->
    <section id="similar" class="py-16 bg-cinema-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-8">Films similaires</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Similar Movie 1 -->
                <div class="bg-gray-900/50 rounded-lg overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="/placeholder.svg?height=300&width=200" alt="Big Buck Bunny" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4 w-full">
                                <button class="w-full bg-cinema-gold text-cinema-dark py-2 rounded-md font-semibold">Voir les détails</button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Big Buck Bunny</h3>
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-cinema-gold mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-sm">8.1/10</span>
                        </div>
                        <p class="text-gray-400 text-sm">Animation, Comédie</p>
                    </div>
                </div>
                
                <!-- Similar Movie 2 -->
                <div class="bg-gray-900/50 rounded-lg overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="/placeholder.svg?height=300&width=200" alt="Tears of Steel" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4 w-full">
                                <button class="w-full bg-cinema-gold text-cinema-dark py-2 rounded-md font-semibold">Voir les détails</button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Tears of Steel</h3>
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-cinema-gold mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-sm">7.8/10</span>
                        </div>
                        <p class="text-gray-400 text-sm">Science Fiction, Drame</p>
                    </div>
                </div>
                
                <!-- Similar Movie 3 -->
                <div class="bg-gray-900/50 rounded-lg overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="/placeholder.svg?height=300&width=200" alt="Cosmos Laundromat" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4 w-full">
                                <button class="w-full bg-cinema-gold text-cinema-dark py-2 rounded-md font-semibold">Voir les détails</button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Cosmos Laundromat</h3>
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-cinema-gold mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-sm">8.3/10</span>
                        </div>
                        <p class="text-gray-400 text-sm">Animation, Fantaisie</p>
                    </div>
                </div>
                
                <!-- Similar Movie 4 -->
                <div class="bg-gray-900/50 rounded-lg overflow-hidden group">
                    <div class="relative overflow-hidden">
                        <img src="/placeholder.svg?height=300&width=200" alt="Agent 327" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-4 w-full">
                                <button class="w-full bg-cinema-gold text-cinema-dark py-2 rounded-md font-semibold">Voir les détails</button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Agent 327</h3>
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-cinema-gold mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-sm">7.9/10</span>
                        </div>
                        <p class="text-gray-400 text-sm">Action, Comédie</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold text-cinema-gold mb-4">CinéMax</h3>
                    <p class="text-gray-400">
                        Votre destination cinématographique par excellence, où chaque film devient une expérience inoubliable.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Liens rapides</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-cinema-gold transition-colors">Accueil</a></li>
                        <li><a href="#" class="hover:text-cinema-gold transition-colors">Films</a></li>
                        <li><a href="#" class="hover:text-cinema-gold transition-colors">Événements</a></li>
                        <li><a href="#" class="hover:text-cinema-gold transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Informations</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-cinema-gold transition-colors">À propos</a></li>
                        <li><a href="#" class="hover:text-cinema-gold transition-colors">Tarifs</a></li>
                        <li>  class="hover:text-cinema-gold transition-colors">Tarifs</a></li>
                        <li><a href="#" class="hover:text-cinema-gold transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-cinema-gold transition-colors">Conditions d'utilisation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-cinema-gold transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-cinema-gold transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-cinema-gold transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-cinema-gold transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-400 text-sm">
                <p>&copy; 2023 CinéMax. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Date selection
            const dateButtons = document.querySelectorAll('.date-button');
            
            dateButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    dateButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-cinema-gold', 'text-cinema-dark');
                        btn.classList.add('bg-transparent', 'text-white');
                    });
                    
                    // Add active class to clicked button
                    this.classList.add('active', 'bg-cinema-gold', 'text-cinema-dark');
                    this.classList.remove('bg-transparent', 'text-white');
                });
            });
            
            // Initialize the first date button as active
            if (dateButtons.length > 0) {
                dateButtons[0].classList.add('bg-cinema-gold', 'text-cinema-dark');
                dateButtons[0].classList.remove('bg-transparent', 'text-white');
            }
        });
    </script>
</body>
</html>