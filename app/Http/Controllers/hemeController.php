<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hemeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}