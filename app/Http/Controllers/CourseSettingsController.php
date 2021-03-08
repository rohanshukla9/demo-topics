<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseSettingsController extends Controller
{
    //
    public function edit(Course $course)
    {
    }

    public function update(Request $request, Course $course)
    {
        # code...

        $this->authorize('update', $course);
    }
}
