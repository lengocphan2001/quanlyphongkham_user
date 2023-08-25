<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WizardController extends Controller
{
    public function step1()
    {
        return view('frontend.wizard.step-1');
    }

    public function step2()
    {
        return view('frontend.wizard.step-2');
    }

    public function step3()
    {
        return view('frontend.wizard.step-3');
    }

    public function step4()
    {
        return view('frontend.wizard.step-4');
    }

    // Forms
    public function form1()
    {
        return view('frontend.wizard.form-1');
    }

    public function form2()
    {
        return view('frontend.wizard.form-2');
    }

    public function form3()
    {
        return view('frontend.wizard.form-3');
    }

    public function form4()
    {
        return view('frontend.wizard.form-4');
    }

    public function form5()
    {
        return view('frontend.wizard.form-5');
    }

    // Just a generic post handler, you should define your own logic
    public function post()
    {
        return response()->json([
            "result" => true, // if something goes wrong, result should be false
            "data" => [
                "note" => "Include any additional data you might use on client"
            ]
        ]);

    }
}
