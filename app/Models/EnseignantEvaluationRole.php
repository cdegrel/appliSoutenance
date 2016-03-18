<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnseignantEvaluationRole extends Model {

	protected $table = 'enseignant_evaluation_role';
	
	protected $fillable = [
	  'enseignant_id', 
	  'evaluation_id', 
	  'role_id',
	  'vote'
	];

  public $timestamps = true;

}
