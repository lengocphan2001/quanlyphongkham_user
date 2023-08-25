<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function content()
    {
        return view('frontend.ajax.content');
    }

}
