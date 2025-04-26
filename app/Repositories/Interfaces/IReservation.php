<?php
namespace app\Repositories\Interfaces;
interface  IReservation{
  public function getAll();
  public function create($data);
  public function delete($id);
  public function getById($id);
  public function findByName($name);
  public function update($data);

  
}