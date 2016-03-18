<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Critere extends Model {

	protected $table = 'criteres';
	
	protected $fillable = [
	  'libelleCritere'
	];
	
	public $timestamps = true;

	public function type_evaluation()
	{
		return $this->belongsToMany('App\Models\TypeEvaluation');
	}

	public function enseignant()
	{
		return $this->belongsToMany('App\Models\Enseignant');
	}

	public function evaluation()
	{
		return $this->belongsToMany('App\Models\Evaluation');
	}

}
