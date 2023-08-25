<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Just a few manually defined routes bellow
     **/
    public function customer()
    {
        return view('frontend.pages.shop.checkout.customer');
    }

    public function shipping()
    {
        return view('frontend.pages.shop.checkout.shipping');
    }

    public function payment()
    {
        return view('frontend.pages.shop.checkout.payment');
    }

    public function confirmation()
    {
        return view('frontend.pages.shop.checkout.confirmation');
    }
}
