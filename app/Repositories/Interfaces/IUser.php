<?php 
namespace app\Repositories\Interfaces;

use App\Models\User;

interface IUser{

public function register($data): User;
public function findByEmail($email);
public function delete($id) ;
public function Update($data , $id) : User ;
public function FindbyName($name) : User;

}
