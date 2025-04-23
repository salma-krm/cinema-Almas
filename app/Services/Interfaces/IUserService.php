<?php

namespace App\Services\Interfaces;

interface IUserService
{ 

    public function findByEmail($email);
    public function delete($id);
    public function update(array $data, $id);
    public function findByName($name);
    public function getUser();
}

