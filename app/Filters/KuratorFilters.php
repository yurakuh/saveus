<?php
namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;
class KuratorFilters extends FilterAbstract
{



	public function filter (Builder $builder, $value){
		
		return $builder->where('kurator',$value);
	}
}