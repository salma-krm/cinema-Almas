<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'dateSortie',
        'resume',
        'budget',
        'realisateur',
        'duree',
        'genre_id',
        'langue',
        'photo',
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function acteursPrincipaux()
    {
        return $this->belongsToMany(Acteur::class, 'acteur_film');
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
