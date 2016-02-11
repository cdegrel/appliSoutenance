<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Enseignant extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomEnseignant', 'prenomEnseignant', 'photoEnseignant', 'admin', 'login', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
