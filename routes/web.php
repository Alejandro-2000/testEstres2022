<?php

use Illuminate\Support\Facades\Route;
/*ruta del controlador*/
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\EstadoCivilController;
use App\Http\Controllers\ProgramaEstudioController;
use App\Http\Controllers\GradoAcademicoController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\EncuestasController;
use App\Http\Controllers\RespuestasController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ResultadoController;

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
Route::get('/home', function () {
    return view('layouts.template');
});
//ruta para el controlador y la vista personas
Route::resource("personas",PersonasController::class);
Route::resource("sexo",SexoController::class);
Route::resource("estadocivil",EstadoCivilController::class);
Route::resource("programaestudio",ProgramaEstudioController::class);
Route::resource("gradoacademico",GradoAcademicoController::class);
Route::resource("preguntas",PreguntasController::class);
Route::resource("docentes",DocentesController::class);
Route::resource("administradores",AdministradoresController::class);
Route::resource("encuestas",EncuestasController::class);
Route::resource("respuestas",RespuestasController::class);

Route::get('/inicio', function () {
    return view('layouts.template_user');
});
Route::resource("user/pruebas",PruebaController::class);
Route::resource("user/test",TestController::class);
Route::resource("user/resultados",ResultadoController::class);
