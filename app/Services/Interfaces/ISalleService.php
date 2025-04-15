<?php

namespace App\Services\Interfaces;

use App\Models\Salle;

interface ISalleService
{
    public function validated();
    public function create($data): Salle;
    public function delete($id);
    public function Update($data, $id): Salle;
    public function FindbyName($name): Salle;
}
