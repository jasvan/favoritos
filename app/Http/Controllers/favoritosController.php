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
        $user->email = $request->email;
        $user->password = $request->password1;
        $user->save();
    }

   public function favorito_nuevo(Request $request)
   {
       $favorito = new Favorito();
       $favorito->titulo = $request->titulo; 
       $favorito->url = $request->url; 
       $favorito->categoria = $request->categoria; 
       $favorito->descripcion = $request->descripcion; 
       $favorito->visible = $request->visible; 
       $favorito->save();
   }
}
