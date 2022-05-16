<?php

namespace App\Http\Controllers;

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
        return post('favoritos.login');
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

    public function store(Request $request){

       
    }
   
}