<?php

namespace App\Repositories;

use App\Enums\Image; 
use App\Models\Role;
use App\Enums\Roles;
use App\Models\Film;
use App\Models\User;
use App\Repositories\Interfaces\IFilm;



class FilmRepository implements IFilm
{
    
 
    public function delete($id)
    {
        Film::delete($id);
    }
    public function findByName($title)
    {
        return Film::where('title', 'LIKE', "%$title%")->first();
    }


    public function getAll(){
        return Film::with(['acteurs', 'genre'])->get();

         
    }
    public function create( $data){
        $data->save();
    }
  
    public function update( $data){
        $data->save();

    }
    public function findById(int $id){
        return Film::find($id);
    }
}
