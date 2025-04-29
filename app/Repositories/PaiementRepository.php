<?php
namespace app\Repositories;

use App\Repositories\Interfaces\IPaiement;

class PaiementRepository implements IPaiement{
  public function create($data){ 
    $data->create();
  }
  
}