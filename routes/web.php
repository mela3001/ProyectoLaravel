<?php

use App\Http\Controllers\adminController;
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
Route::post('/', [HomeController::class, 'store']) -> name('store');

Route::get('adminUsu', [adminController::class, 'adminUsu']) -> name('adminUsu');

Route::get('adminHobbie', [adminController::class, 'adminHobbie']) -> name('adminHobbie');
Route::post('adminHobbie', [adminController::class, 'anadirHobbie']) -> name('anadirHobbie');

Route::get('adminCiudad', [adminController::class, 'adminCiudad']) -> name('adminCiudad');
Route::post('adminCiudad', [adminController::class, 'anadirCiudad']) -> name('anadirCiudad');

Route::get('adminContacta', [adminController::class, 'adminContacta']) -> name('adminContacta');


Route::get('registro', [adminController::class, 'registroHobbie']) -> name('registro');


Route::get('inicio', [adminController::class, 'inicioPagina']) -> name('inicio');
Route::post('darMg', [adminController::class, 'darMg']) -> name('darMg');