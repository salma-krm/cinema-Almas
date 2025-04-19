<?php

namespace App\Repositories\Interfaces;

interface IRole
{
    public function create($data);
    public function delete($id);
    public function update($data);
    public function findByName($name);
    public function getById($id);
    public function getAll();
    public function GetRole($name);
}
