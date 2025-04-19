<?php

namespace App\Services\Interfaces;

interface IRoleService
{
    public function create($data);
    public function delete($id);
    public function update($data);
    public function findByName($name);
    public function getById($id);
    public function getAll();
}
