<?php
namespace app\Repositories;

use App\Models\Reservation;
use app\Repositories\Interfaces\IReservation;

class ReservationRepository implements IReservation{
  public function getAll(){

  }
  public function create($data){

  }
  public function delete($id){

  }
  public function getById($id){
    $reservation = Reservation::where('seance_id', '=', $id)->sum('quantite');
    return $reservation;
  }

  
  public function findByName($name){

  }
  public function update($data){

  }
}