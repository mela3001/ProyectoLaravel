<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacta;


class HomeController extends Controller
{
    //
    public function __invoke(){
        return view('home') ;
    }

    public function store(Request $request){
        $usuario = new Contacta();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->telefono = $request->phone;
        $usuario->mensaje = $request->mensaje;
        $usuario->save();
    }
}

