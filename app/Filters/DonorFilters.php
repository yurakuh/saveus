<?php
namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\FilterAbstract;
class DonorFilters extends FilterAbstract
{



	public function filter (Builder $builder, $value){
		
		return $builder->where('donor',$value);
	}
}