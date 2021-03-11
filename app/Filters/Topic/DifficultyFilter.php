<?php

namespace App\Filters\Topic;

use App\Filters\EwwFilter;
use Illuminate\Database\Eloquent\Builder;

class DifficultyFilter extends EwwFilter
{
  //instantiate only if its requested in query string

  public function mappings()
  {
    return [
      'beginner' => 'beginner',
      'intermediate' => 'intermediate',
      'advanced' => 'advanced',
    ];
  }


  public function filter(Builder $builder, $value)
  {
    //filter out data here
    // location are cluttered here

    $value = $this->resolveFilterValue($value);

    if ($value === null) {
      return $builder;
    }

    return $builder->where('difficulty', $value);
  }
}
