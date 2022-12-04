<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function tracking(){
        return view('front.tracking.tracking');
    }


    public function confirmation(){
        return view('front.tracking.confirmation');
    }

    public function checkout(){
        return view('front.tracking.checkout');
    }

    public function cart(){
        return view('front.tracking.cart');
    }

    public function elements(){
        return view('front.tracking.elements');
    }
}
