<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table = 'semestres';

    protected $fillable = [
        'libelleSemestre'
    ];

    public $timestamps = true;

    public function etudiants()
    {
        return $this->hasMany('App\Models\Etudiant');
    }
}
