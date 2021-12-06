<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function about(){
        return view('about');
    }
    public function post(){
        return view('post');
    }
    public function contact(){
        return view('contact');
    }
}
