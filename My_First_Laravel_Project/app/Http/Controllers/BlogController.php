<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('front.blog.blog');
    }

    public function singleBlog(){
        return view('front.blog.single-blog');
    }
}
