<?php

namespace App\Filters;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FiltersAbstract;
use App\Filters\{OldFilters,InvFilters,HandsFilters,AutoFilters,PiarFilters,PhotoFilters,PerederzkaFilters,KuratorFilters,DonorFilters,GurskogoFilters,NaidenFilters,CityFilters,CategoryFilters};



class PetsFilters extends FiltersAbstract{

	protected $filters =[
 	'old' => OldFilters::class,
 	'inv' => InvFilters::class,
 	'hands' => HandsFilters::class,
 	'auto' => AutoFilters::class,
 	'piar' => PiarFilters::class,
 	'photo' => PhotoFilters::class,
 	'perederzka' => PerederzkaFilters::class,
 	'kurator' => KuratorFilters::class,
 	'donor' => DonorFilters::class,
 	'gurskogo' => GurskogoFilters::class,
 	'naiden' => NaidenFilters::class,
 	'city' => CityFilters::class,
 	'category_id' => CategoryFilters::class,

	];
}