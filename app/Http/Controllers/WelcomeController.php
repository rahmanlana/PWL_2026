<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'hello world';
    }

    public function gretting(){
        return view('blog.hello')
        ->with('name', 'Lana')
        ->with('occupation', 'Astrounaut');
    }
}
