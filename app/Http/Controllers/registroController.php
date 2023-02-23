<?php

namespace App\Http\Controllers;
use App\Models\Hobbie;
use Illuminate\Http\Request;
class adminController extends Controller
{
    public function index(){
        $hobbies = Hobbie::all();
        return view('adminRegistroGet' ,  compact('hobbies'));
    }
}
