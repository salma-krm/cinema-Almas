<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Acteur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom'];

    public function films()
    {
        return $this->belongsToMany(Film::class);
    }
}
