<?php

namespace App\Repositories;

use App\Models\Genre;
use App\Repositories\Interfaces\IGenre;
use Exception;

class GenreRepository implements IGenre
{
    public function show()
    {
        return Genre::all();
    }

    public function create($data)
    {
        $existing = $this->findByName($data['name']);

        if ($existing) {
            throw new Exception("Genre already exists.");
        }

        $genre = new Genre();
        $genre->name = $data['name'];
        $genre->save();

        return $genre;
    }

    public function delete($id)
    {
        $genre = Genre::find($id);
        if ($genre) {
            $genre->delete();
            return true;
        }
        return false;
    }

    public function update($data)
    {
        $genre = Genre::find($data['id']);

        if (!$genre) {
            throw new Exception("Genre not found.");
        }

        $genre->name = $data['name'];
        $genre->save();

        return $genre;
    }

    public function getById($id)
    {
        return Genre::find($id);
    }

    public function findByName($name)
    {
        return Genre::where('name', $name)->first();
    }

    public function getAll()
    {
        return Genre::all();
    }
}
