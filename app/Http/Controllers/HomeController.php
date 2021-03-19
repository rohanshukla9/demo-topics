<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    public function uploadForm()
    {
        return view('upload');
    }
}
