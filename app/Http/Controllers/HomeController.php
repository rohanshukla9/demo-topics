<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function uploadForm()
    {
        return view('upload');
    }


     public function store(Request $request)
    {
        $upload = $request->file('file');

        Storage::disk('s3_customers')->put('/', $upload);

        return back();
    }
}
