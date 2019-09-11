<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pets;

class Album extends Model
{
	protected $guarded = [];
	
    public function pets(){
	return $this->belongsTo('App\Pets');
}
}