<?php
namespace app\Repositories;

use App\Models\Reservation;
use App\Repositories\Interfaces\IReservation;

class ReservationRepository implements IReservation{

  
  public function getAll(){
    return reservation::all();

  }
  public function create($data){
    $data->save();
  }
  public function delete($id){}
  public function getById($id){
    $reservation = Reservation::where('seance_id', '=', $id)->sum('quantite');
    return $reservation;
  }

  
  public function findByName($id){
    $reservation = Reservation::find($id);

  }
  public function update($data){
    $data->update();

  }

  public function getReservedCount($id){
    return  Reservation::where('seance_id', '=', $id)->sum('quantite');
  }

 
}