<?php
namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;
class CategoryFilters extends FilterAbstract
{



	public function filter (Builder $builder, $value){
		
		return $builder->where('category_id',$value);
	}
}