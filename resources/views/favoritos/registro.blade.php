@extends('layauts.plantilla')
@section('tittle', 'Favoritos')

@section('content')

    <div class="container container-style">
        <form action="{{ route('registro1') }}" method="POST">
            @csrf
            <fieldset>
                <legend class="tittle">Personal información</legend>

                <label for="nombre">Usuario
                    <input class="input" type="text" name="name" />
                </label>

                <label for="email">Correo
                    <input class="input" type="email" id="email" name="email" />
                </label>

                <label for="contrasena">Contraseña
                    <input class="input" type="password" name="password" />
                </label>

                <label for="contrasena2">Confirme su contraseña
                    <input class="input" type="password2" name="password2" />
                </label>

                <input type="checkbox" name="visible" id="visible">

                <input type="submit" name="" id="submit" value="Registrar" />
            </fieldset>
        </form>
    </div>

@endsection
