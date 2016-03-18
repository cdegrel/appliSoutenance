<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeEvaluation extends Model {

	protected $table = 'type_evaluations';
	
	protected $fillable = [
	  'libelleTypeEvaluation', 
	  'dureeTypeEvaluation'
	];
	
	public $timestamps = true;

	public function evaluation()
	{
		return $this->hasMany('App\Models\Evaluation');
	}

	public function critere()
	{
		return $this->belongsToMany('App\Models\Critere');
	}

}
