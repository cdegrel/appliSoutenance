<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DateEvaluationHeureDebut extends Model {

	protected $table = 'date_evaluations_heure_debut';
	
	protected $fillable = [
	  'evaluation_id'
	];
	
	public $timestamps = true;

}
