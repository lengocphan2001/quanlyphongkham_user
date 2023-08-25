<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Just a few manually defined routes bellow
     **/
    public function welcome()
    {
        $courses = Course::all();
        $latestPosts = Post::with('author')->orderBy('created_at', 'desc')->take(5)->get();
        return view('mindmatrix.home.index', array('courses' => $courses, 'latestPosts' => $latestPosts));
    }
}
