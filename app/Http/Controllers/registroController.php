<?php

namespace App\Http\Controllers;
use App\Models\Hobbie;
use Illuminate\Http\Request;

class registroController extends Controller
{
    public function registroHobbie(){
        $hobbies = Hobbie::all();
        return view('registro' ,  compact('hobbies'));
    }

}
