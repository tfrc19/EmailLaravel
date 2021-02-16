<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    $datos=[
        "titulo"=>"Hola envio de email correo deseado",
        "Contenido"=>"Esto es una prueba de envio"
    ];
    Mail::send("emails.test",$datos,function($mensaje){
        $mensaje->to("telmo_ferc@hotmail.com","Fernando")->subject("Prueba del correo");

    });
});
Route::get('/email',function(){
    
    return view('emails.test');

});
