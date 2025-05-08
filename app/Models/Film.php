<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'dateSortie',
        'resume',
        'budget',
        'realisateur',
        'duree',
        'langue',
        'photo',
        'video',
        'age_restriction'

    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function acteurs()
    {
        return $this->belongsToMany(Acteur::class, 'acteur_films','film_id', 'acteur_id');
    }
    public function seances()
    {
        return $this->hasMany(Seance::class);
    }


    public function avis()
    {
        return $this->hasMany(Avis::class);
    }
}
