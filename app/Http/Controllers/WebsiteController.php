<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function blog(){
        return view('blog');
    }

    public function file(){
        return view('file1');
    }

    


}
