<?php

namespace App\Models;

use App\Filters\Topic\TopicFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Topic extends Model
{
    use HasFactory, NodeTrait;


    protected $fillable = ['name', 'slug'];
    public function scopeFilter(Builder $builder, $request, array $filters = [])
    {
        # code...
        return (new TopicFilters($request))->add($filters)->filter($builder);
    }
}
