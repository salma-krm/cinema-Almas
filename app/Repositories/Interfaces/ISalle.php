<?php 
namespace app\Repositories\Interfaces;

use App\Models\Salle;
use App\Models\User;

interface ISalle{

public function create($data);
public function delete($id) ;
public function Update($data , $id)  ;
public function FindbyName($name) ;

}
