<?php

use App\Http\Controllers\favoritosController;
use App\Http\Controllers\hemeController;
use Illuminate\Support\Facades\Route;


Route::get('/', hemeController::class);

Route::controller(favoritosController::class)->group(function () {

    Route::get('favoritos/login', 'loginControllerGet')->name('login');

    Route::post('/favoritos/registro', 'user')->name('registro');
    Route::get('/favoritos/registro', 'registro')->name('registro1');
    
    Route::get('favoritos/nuevof', 'favoritosControllerGet')->name('favorito_nuevo'); 
    Route::post('favoritos/nuevof', 'favorito_nuevo')->name('favorito_nuevo1'); 
    
    

    Route::get('/', 'favoritoController')->name('favoritos');
    //Route::get('favoritos/favoritos', 'favoritos')->name('favoritos');
});




// Route::get('favoritos/{variable}/{variable1}', function ($variable, $variable1) {
//     return " bienvenido a favoritos variable $variable,  mas $variable";
// });
