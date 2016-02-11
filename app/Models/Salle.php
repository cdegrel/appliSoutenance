<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model 
{

	protected $table = 'salles';

	protected $fillable = [
	    'libelleSalle'
	];
  
    public $timestamps = true;
  
	public function evaluation()
	{
		return $this->hasMany('App\Models\Evaluation');
	}

}
