<?php

use App\Http\Controllers\Seccion2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController; //forma una de cargar controllers
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/escribeme', function () {
    return "contactame";
}) ->name ("contacto"); //ruta con nombreph

Route::get('/custom', function () {
    $nombre ="antonio de jesus";
    $apellido ="cruz guerrero";
    $telefono ="4499303065";
    $direccion = "nacionalismo 194";
    $data= ['nombre' => $nombre,"apellido" => $apellido,"telefono" => $telefono,"direccion" => $direccion];
    return view ('custom',$data);
});

Route::get('/test',[TestController::class,'test']);

Route::get("/seccion2",[Seccion2Controller::class,"index"]);



