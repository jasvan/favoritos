<?php

use App\Http\Controllers\favoritosController;
use App\Http\Controllers\hemeController;
use Illuminate\Support\Facades\Route;


Route::get('/', hemeController::class);

Route::controller(favoritosController::class)->group(function(){
    Route::get('favoritos','login');
    Route::get('favoritos','index');
    Route::get('favoritos','registro');    
    Route::get('favoritos/{id}/{desripcion}/{url}','favoritos'); 

    Route::post('favoritos/login', function(){

        $autentication =request()->only('correo', 'contrasena');
        if ( Auth::attempt( $autentication ) ) {
            return "login ok";
        }else{
            return "no login";
        }
    });    
     
});


/*

Route::get('favoritos/{variable}/{variable1}', function ($variable, $variable1) {
    return " bienvenido a favoritos variable $variable,  mas $variable";
});

*/