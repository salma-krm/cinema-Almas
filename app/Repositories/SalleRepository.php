<?php


namespace App\Repositories;

use App\Models\Salle;
use app\Repositories\Interfaces\ISalle;

class SalleRepository implements ISalle
{
    public function create( $data){
        $salle = new Salle();
        $salle->name = $data['name'];
        $salle->cap =$data['capacite'];
      
        $salle->save();

        
    }


public function delete($id){



} 
public function Update($data , $id){



}
public function FindbyName($name){


} 
 
    
}
