<?php
namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;
abstract class FilterAbstract {
	abstract public function filter(Builder $builder, $value);
}
