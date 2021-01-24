<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home_index(){
        session()->flash('page_title','Dashboard');
        return view('home');
    }
}
