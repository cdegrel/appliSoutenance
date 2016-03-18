<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model {

	protected $table = 'evaluations';
	
	protected $fillable = [
	  'noteGroupe', 
	  'remarqueGroupe', 
	  'groupe_projet_id', 
	  'etudiant_id', 
	  'salle_id'
	];
	
	public $timestamps = true;

	public function groupe_projet()
	{
		return $this->belongsTo('App\Models\GroupeProjet');
	}

	public function salle()
	{
		return $this->belongsTo('App\Models\Salle');
	}

	public function type_evaluation()
	{
		return $this->belongsTo('App\Models\TypeEvaluation');
	}

	public function date()
	{
		return $this->belongsToMany('App\Models\Date');
	}

	public function role()
	{
		return $this->belongsToMany('App\Models\Role');
	}

	public function critere()
	{
		return $this->belongsToMany('App\Models\Critere');
	}

	public function etudiant()
	{
		return $this->belongsToMany('App\Models\Etudiant');
	}

	public function heure_debut()
	{
		return $this->belongsToMany('App\Models\HeureDebut');
	}

	public function enseignant()
	{
		return $this->belongsToMany('App\Models\Enseignant');
	}

}
