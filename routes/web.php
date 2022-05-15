<?php

use App\Http\Controllers\favoritosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hemeController;


Route::get('/', hemeController::class);

Route::controller(favoritosController::class)->group(function(){
    Route::get('favoritos','index');
    Route::get('favoritos','login');
    Route::get('favoritos','registro');    
    Route::get('favoritos/{id}/{desripcion}/{url}','favoritos');  
});


/*

Route::get('favoritos/{variable}/{variable1}', function ($variable, $variable1) {
    return " bienvenido a favoritos variable $variable,  mas $variable";
});

*/