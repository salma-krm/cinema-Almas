<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Avis extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'rating', 'user_id', 'film_id'];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

  
    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
