<?php
namespace App\Filters;
use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;
class InvFilters extends FilterAbstract
{
	public function filter (Builder $builder, $value){
		
		return $builder->where('inv',$value);
	}
}