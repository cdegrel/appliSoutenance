<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Date extends Model {

	protected $table = 'dates';
	
	public $timestamps = true;

	public function evaluation()
	{
		return $this->belongsToMany('App\Models\Evaluation');
	}

	public function heure_debut()
	{
		return $this->belongsToMany('App\Models\HeureDebut');
	}

}
