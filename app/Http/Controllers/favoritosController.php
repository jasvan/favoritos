<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use Illuminate\Http\Request;


use function PHPUnit\Framework\isEmpty;

class favoritosController extends Controller
{
    //rutas de navegacion
    public function index()
    {
        return view('favoritos.index');
    }

    
    
    public function favoritos()
    {
        return view('favoritos.favoritos');
    }

    public function favoritosControllerGet()
    {
        return view('favoritos.nuevoFavorito');
    }

    // consultas
     

    public function favoritoController()
    {
        $datos = Favorito::simplePaginate(3);
        return view('favoritos.favoritos', compact('datos')); // ,['datos' => $selectFavoritos]
    }

    //insertar datos    

    public function favoritoNuevoPost(Request $request)
    {
        $favorito = new Favorito();
        $favorito->titulo = $request->titulo;
        $favorito->url = $request->url;
        $favorito->categoria = $request->categoria;
        $favorito->descripcion = $request->descripcion;
        $favorito->visible = $request->visible;
        $favorito->borrado = 0;
        if ($favorito) {
            $favorito->save();
            return view('favoritos.nuevoFavorito');
        } else {
            return "no recive datos";
        }
    }
}