<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CritereEnseignantEvaluation extends Model {

	protected $table = 'critere_enseignant_evaluation';
	
	protected $fillable = [
	  'noteCritere', 
	  'critere_id', 
	  'enseignant_id', 
	  'evaluation_id'
	];

  public $timestamps = true;
  
}
