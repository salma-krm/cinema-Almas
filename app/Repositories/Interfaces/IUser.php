<?php 
namespace app\Repositories\Interfaces;
interface IUser{

    public function register(array $data);
    public function login (array  $data);
    public function findByEmail($email);
    public function delete($id);
    public function update(array $data, $id);
    public function findByName($name);

}
