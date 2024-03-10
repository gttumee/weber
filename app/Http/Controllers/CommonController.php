<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index(){
        return view('index');
    }

    
    public function about(){
        return view('about');
    }

    
    public function service(){
        return view('service');
    }

    
    public function detail(){
        return view('view');
    }

    
    public function contact(){
        return view('contact');
    }
}