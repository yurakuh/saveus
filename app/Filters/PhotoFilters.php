<?php
namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;
class PhotoFilters extends FilterAbstract
{



	public function filter (Builder $builder, $value){
		
		return $builder->where('photo',$value);
	}
}