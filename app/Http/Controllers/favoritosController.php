<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class favoritosController extends Controller
{
    //rutas de navegacion
    public function index()
    {
        return view('favoritos.index');
    }

    public function registro()
    {
        return view('favoritos.registro');
    }

    public function loginControllerGet()
    {
        return view('favoritos.login');
    }
    public function favoritos()
    {
        return view('favoritos.favoritos');
    }

    public function favoritosControllerGet()
    {
        return view('favoritos.nuevof');
    }

    // consultas


    public function favoritoController()
    {
        $datos = Favorito::simplePaginate(3);
        return view('favoritos.favoritos', compact('datos')); //['datos' => $selectFavoritos]
    }

  
    //insertar datos

    public function user(Request $request)
    {
        $user = new User();
        $user->name = $request->name->require();
        $user->email = $request->email->unique()->require();
        $user->password = $request->password1->require();
        if (!isEmpty($user)) {
            $user->save();
        } else
            return false;
    }

    public function favorito_nuevo(Request $request)
    {
        $favorito = new Favorito();
        $favorito->titulo = $request->titulo->require();
        $favorito->url = $request->url->url();
        $favorito->categoria = $request->categoria->default('Categoria no disponible');
        $favorito->descripcion = $request->descripcion->default('Descripción no disponible');
        $favorito->visible = $request->visible->default(0);
        if (!isEmpty($favorito)) {
            $favorito->save();
        } else
            return false;
    }
}
