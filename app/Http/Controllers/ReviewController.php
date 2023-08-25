<?php

namespace App\Http\Controllers;

use App\Models\Review;

class ReviewController extends Controller
{
    public function index() {
        $reviews = Review::all();
        return view('mindmatrix.reviews.index', array('reviews' => $reviews));
    }
}
