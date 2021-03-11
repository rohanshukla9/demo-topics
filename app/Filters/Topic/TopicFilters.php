<?php

namespace App\Filters\Topic;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use App\Filters\FiltersAbstract;
use App\Filters\Topic\{DifficultyFilter};

class TopicFilters extends FiltersAbstract
{
  protected $filters = [
    'difficulty' => DifficultyFilter::class,
  ];
}
