<?php
namespace App\Repositories;

use App\Repositories\Interfaces\IAvis;

class AvisRepositiry implements IAvis{

  public function create( $data){
    // dd($data);
    $data->save();

  }
  public function delete( $id){

  }
  public function update( $data){

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