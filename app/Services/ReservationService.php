<?php

namespace app\Services;

use App\Exceptions\CustomException\InCompleteProcess;
use App\Models\Reservation;
use App\Repositories\Interfaces\IReservation;
use App\Repositories\Interfaces\ISalle;
use App\Repositories\Interfaces\ISeance;
use App\Repositories\Interfaces\IUser;
use App\Services\Interfaces\IReservationService;
use Illuminate\Support\Facades\DB;

class ReservationService implements IReservationService
{
  private IReservation $reservationRepo;

  public function __construct(IReservation $reservationRepo)
  {
    $this->reservationRepo = $reservationRepo;
    
  }
  
  public function delete($id) {}
  public function getById($id) {}
  public function findByName($name) {}
  public function update($data) {}
  public function getAll(){
  return   $this->reservationRepo->getAll();
  }
}
