<?php

namespace App\Repositories;

use App\Enums\image;
use App\Models\Acteur;
use App\Repositories\Interfaces\IActeur;
use Exception;

class ActeurRepository implements IActeur
{
    public function getAll()
    {
        return Acteur::all();
    }

    public function create($data)
    {
        $existing = $this->findByName($data['name']);

        if ($existing) {
            throw new Exception("Acteur already exists.");
        }

        $acteur = new Acteur();
        $acteur->name = $data['name'];
        $acteur->description = $data['description'] ?? '';
        if ($data['photo']) {
            $photo = $data['photo'];
            $extenstion =$photo->getClientOriginalExtension();
            $fileName = 'acteur_'.time().'.'.$extenstion;
            $path =$photo->storeAs('acteurs',$fileName,'public');
            $data['photo'] =$path;
            $acteur->photo =$data['photo'];
        } else {
            $acteur->photo = Image::Profile; 
        }
        $acteur->save();

        return $acteur;
    }

    public function update($data)
    {
        $acteur = Acteur::find($data['id']);

        if (!$acteur) {
            throw new Exception("Acteur not found.");
        }

        $acteur->name = $data['name'];
        $acteur->description = $data['description'] ?? $acteur->description;
        $acteur->photo = $data['photo'] ?? $acteur->photo;
        $acteur->save();

        return $acteur;
    }

    public function delete($id)
    {
        $acteur = Acteur::find($id);
        if ($acteur) {
            $acteur->delete();
            return true;
        }
        return false;
    }

    public function getById($id)
    {
        return Acteur::find($id);
    }

    public function findByName($name)
    {
        return Acteur::where('name', $name)->first();
    }

    public function show()
    {
        return $this->getAll();
    }
}
