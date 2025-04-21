<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Profil - CinéMax</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cinema-gold': '#fbc531',
                        'cinema-dark': '#121212',
                    }
                }
            }
        }
    </script>
    <style>
        .bg-cinema-dark {
            position: relative;
            background-color: #121212;
        }

        .bg-cinema-dark::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.15;
            pointer-events: none;
        }

        .bg-cinema-dark > * {
            position: relative;
            z-index: 1;
        }

        .movie-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .movie-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-5px);
        }

        .dashboard-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .dashboard-card:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .btn {
            padding: 12px 16px;
            border-radius: 8px;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s;
            display: block;
        }

        .btn-gold {
            background-color: #fbc531;
            color: #121212;
        }

        .btn-gold:hover {
            background-color: #e1b62d;
        }

        .btn-outline-gold {
            border: 2px solid #fbc531;
            color: #fbc531;
        }

        .btn-outline-gold:hover {
            background-color: rgba(251, 197, 49, 0.1);
        }

        .btn-danger {
            background-color: rgba(239, 68, 68, 0.2);
            color: rgb(239, 68, 68);
            border: 1px solid rgb(239, 68, 68);
        }

        .btn-danger:hover {
            background-color: rgba(239, 68, 68, 0.3);
        }

        input, select, textarea {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            width: 100%;
            transition: all 0.3s ease;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #fbc531;
            background-color: rgba(255, 255, 255, 0.08);
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #d1d5db;
            font-size: 0.875rem;
        }
    </style>
