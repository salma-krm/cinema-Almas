<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'capacite','status','maintenance_notes','type','description','equipment'];
  
protected $table="salles";


  
    public function chaises()
    {
        return $this->hasMany(Chaise::class);
    }

   
    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}
