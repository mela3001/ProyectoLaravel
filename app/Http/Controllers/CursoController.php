<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //pagina principal cursos
    public function index(){
        return view('cursos.index');
    }
    //crea curso
    public function create(){
        return view('cursos.create');
    }
    //muestra curso
    public function show($curso){
        //se le pasa una variable con el valor que quieres rescatar en la vista
        return view('cursos.show', ['curso'=>$curso]);
    }
}
