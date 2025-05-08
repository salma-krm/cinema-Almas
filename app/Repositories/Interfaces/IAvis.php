<?php
namespace App\Repositories\Interfaces;

interface IAvis {

  public function create( $data);
    public function delete( $id);
    public function update( $data);
    public function findByName( $name);
    public function findById($id);
    public function getdetailfilm($id);
    public function getAll();

}