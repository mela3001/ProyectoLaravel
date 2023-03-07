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

/* ------------HOME------------------------------------------- */
Route::get('/', HomeController::class) -> name('home'); 
Route::post('store', [adminController::class, 'store']) -> name('store');



Route::get('registro', [adminController::class, 'registroHobbie']) -> name('registro');


Route::get('inicio', [adminController::class, 'inicioPagina']) -> name('inicio');
Route::post('darMg', [adminController::class, 'darMg']) -> name('darMg');
Route::post('quitarMg', [adminController::class, 'quitarMg']) -> name('quitarMg');


/* ----------------MODIFICAR PERFIL------------------------- */
Route::put('modificarUsuario', [adminController::class, 'modificarUsuario']) -> name('modificarUsuario');
Route::put('inicio', [adminController::class, 'modificarImg']) -> name('modificarImg');
Route::post('nuevoHobbieUsuario', [adminController::class, 'nuevoHobbieUsuario']) -> name('nuevoHobbieUsuario');

/* -----------------REGISTRO---------------------------- */
Route::post('nuevoUsuario', [adminController::class, 'nuevoUsuario']) -> name('nuevoUsuario');



/* ----------------- ADMIN -------------- */

/* USUARIOS */
Route::get('adminUsu', [adminController::class, 'adminUsu']) -> name('adminUsu');
Route::get('adminUsu/{usuarioId}', [adminController::class, 'deleteUsu']) -> name('deleteUsu');

/* HOBBIES */
Route::get('adminHobbie', [adminController::class, 'adminHobbie']) -> name('adminHobbie');
Route::post('adminHobbie', [adminController::class, 'anadirHobbie']) -> name('anadirHobbie');
Route::get('adminHobbie/{hobbieId}', [adminController::class, 'deleteHobbie']) -> name('deleteHobbie');

/* CIUDADES */
Route::get('adminCiudad', [adminController::class, 'adminCiudad']) -> name('adminCiudad');
Route::post('adminCiudad', [adminController::class, 'anadirCiudad']) -> name('anadirCiudad');
Route::get('adminCiudad/{ciudadId}', [adminController::class, 'deleteCiudad']) -> name('deleteCiudad');

/* CONTACTA */
Route::get('adminContacta', [adminController::class, 'adminContacta']) -> name('adminContacta');
Route::get('adminContacta/{contactaId}', [adminController::class, 'deleteContacta']) -> name('deleteContacta');
