<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dateCreated', 'dateFine'];

   
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function seance()
    {
        return $this->belongsTo(Seance::class, 'seance_id');
    }

    
    public function paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}
