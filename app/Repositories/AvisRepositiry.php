<?php
namespace App\Repositories;

use App\Models\Avis;
use App\Repositories\Interfaces\IAvis;

class AvisRepositiry implements IAvis{

  public function create( $data){
    // dd($data);
    $data->save();

  }
  public function delete( $id){
    $avis =  Avis::where('id', '=', $id)->first();
    $avis->delete();
  }
  public function update( $data){
    
    $avis = Avis::where('id', $data->id)->first();
     $avis->update( $data->all());

  }
  public function findByName( $name){

  }
  public function findById($id){

  }
  public function getdetailfilm($id){

  }
  public function getAll(){

  }
}