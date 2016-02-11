<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtudiantEvaluation extends Model {

	protected $table = 'etudiant_evaluation';
	
	protected $fillable = [
	  'noteIndividuelle', 
	  'remarqueIndividuelle', 
	  'etudiant_id', 
	  'evaluation_id'
	];
	
	public $timestamps = true;

}
