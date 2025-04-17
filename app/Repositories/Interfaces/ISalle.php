<?php

namespace App\Repositories\Interfaces;

use App\Models\Salle;

interface ISalle
{
    public function show();
    public function create(array $data);
    public function delete(int $id);
    public function update(array $data);
    public function findByName(string $name);
    public function findById(int $id);
    public function getAll();
}