<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Topic extends Model
{
    use HasFactory;

    use NodeTrait;

    protected $fillable = ['name', 'slug'];
}
