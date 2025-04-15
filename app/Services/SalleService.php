<?php
namespace   App\Services;
use app\Services\Interfaces\ISalleService;
class SalleService{
    protected $salleService;

    public function construct(ISalleService $salleService){
        $this->salleService =$salleService;


    }
    public function create(array $data){
  
    }
}