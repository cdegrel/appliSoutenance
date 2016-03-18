<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CritereTypeEvaluation extends Model {

	protected $table = 'critere_type_evaluation';
	
	protected $fillable = [
	  'poids', 
	  'critere_id',
	  'type_evaluation_id'
	];
	
	public $timestamps = true;

}
