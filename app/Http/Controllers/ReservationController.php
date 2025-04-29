<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IReservationService;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    private IReservationService $reservationService;
    public function __construct(IReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }
    public function getAll(){
        $reservation =$this->reservationService->getAll();
        dd($reservation);
        return view ('admindashbord.reservation.reservationdashbord',compact('reservation'));
    }
   
}
