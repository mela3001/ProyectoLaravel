<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Hobbie;
use App\Models\Ciudad;
use App\Models\Contacta;
use App\Models\Megusta;
use App\Models\Usuariohobbie;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
class adminController extends Controller
{

    
/* HOME */

    public function store(Request $request){
        $usuario = new Contacta();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->telefono = $request->phone;
        $usuario->mensaje = $request->mensaje;
        $usuario->save();
        return back();
    
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
        $ciudades = Ciudad::all();
        $hobbies = Hobbie::all();
        $hobbieUsuario = Usuariohobbie::all();

        foreach($usuarios as $usuario){
            
            if(($usuario -> email) == $email ){
                if(($usuario -> password) == $contraseña ){
                    if($email == "admin@admin.com"){
                        if($contraseña = "admin123456789"){
                            $loginAdminCorrecto = true;
                            session()->forget('usuario');
                            session(['usuario' => $usuario -> usuario] );
                            session(['usuarioId' => $usuario -> id] );
                            session(['usuarioCiudad' => $usuario -> ciudad]);
                            session(['usuarioImg' => $usuario -> imagen]);
                        }
                    }else{
                        $loginCorrecto=true;
                        session()->forget('usuario');
                        session(['usuario' => $usuario -> usuario] );
                        session( ['preferenciaUsuarioActivo' => $usuario -> preferencia]);
                        session( ['generoUsuarioActivo' => $usuario -> genero]);
                        session(['usuarioCiudad' => $usuario -> ciudad]);
                        session(['usuarioImg' => $usuario -> imagen]);
                    }
                    
                } 
            }
        }

        
        if($loginCorrecto){



            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
                'ciudades' => $ciudades,
                'hobbies' => $hobbies,
                'hobbieUsuario'=> $hobbieUsuario,
            ];
    
            return view('inicio' , $data);

        }else if($loginAdminCorrecto){
            return view('admin.adminUsu' ,  compact('usuarios'));
        }else{
            return view('home');
        }
       
    }


/* MODIFICAR USUARIO */

    public function modificarUsuario(Request $request){
        $usu = $request->usuario;
        $nombre = $request->name;
        $apellido = $request->apellido;
        $telefono = $request->telefono;
        $ciudad = $request->ciudad;
        $genero = $request->genero;
        $preferencia = $request->preferencia;
        session(['usuarioCiudad' => $request -> ciudad]);
        User::where('usuario', $usu)
        ->update(['name'=>$nombre, 'apellido'=>$apellido, 'telefono'=>$telefono, 'ciudad'=>$ciudad,'genero'=>$genero,'preferencia'=>$preferencia]);


            $megustas = Megusta::all();
            $usuarios = User::all();
            $ciudades = Ciudad::all();
            $hobbies = Hobbie::all();
            $hobbieUsuario = Usuariohobbie::all();

            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
                'hobbies' => $hobbies,
                'ciudades' => $ciudades,
                'hobbieUsuario' => $hobbieUsuario,
            ];
    
            return view('inicio' , $data);

    }

    public function modificarImg(Request $request){
        $ruta = public_path('img/');
        $imagen = $request->file('imagen');
        $nombreImagen=$imagen->hashName();
        $imagen->move($ruta, $nombreImagen);
        session(['usuarioImg' => $nombreImagen]);
        $usu = $request->usuario;
        
        User::where('usuario', $usu)
            ->update(['imagen'=>$nombreImagen]);


            $megustas = Megusta::all();
            $usuarios = User::all();
            $megustas = Megusta::all();
            $ciudades = Ciudad::all();
            $hobbies = Hobbie::all();
            $hobbieUsuario = Usuariohobbie::all();
    
            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
                'ciudades' => $ciudades,
                'hobbies' => $hobbies,
                'hobbieUsuario'=> $hobbieUsuario,
            ];


        return view('inicio', $data);

    }

    public function nuevoHobbieUsuario(Request $request){
        $usuario = $request->usuario;
        $hobbie = $request->hobbie;
        $existe=false;

        $usuariohobbies = Usuariohobbie::all();
        foreach($usuariohobbies as $hobbieUsu){
            if(($hobbieUsu -> usuario) == $usuario){
                if(($hobbieUsu -> hobbie) == $hobbie ){
                    $existe=true;
                } 
            }
        }

        if($existe){
            $megustas = Megusta::all();
            $usuarios = User::all();
            $ciudades = Ciudad::all();
            $hobbies = Hobbie::all();
            $hobbieUsuario = Usuariohobbie::all();

            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
                'hobbies' => $hobbies,
                'ciudades' => $ciudades,
                'hobbieUsuario' => $hobbieUsuario,
            ];
    
            return view('inicio' , $data);

        }else{
            
            $nuevoHobbie = new Usuariohobbie();
            $nuevoHobbie->usuario = $usuario;
            $nuevoHobbie->hobbie = $hobbie;
            $nuevoHobbie -> save();





            $megustas = Megusta::all();
            $usuarios = User::all();
            $ciudades = Ciudad::all();
            $hobbies = Hobbie::all();
            $hobbieUsuario = Usuariohobbie::all();

            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
                'hobbies' => $hobbies,
                'ciudades' => $ciudades,
                'hobbieUsuario' => $hobbieUsuario,
            ];
    
            return view('inicio' , $data);
        }
        
     }



