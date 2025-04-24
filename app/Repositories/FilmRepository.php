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
        $film =  Film::where('id', '=', $id)->first();
        $film->delete();
    }
    public function findByName($title)
    {
        return Film::where('title', 'LIKE', "%$title%")->first();
    }


    public function getAll()
    {
        return Film::with(['acteurs', 'genre'])->get();
    }
    public function create($data)
    {
        $data->save();
    }

    public function update($data)
    {

        $film = Film::where('id', $data->id)->first();

        if ($film) {
            dd($film);
            $film->update($data->all());
        }
    }

    public function findById($id)
    {
        return Film::with(['genre', 'acteurs'])->find($id);
    }


    public function getdetailfilm($id)
    {

        $film = Film::find($id)->first();
        return  $film;
    }
}
