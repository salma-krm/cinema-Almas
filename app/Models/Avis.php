<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Avis extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'rating'];

   
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

  
    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }
}
