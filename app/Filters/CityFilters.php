<?php
namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;
class CityFilters extends FilterAbstract
{



	public function filter (Builder $builder, $value){
		
		return $builder->where('city','LIKE','%'.$value.'%');
	}
}