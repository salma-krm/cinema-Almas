<?php
namespace app\Services;

use App\Exceptions\CustomException\InCompleteProcess;
use App\Models\Reservation;
use app\Repositories\Interfaces\IReservation;
use App\Repositories\Interfaces\ISalle;
use App\Repositories\Interfaces\ISeance;
use app\Repositories\Interfaces\IUser;
use app\Services\Interfaces\IReservationService;

class ReservationService implements IReservationService{
  private IReservation $reservationRepo;
  private ISeance $seanceRepo;
  private IUser $userRepo;
  private ISalle $salleRepo;
  public function __construct( IReservation $reservationRepo, ISeance $seanceRepo, IUser $userRepo,ISalle $salleRepo)
  {
    $this->reservationRepo =$reservationRepo;
    $this->seanceRepo = $seanceRepo;
    $this->userRepo = $userRepo;
    $this->salleRepo = $salleRepo;
  }
  public function getAll(){
     return $this->reservationRepo->getAll();

  }
  public function create($data){
    $user = auth()->user();
    if(!$user)
    {
      throw new InCompleteProcess('veuillez login in ');
    }
    $userReserve = $this->userRepo->getById($user->id);
    $seance = $this->seanceRepo->getById($data['seance_id']);
    if(!$seance){
      throw new InCompleteProcess('seance not fund veuillez verifier autre fois ');
    }
    $reserve = $this->reservationRepo->getById($data['seance_id']);
    $salle = $this->salleRepo->findById($seance->salle_id);
    if(($salle - $reserve) < 1 )
    {
      throw new InCompleteProcess('all  place reserve veuilez  autre fois ');
    }
    if($data['quantite'] > ($salle - $reserve)){
      throw new InCompleteProcess( ' just ($salle - $reserve)  ');
    }
    
    $reservation = new Reservation();
    $reservation->quantite = $data['quantite'];
    $reservation->seance()->associate($seance);
    $reservation->user()->associate($userReserve);

  }
  public function delete($id){

  }
  public function getById($id){

  }
  public function findByName($name){

  }
  public function update($data){

  }
}