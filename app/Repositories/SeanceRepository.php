<?php
namespace App\Repositories;

use App\Models\Seance;
use App\Repositories\Interfaces\ISeance;

class SeanceRepository implements ISeance
{

   public function create($data){
    
     $data->save();
   }
    public function delete($id){

    }
    public function update($data){

    }
    public function findByName($name){

    }
    public function getById($id){
        $seance= Seance::find($id);
        
        return $seance;
    }
    public function getAll(){
       $seance =Seance::all();
      //  dd($seance);
      return $seance;

    }
}