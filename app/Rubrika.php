<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubrika extends Model
{
    protected $guarded = ['id'];
    
    public function articles()
	{
		return $this->belongsToMany('App\Article')->withTimestamps();
	}
}
