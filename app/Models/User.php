<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   
    protected $fillable = [
        'name',
        'prenom',
        'email',
        'password',
        'photo',
        'role_id',
    ];

 
    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

 
    public function role()
    {
        return $this->belongsTo(role::class);
    }

   
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    
    public function avis()
    {
        return $this->hasMany(Avis::class);
    }
}
