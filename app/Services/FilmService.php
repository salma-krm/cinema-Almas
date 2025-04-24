<?php

namespace App\Services;

use App\Exceptions\CustomException\InCompleteProcess;
use App\Models\Film;
use App\Repositories\Interfaces\IActeur;
use App\Repositories\Interfaces\IFilm;
use App\Repositories\Interfaces\IFilmRepository;
use App\Repositories\Interfaces\IGenre;
use App\Services\Interfaces\IFilmService;


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
            throw new InCompleteProcess('A film with this name already exists.');
        }

        if (isset($data['photo']) && $data['photo']) {
            $photo = $data['photo'];
            $extension = $photo->getClientOriginalExtension();
            $fileName = 'film_' . time() . '.' . $extension;
            $path = $photo->storeAs('films', $fileName, 'public');
            $data['photo']=$path; 
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
        $film->video = $data['video'];
        $film->photo = $data['photo'] ;
       
        if (!isset($data['genre']) || !is_numeric($data['genre'])) {
            throw new InCompleteProcess("Genre ID is required and must be numeric.");
        }


        $genre = $this->genreRepo->getById($data['genre']);
        if (!$genre) {
            throw new InCompleteProcess("Genre does not exist.");
        }

        $film->genre()->associate($genre);


        $film->save();


        if (isset($data['cast']) && is_array($data['cast'])) {
            foreach ($data['cast'] as $acteurId) {
                $acteur = $this->acteurRepo->getById($acteurId);

                if ($acteur) {
                    $film->acteurs()->attach($acteur->id); 
                } else {
                    throw new InCompleteProcess("Actor does not exist: ID $acteurId");
                }
            }
        }

       
    }



    public function update($data)
    {
        
        $film = $this->repo->findById($data['id']);
        if (!$film) {
            throw new InCompleteProcess("Film introuvable.");
        }
    
       
        $existingFilm = $this->repo->findByName($data['title']);
        if ($existingFilm && $existingFilm->id !== $film->id) {
            throw new InCompleteProcess('A film with this name already exists.');
        }
    
        
        
            if ($film->photo && file_exists(storage_path('app/public/' . $film->photo))) {
            unlink(storage_path('app/public/' . $film->photo));
            }
            $photo = $data['photo'];
            $extension = $photo->getClientOriginalExtension();
            $fileName = 'film_' . time() . '.' . $extension;
            $path = $photo->storeAs('films', $fileName, 'public');
            $data['photo'] = $path;
            
           
        
        
        $film->title = $data['title'];
        $film->description = $data['description'];
        $film->date_sortie = $data['date_sortie'];
        $film->resume = $data['resume'];
        $film->budget = $data['budget'];
        $film->realisateur = $data['realisateur'];
        $film->duree = $data['duree'];
        $film->langue = $data['langue'];
        $film->photo = $path;
        $film->age_restriction = $data['age_restriction'];
        $film->video = $data['video'];
        $genre = $this->genreRepo->getById($data['genre']);
        if (!$genre) {
            throw new InCompleteProcess("Genre does not exist.");
        }
        $film->genre()->associate($genre);
    
       
        $film->save();
        if (isset($data['cast'])) {
            $film->acteurs()->detach();
            foreach ($data['cast'] as $acteurId) {
                $acteur = $this->acteurRepo->getById($acteurId);
                if ($acteur) {
                    $film->acteurs()->attach($acteur->id); 
                } else {
                    throw new InCompleteProcess("Actor does not exist: ID $acteurId");
                }
            }
        }
    
        return $film;
    }
    public function delete($id)
    {
        $deleted = $this->repo->delete($id);
        if ($deleted) {
            throw new InCompleteProcess("Film introuvable.");
        }
        return true;
    }

    public function findByName($name) {

    return $this->repo->findByName($name);
    }
    public function getById($id){
        
    return $this->repo->findById($id);
    }
    public function getdetailfilm($id){
        return $this->repo->getdetailfilm($id);
    }
}

