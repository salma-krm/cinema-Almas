<?php

namespace App\Services\Interfaces;

interface IUserService
{ 

    public function findByEmail($email);
    public function delete($id);
    public function update( $data);
    public function findByName($name);
    public function getUser();
    public function getAll();
    public function updateRole($data);
}

