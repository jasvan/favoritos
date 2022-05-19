<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function loginControllerSession(Request $request)
    {
        $query = new User();
        $query = DB::select('select name, email from users');

        if($request->nombre == 'name'){
            echo "compara";

        }else{
            echo " no compara";
            return view('favoritos.login');
        }


        // return view('favoritos.login');
        
    }

    public function favoritoController()
    {
        $datos = Favorito::simplePaginate(3);
        return view('favoritos.favoritos', compact('datos')); //['datos' => $selectFavoritos]
    }


    //insertar datos

    public function user(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if ($user) {
            $user->save();
            return view('favoritos.login');
        } else
            return "recive datos";
    }

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
            return view('favoritos.nuevof');
        } else {
            return "no recive datos";
        }
    }
}
