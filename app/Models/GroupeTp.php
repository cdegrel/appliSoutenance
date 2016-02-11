<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupeTp extends Model
{
    protected $table = 'groupe_tps';

    protected $fillable = [
        'libelleGroupeTP'
    ];

    public $timestamps = true;

    public function etudiants()
    {
        return $this->hasMany('App\Models\Etudiant');
    }
}
