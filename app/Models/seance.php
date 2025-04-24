<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = ['horaire', 'rest_ticket'];

 
    public function film()
    {
        return $this->belongsTo(Film::class,'film_id');
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class,'salle_id');
    }
   
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
