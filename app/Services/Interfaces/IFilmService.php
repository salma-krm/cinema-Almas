<?php

namespace App\Services\Interfaces;

interface IFilmService
{ 

 
    public function delete($id);
    public function create($data);
    public function update($data);
    public function findByName($name);
    public function getAll();
    public function getById($id);
    public function getdetailfilm($id);
    
}

