<?php

namespace App\Services;

use App\Exceptions\CustomException\InCompleteProcess;
use App\Models\Seance;
use App\Repositories\Interfaces\IFilm;
use App\Repositories\Interfaces\ISalle;
use App\Repositories\Interfaces\ISeance;
use App\Services\Interfaces\ISeanceService;

class SeanceService implements ISeanceService
{
    private ISeance $SeanceRepo;
    private IFilm $filmRepo;
    private ISalle $salleRepo;

    public function __construct(ISeance $SeanceRepo, IFilm $filmRepo, ISalle $salleRepo)
    {
        $this->SeanceRepo = $SeanceRepo;
        $this->filmRepo = $filmRepo;
        $this->salleRepo = $salleRepo;
    }

    public function create($data)
    {
        $seance = new Seance();
        $seance->horaire = $data['horaire'];

        $salle = $this->salleRepo->findById($data['salle_id']);
        if (!$salle) {
            throw new InCompleteProcess('salle introuvable');
        }
        $seance->salle()->associate($salle);

        $film = $this->filmRepo->findById($data['film_id']);
        if (!$film) {
            throw new InCompleteProcess('film introuvable');
        }
        $seance->film()->associate($film);

        $this->SeanceRepo->create($seance);
    }

    public function update($data) {}
    public function findByName($name) {}
    public function getAll() {
       return $this->SeanceRepo->getAll();
    }
    public function getById($id) {
      return $this->SeanceRepo->getById($id);
    }
    public function delete($id) {}
}
