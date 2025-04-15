<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = ['horaire', 'film_id', 'salle_id', 'rest_ticket'];

 
    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

   
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
