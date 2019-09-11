<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pets;

class Company extends Model
{
	protected $fillable = [
		'name', 'user_id', 'slug', 'vklink', 'fblink', 'instlink', 'bio', 'logo', 'verify', 'organisation'
	];


   public function pets(){
   return $this->hasMany('App\Pets');
   }


    public function getRouteKeyName(){
    	return 'slug';
    }
}
