@extends('layauts.plantilla')
@section('tittle', 'index')
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@section('content')
    <div class="section_menu">
        <div class="table">
            <div class='thead'>
                <fieldset>
                    <div class="dropdown-menu">                        
                        <a class="dropdown-item" href="{{route('login')}}">Login</a>
                        <a class="dropdown-item" href="{{route('registro')}}">Registro</a>
                        <a class="dropdown-item" href="">Favoritos</a>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

@endsection
