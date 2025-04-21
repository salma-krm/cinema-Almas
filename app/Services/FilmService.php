<?php

namespace App\Services;

use App\Models\Film;
use App\Repositories\Interfaces\IActeur;
use App\Repositories\Interfaces\IFilm;
use App\Repositories\Interfaces\IFilmRepository;
use App\Repositories\Interfaces\IGenre;
use App\Services\Interfaces\IFilmService;
use Exception;

class FilmService implements IFilmService
{
    private IFilm $repo;
    private IGenre  $genreRepo;
    private IActeur $acteurRepo;

    public function __construct(IFilm $repo, IActeur $acteurRepo, IGenre $genreRepo)
    {
        $this->genreRepo = $genreRepo;
        $this->repo = $repo;
        $this->acteurRepo = $acteurRepo;
    }



    public function getAll()
    {
        return $this->repo->getAll();
    }

    public function create($data)
    {

        $existingFilm = $this->repo->findByName($data['title']);
        if ($existingFilm) {
            throw new Exception('A film with this name already exists.');
        }

        if (isset($data['photo']) && $data['photo']) {
            $photo = $data['photo'];
            $extension = $photo->getClientOriginalExtension();
            $fileName = 'film_' . time() . '.' . $extension;
            $path = $photo->storeAs('films', $fileName, 'public');
        }

        $pathvideo = null;
        if (isset($data['video']) && $data['video']) {
            $video = $data['video'];
            $extension = $video->getClientOriginalExtension();
            $fileName = 'film_video_' . time() . '.' . $extension;
            $destinationPath = public_path('videos');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
           $video->move($destinationPath, $fileName);
           
        }


        $film = new Film();
        $film->title = $data['title'];
        $film->description = $data['description'];
        $film->date_sortie = $data['date_sortie'];
        $film->resume = $data['resume'];
        $film->budget = $data['budget'];
        $film->realisateur = $data['realisateur'];
        $film->duree = $data['duree'];
        $film->langue = $data['langue'];
        $film->age_restriction = $data['age_restriction'];
        $film->video = $fileName;
        $film->photo = $path ?? null;



        if (!isset($data['genre']) || !is_numeric($data['genre'])) {
            throw new Exception("Genre ID is required and must be numeric.");
        }


        $genre = $this->genreRepo->getById($data['genre']);
        if (!$genre) {
            throw new Exception("Genre does not exist.");
        }

        $film->genre()->associate($genre);


        $film->save();


        if (isset($data['cast']) && is_array($data['cast'])) {
            foreach ($data['cast'] as $acteurId) {
                $acteur = $this->acteurRepo->getById($acteurId);

                if ($acteur) {
                    $film->acteurs()->attach($acteur->id); // Make sure you're passing the ID
                } else {
                    throw new Exception("Actor does not exist: ID $acteurId");
                }
            }
        }

        // ✅ Return the film with its relationships (optional)
        return $film->load('genre', 'acteurs');
    }


    public function update($data)
    {
        $film = $this->repo->update($data);
        if (!$film) {
            throw new Exception("Film introuvable.");
        }
        return $film;
    }

    public function delete($id)
    {
        $deleted = $this->repo->delete($id);
        if (!$deleted) {
            throw new Exception("Film introuvable.");
        }
        return true;
    }
    public function findByName($name) {}
}
