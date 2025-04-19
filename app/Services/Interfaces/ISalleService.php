<?php

namespace App\Services\Interfaces;

interface ISalleService
{
    public function show();
    public function create($data);
    public function delete($id);
    public function update($data);
    public function findById($id);
    public function findByName($name);
}
