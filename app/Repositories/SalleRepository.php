<?php

namespace App\Repositories;

use App\Models\Salle;
use App\Repositories\Interfaces\ISalle;
use Exception;

class SalleRepository implements ISalle
{
    public function show()
    {

        $salles = Salle::all();
        return $salles;
    }
    public function create($data)
    {
        $existingSalle = $this->findByName($data['name']);

        if ($existingSalle) {
            throw new Exception(" cant create the salle ");
        }
        $salle = new Salle();
        $salle->name = $data['name'];
        $salle->capacite = $data['capacite'];
        $salle->status = $data['status'];
        $salle->maintenance_notes = $data['maintenance_notes'];
        $salle->type = $data['type'];
        $salle->description = $data['description'];
        $salle->equipment = $data['equipment'];
        $salle->save();
    }



    public function delete($id)
    {
        $salle = Salle::find($id);
        if ($salle) {
            $salle->delete();
           
        }

       
    }


    public function update($data)
    {

        $salle = Salle::where('id', $data['id'])->first();

        if (!$salle) {
            throw new Exception(" cant update the salle ");
        }
        $salle->name = $data['name'];
        $salle->capacite = $data['capacite'];
        $salle->status = $data['status'];
        $salle->maintenance_notes = $data['maintenance_notes'];
        $salle->type = $data['type'];
        $salle->description = $data['description'];
        $salle->equipment = $data['equipment'];
        $salle->save();
        return $salle;
       
        
    }

    public function findById($id)
    {


        $Salles = Salle::find($id);

        if (!$Salles) {

            return back()->with('error', 'Salle not found!');
        }
        return $Salles;
    }
   
   


     public function getAll(){

     }
    public function FindbyName($name){

     }
}
