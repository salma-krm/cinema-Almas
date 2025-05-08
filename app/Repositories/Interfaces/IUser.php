<?php 
namespace app\Repositories\Interfaces;

use App\Models\User;

interface IUser{

    public function findByEmail($email);
    public function delete($id);
    public function update( User $data );
    public function findByName($name);
    public function getById($id);
    public function save(User $data);
    public function getUser();
    public function getAll();

}
