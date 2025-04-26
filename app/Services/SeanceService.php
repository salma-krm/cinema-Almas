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

    public function update($data) {
      
      $seance = $this->SeanceRepo->getById($data['id']);
      if(!$seance){
        throw new InCompleteProcess ('seance introuvable ');

      }
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
      $this->SeanceRepo->update($seance);


    }


    public function findByName($name) {}
    public function getAll() {
       return $this->SeanceRepo->getAll();
    }
    public function getById($id) {
      return $this->SeanceRepo->getById($id);
    }
    public function delete($id) {
      $seance = $this->SeanceRepo->getById($id);
      if(!$seance){
        throw new InCompleteProcess('seance non  trouvable');
      }
      $this->SeanceRepo->delete($id);

    }
    public function AjouterPanier($data)
    {
      
     $id = $data['id'];
        $seance = $this->SeanceRepo->getById($id);
        
        if (!$seance) {
            throw new InCompleteProcess('seance non trouvable');
        }
        $film = $this->filmRepo->findById($seance->film_id);
       

        $ticket = session()->get('ticket', []);
        if (isset($ticket[$id])) {
            $ticket[$id]['quantity'] += $data->get('quantity');
        } else {
          
            $ticket[$id] = [
                'title' => $film->title,
                'prix_unite' => $film->budget, 
                'date_sortie' => $seance->horaire,
                'description' => $film->resume,
                'photo' => $film->photo,
                'duree' => $film->duree,
                'age_restriction' => $film->age_restriction,
                'quantity' => $data['quantity'] ?? 1
            ];
        }

        $panier = session()->put('ticket', $ticket);
        return $panier;
        
        
    }


    public function getPanier(){
      $panier = session()->get('ticket', []);
      // dd($panier);
      return $panier;
    }
   
    public function deletPanier($id)
{
    
    $ticket = session()->get('ticket', []);

    if (isset($ticket[$id])) {
       
        unset($ticket[$id]);

        session()->put('ticket', $ticket);

       
    }

}
}
