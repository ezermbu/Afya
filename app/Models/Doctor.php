<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'hospital_id',
        'name',
        'specialty',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

