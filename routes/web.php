<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController; //importado el controlador 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class) -> name('home'); 


/* Route::controller(CursoController::class)->group(function(){
    //pagina principal
    Route::get('cursos', 'index');
    //crea curso
    Route::get('cursos/create', 'create');
    //muestra curso
    Route::get('cursos/{curso}', 'show');  
}); */

Route::view('registro', 'registro') -> name('registro');
Route::view('adminUsu', 'adminUsu') -> name('adminUsu');
Route::view('adminHobbie', 'adminHobbie') -> name('adminHobbie');
Route::view('adminCiudad', 'adminCiudad') -> name('adminCiudad');








// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
//     if($categoria){
//         return "aodfig: $curso de $categoria";
//     }else{
//         return "aodfig: $curso";
//     }
    
// });
