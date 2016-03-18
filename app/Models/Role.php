<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	protected $table = 'roles';
	
	protected $fillable = [
	  'libelleRole'
	];

  public $timestamps = true;
  
	public function evaluation()
	{
		return $this->belongsToMany('App\Models\Evaluation');
	}

	public function enseignant()
	{
		return $this->belongsToMany('App\Models\Enseignant');
	}

}