</head>
<body class="bg-cinema-dark text-white">
    <!-- Navigation Bar -->
    <nav class="bg-black/50 backdrop-blur-lg fixed w-full z-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <a href="#" class="text-cinema-gold font-bold text-xl">CinéMax</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-300 hover:text-cinema-gold">Films</a>
                    <a href="#" class="text-gray-300 hover:text-cinema-gold">Réservations</a>
                    <a href="#" class="text-gray-300 hover:text-cinema-gold">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-cinema-dark text-white min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-12">
            <!-- Page Title -->
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-white">Mon Profil</h1>
                <p class="text-gray-400">Gérez vos informations personnelles</p>
            </div>

            <!-- Main Content - Two Columns -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- User Data Column with Form -->
                <div class="dashboard-card rounded-xl shadow-lg p-6">
                    <h2 class="text-xl font-bold text-white mb-6">Mes Informations</h2>
                    
                    <form id="user-form">
                        <!-- Profile Picture -->
                        <div class="mb-8 flex flex-col items-center">
                            <div class="relative">
                                <img src="https://via.placeholder.com/150" 
                                     alt="Photo de profil" 
                                     class="w-32 h-32 rounded-full border-4 border-cinema-gold"/>
                                <button type="button" class="absolute bottom-0 right-0 bg-cinema-gold text-cinema-dark p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                            </div>
                            <span class="mt-2 text-sm text-gray-400">Cliquez pour changer votre photo</span>
                        </div>
                        
                        <!-- Personal Information - Simplified -->
                        <div class="space-y-6 mb-8">
                            <div>
                                <label for="name">Nom complet</label>
                                <input type="text" id="name" name="name" value="Jean Dupont" required>
                            </div>
                            
                            <div>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="jean.dupont@example.com" required>
                            </div>
                            
                            <!-- Password Change -->
                            <div>
                                <label for="current-password">Mot de passe actuel</label>
                                <input type="password" id="current-password" name="current-password" placeholder="••••••••">
                            </div>
                            
                            <div>
                                <label for="new-password">Nouveau mot de passe</label>
                                <input type="password" id="new-password" name="new-password" placeholder="Laissez vide pour ne pas changer">
                            </div>
                            
                            <div>
                                <label for="confirm-password">Confirmer le mot de passe</label>
                                <input type="password" id="confirm-password" name="confirm-password" placeholder="Laissez vide pour ne pas changer">
                            </div>
                        </div>
                        
                        <!-- Form Actions -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button type="submit" class="btn btn-gold hover:bg-yellow-400 flex-1">
                                Mettre à jour le profil
                            </button>
                            <button type="button" class="btn btn-danger flex-1" id="delete-account">
                                Supprimer le compte
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Favorite Movies Column -->
                <div class="dashboard-card rounded-xl shadow-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-white">Mes Films Favoris</h2>
                        <button class="px-4 py-2 bg-cinema-gold/20 text-cinema-gold rounded-md hover:bg-cinema-gold/30 transition-colors">
                            Voir tout
                        </button>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- Favorite Movie 1 -->
                        <div class="movie-card p-4 rounded-xl shadow-md">
                            <div class="flex">
                                <div class="w-20 h-28 bg-gray-700 rounded-lg mr-4 flex-shrink-0 overflow-hidden">
                                    <img src="https://via.placeholder.com/150x210" alt="Inception" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-start">
                                        <h4 class="text-white font-semibold">Inception</h4>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="text-gray-400 text-sm">Science Fiction, Action</p>
                                    <div class="flex items-center mt-1">
                                        <div class="flex text-cinema-gold">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <span class="ml-1 text-sm">5.0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Favorite Movie 2 -->
                        <div class="movie-card p-4 rounded-xl shadow-md">
                            <div class="flex">
                                <div class="w-20 h-28 bg-gray-700 rounded-lg mr-4 flex-shrink-0 overflow-hidden">
                                    <img src="https://via.placeholder.com/150x210" alt="Interstellar" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-start">
                                        <h4 class="text-white font-semibold">Interstellar</h4>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="text-gray-400 text-sm">Science Fiction, Drame</p>
                                    <div class="flex items-center mt-1">
                                        <div class="flex text-cinema-gold">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <span class="ml-1 text-sm">4.9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Favorite Movie 3 -->
                        <div class="movie-card p-4 rounded-xl shadow-md">
                            <div class="flex">
                                <div class="w-20 h-28 bg-gray-700 rounded-lg mr-4 flex-shrink-0 overflow-hidden">
                                    <img src="https://via.placeholder.com/150x210" alt="The Dark Knight" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-start">
                                        <h4 class="text-white font-semibold">The Dark Knight</h4>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="text-gray-400 text-sm">Action, Thriller</p>
                                    <div class="flex items-center mt-1">
                                        <div class="flex text-cinema-gold">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <span class="ml-1 text-sm">4.8</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Favorite Movie 4 -->
                        <div class="movie-card p-4 rounded-xl shadow-md">
                            <div class="flex">
                                <div class="w-20 h-28 bg-gray-700 rounded-lg mr-4 flex-shrink-0 overflow-hidden">
                                    <img src="https://via.placeholder.com/150x210" alt="Pulp Fiction" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex justify-between items-start">
                                        <h4 class="text-white font-semibold">Pulp Fiction</h4>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="text-gray-400 text-sm">Crime, Drame</p>
                                    <div class="flex items-center mt-1">
                                        <div class="flex text-cinema-gold">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <span class="ml-1 text-sm">4.7</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black/50 backdrop-blur-lg py-6">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <a href="#" class="text-cinema-gold font-bold text-xl">CinéMax</a>
                    <p class="text-gray-400 text-sm mt-1">Le meilleur du cinéma à portée de clic</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-cinema-gold">À propos</a>
                    <a href="#" class="text-gray-400 hover:text-cinema-gold">Conditions</a>
                    <a href="#" class="text-gray-400 hover:text-cinema-gold">Confidentialité</a>
                    <a href="#" class="text-gray-400 hover:text-cinema-gold">Contact</a>
                </div>
            </div>
            <div class="mt-6 border-t border-gray-800 pt-6 text-center text-gray-400 text-sm">
                © 2025 CinéMax. Tous droits réservés.
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form submission
            const userForm = document.getElementById('user-form');
            if (userForm) {
                userForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Here you would typically send the form data to your server
                    alert('Profil mis à jour avec succès !');
                });
            }
            
            // Delete account confirmation
            const deleteAccountBtn = document.getElementById('delete-account');
            if (deleteAccountBtn) {
                deleteAccountBtn.addEventListener('click', function() {
                    if (confirm('Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.')) {
                        // Here you would typically send a delete request to your server
                        alert('Compte supprimé avec succès.');
                        // Redirect to home page or login page
                        // window.location.href = '/';
                    }
                });
            }
            
            // Remove favorite movie
            const removeButtons = document.querySelectorAll('.movie-card button');
            removeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const movieCard = this.closest('.movie-card');
                    const movieTitle = movieCard.querySelector('h4').textContent;
                    
                    if (confirm(`Êtes-vous sûr de vouloir retirer "${movieTitle}" de vos favoris ?`)) {
                        // Here you would typically send a request to your server to remove the movie
                        movieCard.remove();
                        alert(`"${movieTitle}" a été retiré de vos favoris.`);
                    }
                });
            });
        });
    </script>
</body>
</html>