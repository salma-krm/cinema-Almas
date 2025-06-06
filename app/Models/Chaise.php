<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Chaise extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'price'];

  
    public function salle()
    {
        return $this->belongsTo(Salle::class, 'salle_id');
    }
}
