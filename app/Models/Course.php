<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'image_filename'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDefaultRouteKeyName()
    {
        return 'slug';
    }
}
