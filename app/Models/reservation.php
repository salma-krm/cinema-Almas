<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dateCreated', 'dateFine', 'user_id', 'seance_id'];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function seance()
    {
        return $this->belongsTo(Seance::class);
    }

    
    public function paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}
