<?php

use App\Http\Controllers\favoritosController;
use App\Http\Controllers\hemeController;
use Illuminate\Support\Facades\Route;


Route::get('/', hemeController::class);



// Route::get('favoritos/index', [favoritosController::class, 'index']);
//Route::get('favoritos/login', [favoritosController::class, 'login']);
// Route::get('favoritos/registro', [favoritosController::class, 'registro']);
// Route::post('favoritos/registro', [favoritosController::class, 'user'])->name('favoritos.user');
// Route::post('favoritos', [favoritosController::class, 'favorito_nuevo'])->name('favoritos.favorito_nuevo');
// Route::get('favoritos/{id}/{desripcion}/{url}', 'favoritos');

Route::controller(favoritosController::class)->group(function()
{
    Route::get('favoritos/index', 'index')->name('favoritos.index');
    Route::get('login','login')->name('favoritos.login');   
    Route::get('favoritos/{id}/{desripcion}/{url}','favoritos')->name('favoritos.favoritos');      
    Route::get('favoritos/registro','user')->name('favoritos.registro'); 
    Route::post('favoritos', 'store')->name('favoritos.store');
    Route::post('favoritos', 'favorito_nuevo')->name('favoritos.favorito_nuevo');
    
     
});




// Route::get('favoritos/{variable}/{variable1}', function ($variable, $variable1) {
//     return " bienvenido a favoritos variable $variable,  mas $variable";
// });
