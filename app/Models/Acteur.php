<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Acteur extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description','photo'];

    public function films()
    {
        return $this->belongsToMany(Film::class,'acteur_films','film_id', 'acteur_id');
    }
}
