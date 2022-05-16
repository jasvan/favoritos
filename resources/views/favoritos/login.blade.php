@extends('layauts.plantilla')
@section('tittle', 'index')


@section('content')
<div class="container container-style">
    <form action="" method="POST">
       @csrf
        <fieldset>
            <legend class="tittle">Personal information</legend>

            <label for="nombre">Usuario
                <input class="input" type="text" name="nombre" id="nombre" />
            </label>
            <label for="contrasena">Contraseña
                <input class="input" type="password" name="contrasena1" id="password1" />
            </label>
            <input type="submit" name="" id="submit" value="Registrar" />
        </fieldset>
    </form>
</div>
@endsection
