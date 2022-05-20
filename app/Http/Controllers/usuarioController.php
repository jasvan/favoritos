<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class usuarioController extends Controller
{

    public function loginControllerSession(Request $request)
    {
        $query = new User();
        $query = DB::select('select name, email from users');
        echo " no compara no hay session";
        return view('favoritos.login');
        // if ($request->nombre == $query['name'] && $request->email == $query['email']) {
        //     echo "compara";
        // } else {
        //     echo " no compara no hay session";
        //     return view('favoritos.login');
        // }
    }
    public function Usuario()
    {
        return view('favoritos.registroUsuario');
    }
    
    // crear nuevo registro ok
    public function user(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if ($user) {
            $user->save();
            return view('favoritos.login');
            exit();
        } else
            return view('favoritos.404');
    }
}