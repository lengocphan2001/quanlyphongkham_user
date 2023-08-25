<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('mindmatrix.courses.index', array('courses' => $courses));
    }

    public function getCourse($alias) {
        $course = Course::where('alias', $alias)->first();
        if (empty($course)) {
            return redirect('/courses');
        }
        return view('mindmatrix.courses.detail', array('course' => $course));
    }
}
