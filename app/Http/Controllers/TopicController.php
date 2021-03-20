<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controllers
{
    //

    public function index(Request $request)
    {
        return Topic::with('children')->filter($request)->get();
    }
}
	