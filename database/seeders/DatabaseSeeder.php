<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seedRoles();
        $this->seedGenres();
        $this->seedActeurs();
        $this->seedFilms();
        $this->seedSalles();
        $this->seedUsers();
        $this->seedActeurFilms();
        $this->seedSeances();
        $this->seedReservations();
        $this->seedPaiements();
        $this->seedAvis();
    }

    private function seedRoles()
    {
        DB::table('roles')->insert([
            [
                'id' => 1, 
                'name' => 'client',
                'created_at' => '2025-04-22 08:53:43',
                'updated_at' => '2025-04-22 08:53:43'
            ],
            [
                'id' => 2, 
                'name' => 'admin',
                'created_at' => '2025-04-28 07:26:24',
                'updated_at' => '2025-04-28 07:26:24'
            ],
        ]);
    }

    private function seedGenres()
    {
        DB::table('genres')->insert([
            [
                'id' => 1,
                'name' => 'comedian',
                'created_at' => '2025-04-21 21:11:25',
                'updated_at' => '2025-04-21 21:11:25'
            ],
            [
                'id' => 2,
                'name' => 'romantique',
                'created_at' => '2025-04-21 21:11:41',
                'updated_at' => '2025-04-21 21:11:41'
            ],
            [
                'id' => 3,
                'name' => 'action',
                'created_at' => '2025-04-21 21:12:21',
                'updated_at' => '2025-04-21 21:12:21'
            ],
            [
                'id' => 5,
                'name' => 'drama',
                'created_at' => '2025-04-28 07:27:21',
                'updated_at' => '2025-04-28 07:27:21'
            ],
        ]);
    }

    private function seedActeurs()
    {
        DB::table('acteurs')->insert([
            [
                'id' => 2,
                'name' => 'Leonardo DiCaprio',
                'description' => 'Acteur et producteur américain',
                'photo' => 'acteurs/acteur_1745273692.webp',
                'created_at' => '2025-04-21 21:14:52',
                'updated_at' => '2025-04-23 08:28:11'
            ],
            [
                'id' => 3,
                'name' => 'Cillian Murphy',
                'description' => 'Il a commencé sa carrière en tant que musicien de rock. Il a ensuite joué d\'abord au théâtre puis dans des courts métrages et des films indépendants à la fin des années 1990.',
                'photo' => 'acteurs/acteur_1745273785.webp',
                'created_at' => '2025-04-21 21:16:25',
                'updated_at' => '2025-04-23 08:30:05'
            ],
            [
                'id' => 4,
                'name' => 'Adrien Brody',
                'description' => 'Né et élevé à New York, Adrien Brody est le fils de la photographe Silvia Blachy.',
                'photo' => 'acteurs/acteur_1745363821.webp',
                'created_at' => '2025-04-22 22:17:01',
                'updated_at' => '2025-04-22 22:17:01'
            ],
            [
                'id' => 5,
                'name' => 'RobertPattinson',
                'description' => 'The Bong Joon-ho directorial Mickey 17 is surreal, witty and topical. Read our take on the Robert Pattinson-starrer sci-fi here.',
                'photo' => 'acteurs/acteur_1745363901.jpg',
                'created_at' => '2025-04-22 22:18:21',
                'updated_at' => '2025-04-22 22:18:21'
            ],
            [
                'id' => 6,
                'name' => 'MerylStreep',
                'description' => 'née le 22 juin 1949 à Summit (New Jersey, États-Unis), est une actrice américaine.',
                'photo' => 'acteurs/acteur_1745404998.webp',
                'created_at' => '2025-04-23 09:43:18',
                'updated_at' => '2025-04-23 09:43:18'
            ],
            [
                'id' => 7,
                'name' => 'Halina Reijn',
                'description' => 'Lana, a Dutch secondary school teacher, struggles to handle Benny, her new intimidating 17-year-old student and his dark attraction.',
                'photo' => 'acteurs/acteur_1745410881.jpg',
                'created_at' => '2025-04-23 11:21:22',
                'updated_at' => '2025-04-23 11:21:22'
            ],
            [
                'id' => 8,
                'name' => 'Thom Hoffman',
                'description' => 'Acteur néerlandais',
                'photo' => 'acteurs/acteur_1745410929.webp',
                'created_at' => '2025-04-23 11:22:09',
                'updated_at' => '2025-04-23 11:22:09'
            ],
            [
                'id' => 9,
                'name' => 'Andrew Burnap',
                'description' => 'Andrew Burnap (born March 5, 1991) is an American actor. Known for his performances on stage, he began his professional stage career in the Public',
                'photo' => 'acteurs/acteur_1745413391.webp',
                'created_at' => '2025-04-23 12:03:12',
                'updated_at' => '2025-04-23 12:03:12'
            ],
            [
                'id' => 10,
                'name' => 'Gal Gadot',
                'description' => 'Gal Gadot (en hébreu : גל גדות /ˈɡal ɡaˈdot/[1]) est une actrice, productrice et mannequin israélienne, née le 30 avril 1985 à Petah Tikva en Israël.',
                'photo' => 'acteurs/acteur_1745413448.webp',
                'created_at' => '2025-04-23 12:04:08',
                'updated_at' => '2025-04-23 12:04:08'
            ],
            [
                'id' => 11,
                'name' => 'Ansu Kabia',
                'description' => 'Ansu Kabia is a British actor. He attended the Drama Centre London and was a former member of the Royal Shakespeare Company Ensemble',
                'photo' => 'acteurs/acteur_1745413602.webp',
                'created_at' => '2025-04-23 12:06:42',
                'updated_at' => '2025-04-23 12:06:42'
            ],
            [
                'id' => 12,
                'name' => 'Jayme Lawson',
                'description' => 'Jayme Lawson, née le 19 septembre 1997, à Washington, aux États-Unis, est une actrice américaine.',
                'photo' => 'acteurs/acteur_1745758202.jpg',
                'created_at' => '2025-04-27 11:50:02',
                'updated_at' => '2025-04-27 11:50:02'
            ],
            [
                'id' => 13,
                'name' => 'Hailee Steinfeld',
                'description' => 'Hailee Steinfeld, née le 11 décembre 1996 à Los Angeles, dans le quartier de Tarzana, est une actrice, chanteuse et autrice-compositrice-interprète américaine.',
                'photo' => 'acteurs/acteur_1745758250.webp',
                'created_at' => '2025-04-27 11:50:50',
                'updated_at' => '2025-04-27 11:50:50'
            ],
            [
                'id' => 14,
                'name' => 'Michael B. Jordan',
                'description' => 'Michael B. Jordan, né le 9 février 1987 à Santa Ana, en Californie, est un acteur, réalisateur et producteur américain.',
                'photo' => 'acteurs/acteur_1745758353.jpg',
                'created_at' => '2025-04-27 11:52:33',
                'updated_at' => '2025-04-27 11:52:33'
            ],
        ]);
    }

    private function seedFilms()
    {
        DB::table('films')->insert([
            [
                'id' => 5,
                'title' => 'Mickey 17',
                'description' => 'Un film de science-fiction réalisé par Bong Joon Ho, où Robert Pattinson incarne un clone qui se régénère après chaque mort lors d\'une mission de colonisation.',
                'date_sortie' => '2025-03-05',
                'resume' => 'Mickey, un clone sur une mission spatiale, doit affronter des dilemmes moraux et des enjeux éthiques liés à sa condition de clone.',
                'budget' => 41.00,
                'realisateur' => 'Bong Joon Ho',
                'duree' => '02:30:10',
                'langue' => 'Anglais',
                'photo' => 'films/film_680a9ab29f6c4.jpg',
                'age_restriction' => '12+',
                'video' => 'https://www.youtube.com/watch?v=osYpGSz_0i4',
                'genre_id' => 2,
                'created_at' => '2025-04-21 23:41:13',
                'updated_at' => '2025-04-24 19:10:26'
            ],
            [
                'id' => 6,
                'title' => 'The Brutalist',
                'description' => 'Un drame historique réalisé par Brady Corbet sur un architecte hongrois-juif qui lutte pour réaliser le rêve américain après l\'Holocauste.',
                'date_sortie' => '2024-09-10',
                'resume' => 'László Toth, un architecte hongrois-juif, lutte pour trouver sa place dans le monde après avoir survécu à l\'Holocauste.',
                'budget' => 50.00,
                'realisateur' => 'Brady Corbet',
                'duree' => '02:12:16',
                'langue' => 'Anglais',
                'photo' => 'films/film_1745404619.jpg',
                'age_restriction' => '16+',
                'video' => 'https://www.youtube.com/watch?v=GdRXPAHIEW4&t=4s',
                'genre_id' => 3,
                'created_at' => '2025-04-21 23:41:13',
                'updated_at' => '2025-04-23 09:36:59'
            ],
            [
                'id' => 10,
                'title' => 'Sintel',
                'description' => 'Un film open source épique produit par la Blender Foundation.',
                'date_sortie' => '2010-09-27',
                'resume' => 'Sintel est une jeune fille qui part à la recherche d\'un bébé dragon qu\'elle a élevé, et découvre une vérité bouleversante.',
                'budget' => 40.00,
                'realisateur' => 'Colin Levy',
                'duree' => '01:30:02',
                'langue' => 'Anglais',
                'photo' => 'films/film_1745410979.jpg',
                'age_restriction' => '+16',
                'video' => 'https://www.youtube.com/watch?v=HOfdboHvshg',
                'genre_id' => 1,
                'created_at' => '2025-04-22 10:14:50',
                'updated_at' => '2025-04-23 11:22:59'
            ],
            [
                'id' => 15,
                'title' => 'Casse-Noisette',
                'description' => 'est un film de Noël fantastique américain réalisé par Lasse Hallström et Joe Johnston, et sorti en 2018',
                'date_sortie' => '2018-01-13',
                'resume' => 'Tempore nihil hic m',
                'budget' => 90.00,
                'realisateur' => 'Eligendi proident n',
                'duree' => '01:30:06',
                'langue' => 'Perferendis elit ut',
                'photo' => 'films/film_1745413702.jpeg',
                'age_restriction' => '+12',
                'video' => 'https://www.youtube.com/watch?v=CT4eCDZgkOw',
                'genre_id' => 2,
                'created_at' => '2025-04-22 17:02:51',
                'updated_at' => '2025-04-23 12:08:22'
            ],
            [
                'id' => 16,
                'title' => 'Blanche Neige',
                'description' => '"Blanche-Neige" des studios Disney est une nouvelle version du classique de 1937 en prises de vues réelles. Avec Rachel Zegler dans le rôle principal et Gal Gadot dans celui de sa belle-mère',
                'date_sortie' => '2025-03-25',
                'resume' => 'Consequatur Sit ve',
                'budget' => 21.12,
                'realisateur' => 'Est dolores excepte',
                'duree' => '01:31:06',
                'langue' => 'Quasi eligendi amet',
                'photo' => 'films/film_1745363416.jpeg',
                'age_restriction' => '+10',
                'video' => 'https://www.youtube.com/watch?v=YCdykV32pGQ',
                'genre_id' => 1,
                'created_at' => '2025-04-22 17:06:05',
                'updated_at' => '2025-04-28 07:22:24'
            ]
        ]);
    }

    private function seedSalles()
    {
        DB::table('salles')->insert([
            [
                'id' => 1,
                'name' => 'Cameron',
                'capacite' => 4,
                'status' => 'disponible',
                'maintenance_notes' => 'bon qualite de chaises',
                'type' => 'premium',
                'description' => 'est un salle clamitise',
                'equipment' => '3d',
                'created_at' => '2025-04-22 16:35:31',
                'updated_at' => '2025-04-22 16:35:47'
            ],
            [
                'id' => 2,
                'name' => 'Dickson',
                'capacite' => 28,
                'status' => 'en seance',
                'maintenance_notes' => 'aucun',
                'type' => 'premium',
                'description' => 'est \'sun premium VIP',
                'equipment' => 'reclining',
                'created_at' => '2025-04-22 16:36:38',
                'updated_at' => '2025-04-22 16:36:38'
            ],
            [
                'id' => 3,
                'name' => 'Claire Trujillo',
                'capacite' => 76,
                'status' => 'en seance',
                'maintenance_notes' => 'Et sunt et possimus',
                'type' => '3d',
                'description' => 'Odio doloremque mini',
                'equipment' => '3d',
                'created_at' => '2025-04-23 17:56:26',
                'updated_at' => '2025-04-23 17:56:26'
            ],
            [
                'id' => 4,
                'name' => 'Lucas Bailey',
                'capacite' => 138,
                'status' => 'en seance',
                'maintenance_notes' => 'Inventore quia sint',
                'type' => 'standard',
                'description' => 'Saepe dolores molest',
                'equipment' => 'surround',
                'created_at' => '2025-04-23 18:00:24',
                'updated_at' => '2025-04-23 18:00:24'
            ],
        ]);
    }

    private function seedUsers()
    {
        DB::table('users')->insert([
            [
                'id' => 11,
                'name' => 'Tayeb SOUINI',
                'email' => 'Tayeb@gmail.com',
                'email_verified_at' => null,
                'photo' => 'users/user_1745844462.jpg',
                'password' => '$2y$10$2UNu3bFyrXB0S0aswGINgOUKtvWAV9Nxr7NvyEbRf1WizvQIdQliC',
                'roles_id' => 1,
                'remember_token' => null,
                'created_at' => '2025-04-28 11:46:49',
                'updated_at' => '2025-04-28 11:47:42'
            ],
            [
                'id' => 12,
                'name' => 'Admin User',
                'email' => 'admin@cinema.com',
                'email_verified_at' => now(),
                'photo' => null,
                'password' => Hash::make('admin123'),
                'roles_id' => 2,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Client User',
                'email' => 'client@cinema.com',
                'email_verified_at' => now(),
                'photo' => null,
                'password' => Hash::make('client123'),
                'roles_id' => 1,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    private function seedActeurFilms()
    {
        // Sample of the acteur_films relationships
        $acteurFilmsData = [
            ['id' => 1, 'acteur_id' => 2, 'film_id' => 5, 'created_at' => null, 'updated_at' => null],
            ['id' => 2, 'acteur_id' => 3, 'film_id' => 5, 'created_at' => null, 'updated_at' => null],
            ['id' => 3, 'acteur_id' => 4, 'film_id' => 6, 'created_at' => null, 'updated_at' => null],
            ['id' => 4, 'acteur_id' => 5, 'film_id' => 5, 'created_at' => null, 'updated_at' => null],
            ['id' => 5, 'acteur_id' => 6, 'film_id' => 10, 'created_at' => null, 'updated_at' => null],
            ['id' => 6, 'acteur_id' => 7, 'film_id' => 15, 'created_at' => null, 'updated_at' => null],
            ['id' => 7, 'acteur_id' => 8, 'film_id' => 16, 'created_at' => null, 'updated_at' => null],
            ['id' => 8, 'acteur_id' => 9, 'film_id' => 25, 'created_at' => null, 'updated_at' => null],
            ['id' => 9, 'acteur_id' => 10, 'film_id' => 16, 'created_at' => null, 'updated_at' => null],
            ['id' => 10, 'acteur_id' => 11, 'film_id' => 6, 'created_at' => null, 'updated_at' => null],
            ['id' => 11, 'acteur_id' => 12, 'film_id' => 25, 'created_at' => null, 'updated_at' => null],
            ['id' => 12, 'acteur_id' => 13, 'film_id' => 10, 'created_at' => null, 'updated_at' => null],
            ['id' => 13, 'acteur_id' => 14, 'film_id' => 25, 'created_at' => null, 'updated_at' => null],
        ];

        DB::table('acteur_films')->insert($acteurFilmsData);
    }

    private function seedSeances()
    {
        DB::table('seances')->insert([
            [
                'id' => 2,
                'horaire' => '2017-01-25 12:00:00',
                'film_id' => 10,
                'salle_id' => 1,
                'rest_ticket' => null,
                'created_at' => '2025-04-23 17:55:05',
                'updated_at' => '2025-04-24 08:34:11'
            ],
            [
                'id' => 3,
                'horaire' => '2025-04-25 20:11:00',
                'film_id' => 5,
                'salle_id' => 1,
                'rest_ticket' => null,
                'created_at' => '2025-04-23 18:11:28',
                'updated_at' => '2025-04-23 18:11:28'
            ],
            [
                'id' => 4,
                'horaire' => '1976-11-22 07:40:00',
                'film_id' => 5,
                'salle_id' => 1,
                'rest_ticket' => null,
                'created_at' => '2025-04-23 18:11:40',
                'updated_at' => '2025-04-23 18:11:40'
            ],
            [
                'id' => 5,
                'horaire' => '2025-04-26 15:46:00',
                'film_id' => 10,
                'salle_id' => 4,
                'rest_ticket' => null,
                'created_at' => '2025-04-25 13:46:56',
                'updated_at' => '2025-04-25 13:46:56'
            ],
            [
                'id' => 6,
                'horaire' => '2025-05-03 16:59:00',
                'film_id' => 6,
                'salle_id' => 4,
                'rest_ticket' => null,
                'created_at' => '2025-04-25 13:59:02',
                'updated_at' => '2025-04-25 13:59:02'
            ],
            [
                'id' => 7,
                'horaire' => '2025-05-01 18:01:00',
                'film_id' => 6,
                'salle_id' => 4,
                'rest_ticket' => null,
                'created_at' => '2025-04-25 13:59:20',
                'updated_at' => '2025-04-25 13:59:20'
            ],
            [
                'id' => 8,
                'horaire' => '2025-04-30 15:59:00',
                'film_id' => 15,
                'salle_id' => 4,
                'rest_ticket' => null,
                'created_at' => '2025-04-25 13:59:43',
                'updated_at' => '2025-04-25 13:59:43'
            ],
        ]);
    }

    private function seedReservations()
    {
        DB::table('reservations')->insert([
            [
                'id' => 17,
                'name' => null,
                'quantite' => 2,
                'status' => 'en cours',
                'user_id' => 5,
                'seance_id' => 4,
                'created_at' => '2025-04-28 10:59:23',
                'updated_at' => '2025-04-28 10:59:23'
            ],
            [
                'id' => 18,
                'name' => null,
                'quantite' => 3,
                'status' => 'en cours',
                'user_id' => 5,
                'seance_id' => 6,
                'created_at' => '2025-04-28 18:35:28',
                'updated_at' => '2025-04-28 18:35:28'
            ],
        ]);
    }

    private function seedPaiements()
    {
        DB::table('paiements')->insert([
            [
                'id' => 1,
                'montant' => 82,
                'statut' => 'payer',
                'reservation_id' => 17,
                'created_at' => '2025-04-28 10:59:23',
                'updated_at' => '2025-04-28 10:59:23'
            ],
            [
                'id' => 2,
                'montant' => 150,
                'statut' => 'payer',
                'reservation_id' => 18,
                'created_at' => '2025-04-28 18:35:28',
                'updated_at' => '2025-04-28 18:35:28'
            ],
        ]);
    }

    private function seedAvis()
    {
        DB::table('avis')->insert([
            [
                'id' => 19,
                'description' => 'kjhgfdxcbvn,;kjh,g',
                'rating' => 5.00,
                'user_id' => 12,
                'film_id' => 5,
                'created_at' => '2025-05-06 09:27:42',
                'updated_at' => '2025-05-06 09:27:42'
            ],
            [
                'id' => 20,
                'description' => 'Excellent film, je recommande vivement !',
                'rating' => 4.5,
                'user_id' => 5,
                'film_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 21,
                'description' => 'Un chef-d\'œuvre du cinéma contemporain.',
                'rating' => 5.0,
                'user_id' => 11,
                'film_id' => 10,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5)
            ]
        ]);
    }
}