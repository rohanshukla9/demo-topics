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

        Storage::disk('s3')->put('exssss', $upload);

        return back();
    }
}
