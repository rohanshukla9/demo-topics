<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Models\Topic;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;



Route::get('/', function () {
    // return Topic::create(
    //     // [
    //     [
    //         'name' => $name = 'Topic3',
    //         'slug' => Str::slug($name),
    //         'children' => [
    //             [
    //                 'name' => '3.1 of Topic 3',
    //                 'slug' => Str::slug('3.1 of Topic 3'),
    //                 'children' => [
    //                     [
    //                         'name' => '3.1.1 of 3.1 of Topic 3', 'slug' => Str::slug('3.1.1 of 3.1 of Topic 3'),
    //                         'children' => [
    //                             ['name' => '3.1.1.1 of 3.1.1 of 3.1 of Topic 3', 'slug' => Str::slug('3.1.1.1 of 3.1.1 of 3.1 of Topic 3'),],
    //                             ['name' => '3.1.1.2 of 3.1.1 of 3.1 of Topic 3', 'slug' => Str::slug('3.1.1.2 of 3.1.1 of 3.1 of Topic 3'),],
    //                             ['name' => '3.1.1.3 of 3.1.1 of 3.1 of Topic 3', 'slug' => Str::slug('3.1.1.3 of 3.1.1 of 3.1 of Topic 3'),]
    //                         ]
    //                     ],
    //                     ['name' => '3.1.2 of 3.1 of Topic 3', 'slug' => Str::slug('3.1.2 of 3.1 of Topic 3'),],
    //                 ],
    //             ],
    //             [
    //                 'name' => '3.2 of Topic 3',
    //                 'slug' => Str::slug('3.2 of Topic 3'),
    //                 'children' => [
    //                     [
    //                         'name' => '3.2.1 of 3.2 of Topic 3', 'slug' => Str::slug('3.2.1 of 3.2 of Topic 3'),
    //                         'children' => [
    //                             ['name' => '3.2.1.1 of 3.2.1 of 3.2 of Topic 3', 'slug' => Str::slug('3.2.1.1 of 3.2.1 of 3.2 of Topic 3'),],
    //                             ['name' => '3.2.1.2 of 3.2.1 of 3.2 of Topic 3', 'slug' => Str::slug('3.2.1.2 of 3.2.1 of 3.2 of Topic 3'),],
    //                             ['name' => '3.2.1.3 of 3.2.1 of 3.2 of Topic 3', 'slug' => Str::slug('3.2.1.3 of 3.2.1 of 3.2 of Topic 3'),]
    //                         ]
    //                     ],
    //                     ['name' => '3.2.2 of 3.2 of Topic 3', 'slug' => Str::slug('3.2.2 of 3.2 of Topic 3'),],
    //                 ],
    //             ]
    //         ],
    //     ],

    // );
});


Route::get('upload', [HomeController::class, 'uploadForm']);

Route::post('upload', [UploadController::class, 'store'])->name('uploads.store');
