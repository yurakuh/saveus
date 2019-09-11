<?php
namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;
class AutoFilters extends FilterAbstract
{



	public function filter (Builder $builder, $value){
		
		return $builder->where('auto',$value);
	}
}