<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.home.home');
    }

    public function shopCategory(){
        return view('front.category.shopCategory');
    }

    public function productDetails(){
        return view('front.category.shopCategory');
    }

    public function login(){
        return view('front.home.login');
    }

    public function contact(){
        return view('front.home.contact');
    }
}
