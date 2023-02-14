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

Route::get('/', HomeController::class);


Route::controller(CursoController::class)->group(function(){
    //pagina principal
    Route::get('cursos', 'index');
    //crea curso
    Route::get('cursos/create', 'create');
    //muestra curso
    Route::get('cursos/{curso}', 'show');  
});








// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
//     if($categoria){
//         return "aodfig: $curso de $categoria";
//     }else{
//         return "aodfig: $curso";
//     }
    
// });
