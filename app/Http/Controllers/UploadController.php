<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class UploadController extends Controller
{
    //

    public function store(Request $request)
    {
        $upload = $request->file('file');

        Storage::disk('s3_customers')->put('/', $upload);

        return back();
    }
}
