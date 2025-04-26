<?php
namespace app\Services\Interfaces;
interface IReservationService{
  public function getAll();
  public function create($data);
  public function delete($id);
  public function getById($id);
  public function findByName($name);
  public function update($data);
}