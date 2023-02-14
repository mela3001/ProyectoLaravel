<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke(){
        //manda a la página principal
        return view('home');
    }
}