/* ------------REGISTRO----------------------------------------------------- */

public function registroHobbie(){
    $hobbies = Hobbie::all();
    $ciudades = Ciudad::all();

    $data = [
        'hobbies' => $hobbies,
        'ciudades' => $ciudades,
    ];

    return view('registro' , $data);
}

public function nuevoUsuario(Request $request){
    // print_r('hola');

    $usuarioNuevo = new User();

    $usuarioNuevo->usuario = $request->usuario;
    $usuarioNuevo->password = $request->password;
    $usuarioNuevo->name = $request->nombre;
    $usuarioNuevo->apellido = $request->apellido;
    $usuarioNuevo->telefono = $request->telefono;
    $usuarioNuevo->ciudad = $request->ciudad;
    $usuarioNuevo->genero = $request->genero;
    if($request->genero == 'Hombre'){
        $usuarioNuevo->imagen =  'usuarioChico.png';/* $usuarioNuevo->imagen = */
    }elseif($request->genero == 'Mujer'){
        $usuarioNuevo->imagen = 'usuarioChica.png';
    }else{
        $usuarioNuevo->imagen =  'usuarioOtro.png';
    }
    $usuarioNuevo->preferencia = $request->preferencia;

  
    $fecha =$request->fecha;
    $usuarioNuevo->fecha_nac = $fecha;
    $year=substr($fecha, 0, -6);
    $usuarioNuevo->edad = 2023-intval($year);
    $usuarioNuevo->email = $request->email;

    $usuarioNuevo->save();
    return redirect('inicio');

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

    /* ELIMINA USUARIOS */
    public function deleteUsu($usuarioId)
    {
        $usuario = User::find($usuarioId);
        $usuario -> delete();
        $usuarios = User::all();
        return view('admin.adminUsu' ,  compact('usuarios'));
    }

    /* ELIMINA CIUDADES */
    public function deleteCiudad($ciudadId)
    {
        $ciudad = Ciudad::find($ciudadId);
        $ciudad -> delete();
        $ciudades = Ciudad::all();
        return view('admin.adminCiudad' ,  compact('ciudades'));
    }

     /* ELIMINA HOBBIES */
     public function deleteHobbie($hobbieId)
     {
         $hobbie = Hobbie::find($hobbieId);
         $hobbie -> delete();
         $hobbies = Hobbie::all();
         return view('admin.adminHobbie' ,  compact('hobbies'));
     }

     /* ELIMINA CONTACTO */
     public function deleteContacta($contactaId)
     {
         $contacta = Contacta::find($contactaId);
         $contacta -> delete();
         $contactos = Contacta::all();
         return view('admin.adminContacta' ,  compact('contactos'));
     }

     /* MODIFICA HOBBIE */
     public function updateHobbie(Request $request, $hobbieId)
     { 
        $hobbies = Hobbie::all();
        foreach($hobbies as $hobbie){
            if($hobbie->id == $hobbieId){
                 $hobbie->nombre = $request->nombre;
                 $hobbie->save();
            }
        }
        return view('admin.adminHobbie' ,  compact('hobbies'));
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
            $ciudades = Ciudad::all();
            $hobbies = Hobbie::all();
            $hobbieUsuario = Usuariohobbie::all();

            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
                'hobbies' => $hobbies,
                'ciudades' => $ciudades,
                'hobbieUsuario' => $hobbieUsuario,
            ];
    
            return view('inicio' , $data);

        }else{
            $ciudades = Ciudad::all();
            $hobbies = Hobbie::all();
            $hobbieUsuario = Usuariohobbie::all();

            $mg = new Megusta();
            $mg->usuarioDaMg = $request->usuarioDaMg;
            $mg->usuarioRecibeMg = $request->usuarioRecibeMg;
            $mg -> save();

            $megustas = Megusta::all();
            $usuarios = User::all();
            $data = [
                'megustas' => $megustas,
                'usuarios' => $usuarios,
                'hobbies' => $hobbies,
                'ciudades' => $ciudades,
                'hobbieUsuario' => $hobbieUsuario,
            ];
    
            return view('inicio' , $data);
        }
        
     }

     public function quitarMg(Request $request){
        $usuarioDaMg = $request->usuarioDaMg;
        $usuarioRecibeMg = $request->usuarioRecibeMg;
        $megustas = Megusta::all();


        Megusta::where('usuarioDaMg', $usuarioDaMg)
            ->where('usuarioRecibeMg', $usuarioRecibeMg)
            ->delete();

        $megustas = Megusta::all();
        $usuarios = User::all();
        $ciudades = Ciudad::all();
        $hobbies = Hobbie::all();
        $hobbieUsuario = Usuariohobbie::all();
        $data = [
            'megustas' => $megustas,
            'usuarios' => $usuarios,
            'hobbies' => $hobbies,
            'ciudades' => $ciudades,
            'hobbieUsuario' => $hobbieUsuario,
        ];
    
        return view('inicio' , $data);
     }
}
