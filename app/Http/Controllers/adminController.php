<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Hobbie;
use App\Models\Ciudad;
use App\Models\Contacta;
use App\Models\Megusta;

use Illuminate\Http\Request;
class adminController extends Controller
{
    public function registroHobbie(){
        $hobbies = Hobbie::all();
        $ciudades = Ciudad::all();

        $data = [
            'hobbies' => $hobbies,
            'ciudades' => $ciudades,
        ];

        return view('registro' , $data);
    }


/* CONTROLAR LOS INICIOS DE SESION */
    public function inicioPagina(Request $request){
        $email = $request->email;
        $contraseña = $request->password;
        $loginCorrecto=false;
        $loginAdminCorrecto=false;
        $datosUsuarioIniciado = [];

        $usuarios = User::all();
        $megustas = Megusta::all();

        foreach($usuarios as $usuario){
            
            if(($usuario -> email) == $email ){
                if(($usuario -> password) == $contraseña ){
                    if($email == "admin@admin.com"){
                        if($contraseña = "admin123456789"){
                            $loginAdminCorrecto = true;
                            session()->forget('usuario');
                            session(['usuario' => $usuario -> usuario] );
                        }
                    }else{
                        $loginCorrecto=true;
                        session()->forget('usuario');
                        session(['usuario' => $usuario -> usuario] );
                        session( ['preferenciaUsuarioActivo' => $usuario -> preferencia]);
                        session( ['generoUsuarioActivo' => $usuario -> genero]);
                    }
                    
                } 
            }
        }

        
        if($loginCorrecto){
            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
            ];
    
            return view('inicio' , $data);

        }else if($loginAdminCorrecto){
            return view('admin.adminUsu' ,  compact('usuarios'));
        }else{
            return view('home');
        }
       
    }

/* -------------PAGINA DE ADMINISTRADOR -------------------- */

    /* MUESTRA LOS USUARIOS */
    public function adminUsu(){
        $usuarios = User::all();
        return view('admin.adminUsu' ,  compact('usuarios'));
    }

    /* MUESTRA LOS HOBBIES */
    public function adminHobbie(){
        $hobbies = Hobbie::all();
        return view('admin.adminHobbie' ,  compact('hobbies'));
    }


    /* MUESTRA LAS CIUDADES */
    public function adminCiudad(){
        $ciudades = Ciudad::all();
        return view('admin.adminCiudad' ,  compact('ciudades'));
    }

    /* MUESTRA LOS CONTACTOS */
    public function adminContacta(){
        $contactos = Contacta::all();
        return view('admin.adminContacta' ,  compact('contactos'));
    }

    /* AÑADE HOBBIE */
    public function anadirHobbie(Request $request){
       /* añado hobbie */
        $hobbie = new Hobbie();
        $hobbie->nombre = $request->nombre;
      $hobbie -> save();
        /* vuelvo a reedireccionar */
        $hobbies = Hobbie::all();
        return view('admin.adminHobbie' ,  compact('hobbies'));
    }


    /* AÑADE LAS CIUDADES */
    public function anadirCiudad(Request $request){
        /* añado hobbie */
         $ciudad = new Ciudad();
         $ciudad->nombre = $request->nombre;
         $ciudad -> save();
         /* vuelvo a reedireccionar */
         $ciudades = Ciudad::all();
         return view('admin.adminCiudad' ,  compact('ciudades'));
     }


/* -------------PAGINA DE INICIO AL ACCEDER UN USUARIO-------------------- */

     /* FUNCION QUE AÑADE LOS ME GUSTAS */
     public function darMg(Request $request){
        $usuarioDaMg = $request->usuarioDaMg;
        $usuarioRecibeMg = $request->usuarioRecibeMg;
        $existe=false;

        $megustas = Megusta::all();
        foreach($megustas as $mg){
            if(($mg -> usuarioDaMg) == $usuarioDaMg ){
                if(($mg -> usuarioRecibeMg) == $usuarioRecibeMg ){
                    $existe=true;
                } 
            }
        }

        if($existe){

            $usuarios = User::all();

            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
            ];
    
            return view('inicio' , $data);

        }else{
            $mg = new Megusta();
            $mg->usuarioDaMg = $request->usuarioDaMg;
            $mg->usuarioRecibeMg = $request->usuarioRecibeMg;
            $mg -> save();

            $megustas = Megusta::all();
            $usuarios = User::all();
            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
            ];
    
            return view('inicio' , $data);
        }
        
     }
}
