<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = ['montant', 'date', 'statut', 'reservation_id'];

   
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
