<?php

use Illuminate\Support\Facades\Route;
/*ruta del controlador*/
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\SexoController;

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

Route::get('/', function () {
    return view('landing.landing');
});
Route::get('/About', function (){
    return view('about');
});
Route::get('/Portafolio', function (){
    return view('portafolio');
});
Route::get('/Contact', function (){
    return view('contact');
});
Route::get('/login',function (){
    return view('landing.login');
});
Route::get('/registro',function (){
    return view('landing.registro');
});
///////////////////////////////////////////////////
Route::get('/inicio', function () {
    return view('layouts.template');
});
//ruta para el controlador y la vista personas
Route::resource("personas",PersonasController::class);
Route::resource("sexos",SexoController::class);

