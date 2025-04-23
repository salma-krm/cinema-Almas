<?php

namespace App\Repositories\Interfaces;



interface IFilm
{
  
    public function create( $data);
    public function delete( $id);
    public function update( $data);
    public function findByName(string $name);
    public function findById($id);
    public function getAll();
}