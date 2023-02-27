<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Hobbie;
use App\Models\Ciudad;
use App\Models\Contacta;
use Illuminate\Http\Request;
class adminController extends Controller
{
    public function adminUsu(){
        $usuarios = User::all();
        return view('admin.adminUsu' ,  compact('usuarios'));
    }

    public function adminHobbie(){
        $hobbies = Hobbie::all();
        return view('admin.adminHobbie' ,  compact('hobbies'));
    }
    public function registroHobbie(){
        $hobbies = Hobbie::all();
        $ciudades = Ciudad::all();

        $data = [
            'hobbies' => $hobbies,
            'ciudades' => $ciudades,
        ];

        return view('registro' , $data);
    }

    public function inicioPagina(Request $request){
        $email = $request->email;
        $contraseña = $request->password;
        $loginCorrecto=false;
        $datosUsuarioIniciado = [];

        $usuarios = User::all();
        foreach($usuarios as $usuario){
            if(($usuario -> email) == $email ){
                if(($usuario -> password) == $contraseña ){
                    $loginCorrecto=true;
                    $datosUsuarioIniciado = [
                        'email' => $email,
                        'usuario' => $usuario -> usuario
                    ];
                } 
            }
        }

        if($loginCorrecto){
            $data = [
                'usuarios' => $usuarios,
                'datos' => $datosUsuarioIniciado
            ];
    
            return view('inicio' , $data);
        }else{
            return view('home');
        }
       
    }

    public function adminCiudad(){
        $ciudades = Ciudad::all();
        return view('admin.adminCiudad' ,  compact('ciudades'));
    }

    public function adminContacta(){
        $contactos = Contacta::all();
        return view('admin.adminContacta' ,  compact('contactos'));
    }

    public function anadirHobbie(Request $request){
       /* añado hobbie */
        $hobbie = new Hobbie();
        $hobbie->nombre = $request->nombre;
      $hobbie -> save();
        /* vuelvo a reedireccionar */
        $hobbies = Hobbie::all();
        return view('admin.adminHobbie' ,  compact('hobbies'));
    }

    public function anadirCiudad(Request $request){
        /* añado hobbie */
         $ciudad = new Ciudad();
         $ciudad->nombre = $request->nombre;
        $ciudad -> save();
         /* vuelvo a reedireccionar */
         $ciudades = Ciudad::all();
         return view('admin.adminCiudad' ,  compact('ciudades'));
     }
}
