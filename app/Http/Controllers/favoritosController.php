<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\User;
use Illuminate\Http\Request;

class favoritosController extends Controller
{
    public function index()
    {
        return view('favoritos.index');
    }

    public function registro()
    {
        return view('favoritos.registro');
    }    

    public function login()
    {
        return view('favoritos.login');
    }

    public function favoritos($id, $description, $url)
    {
        return view(
            'favoritos.favoritos',
                compact('id'),
                compact('description'),
                compact('url')
        );
    }

    public function user(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request-> email;
        $user->password = $request->password1;
        // $user->save();
    }

   public function favorito_nuevo(Request $request)
   {
       $favorito = new Favorito();
       $favorito->titulo = $request->
        titulo->validar([
            'datos' => 'requerido|anulable',
        ]); 
       $favorito->url = $request->
        url->validar([
            'datos' => 'requerido|anulable',
        ]);
       $favorito->categoria = $request->categoria-> validar ([
            'datos' => 'requerido|anulable' ,
        ]); 
       $favorito->descripcion = $request->descripcion->default('Descripción no disponible');
       $favorito->visible = $request->visible; 
       $favorito->save();
   }
}
