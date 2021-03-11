<?php

namespace App\Filters;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Builder;

abstract class EwwFilter
{
  abstract public function filter(Builder $builder, $value);

  public function mappings()
  {
    return [];
  }

  protected function resolveFilterValue($key)
  {
    return Arr::get($this->mappings(), $key);
  }
}
