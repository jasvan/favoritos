<?php

use App\Http\Controllers\favoritosController;
use App\Http\Controllers\hemeController;
use App\Http\Controllers\usuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', hemeController::class)->name('home');

Route::controller(usuarioController::class)->group(function () {
        
    Route::get('favoritos/login', 'loginControllerSession')->name('login');
    Route::get('favoritos/registroUsuario', 'Usuario')->name('cargarVista.registro');
    Route::post('favoritos/registroUsuario', 'user')->name('crearNuevo.registro');
});

Route::controller(favoritosController::class)->group(function () {
   
   
    Route::get('favoritos/nuevoFavorito', 'favoritosControllerGet')->name('favorito_nuevo');
    Route::post('favoritos/nuevoFavorito', 'favoritoNuevoPost')->name('favoritoNuevo');
    Route::get('favoritos/favoritos', 'favoritoController')->name('favoritos');
});