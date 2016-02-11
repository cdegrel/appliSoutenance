<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table = 'etudiants';

    protected $fillable = [
        'nomEtudiant',
        'prenomEtudiant',
        'photoEtudiant',
        'semestre_id',
        'groupe_tp_id',
        'groupe_projet_id'
    ];

    public $timestamps = true;

    public function groupe_tp()
    {
        return $this->belongsTo('App\Models\GroupeTp');
    }

    public function semestre()
    {
        return $this->belongsTo('App\Models\Semestre');
    }

    public function groupe_projet()
    {
        return $this->belongsTo('App\Models\GroupeProjet');
    }

    public function evaluation()
    {
        return $this->belongsToMany('App\Models\Evaluation');
    }
}
