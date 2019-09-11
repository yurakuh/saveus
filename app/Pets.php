<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Profile;
use App\Album;
use App\Filters\PetsFilters;


class Pets extends Model
{

  protected $guarded = [];
    public function getRouteKeyName(){
    	return 'slug';
    }

    public function scopeFilter(Builder $builder, $request, array $filters = []){
        return (new PetsFilters($request))->add($filters)->filter($builder);
    }

    public function company(){
	return $this->belongsTo('App\Company');

	
   }

   

    public function album(){
   return $this->hasMany('App\Album');
}

     public function users(){
        return $this->belongsToMany(User::class)->withTimeStamps();
    }
    public function checkAdoption(){
     return \DB::table('pets_user')->where('user_id',auth()->user()->id)->where('pets_id',$this->id)->exists();
    }

    public function favourites(){
        return $this->belongsToMany(Pets::class,'favourites','pets_id','user_id')->withTimeStamps();
    }
    public function checkSaved(){
     return \DB::table('favourites')->where('user_id',auth()->user()->id)->where('pets_id',$this->id)->exists();
    }
    }

