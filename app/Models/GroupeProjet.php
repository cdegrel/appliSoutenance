<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupeProjet extends Model
{
    protected $table = 'groupe_projets';

    protected $fillable = [
        'libelleSujet'
    ];

    public $timestamps = true;

    public function etudiant()
    {
        return $this->hasMany('App\Models\Etudiant');
    }

    public function enseignant()
    {
        return $this->belongsTo('App\Models\Enseignant');
    }
}
