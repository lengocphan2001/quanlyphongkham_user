<?php

namespace App\Http\Controllers;

class AboutUsController extends Controller
{
    public function index() {
		return view('mindmatrix.about-us.index');
    }
}
