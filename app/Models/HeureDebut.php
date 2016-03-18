<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeureDebut extends Model {

	protected $table = 'heure_debuts';
	
	public $timestamps = true;

	public function evaluation()
	{
		return $this->belongsToMany('App\Models\Evaluation');
	}

	public function date()
	{
		return $this->belongsToMany('App\Models\Date');
	}

}
