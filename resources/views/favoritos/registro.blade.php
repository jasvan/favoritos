@extends('layauts.plantilla')
@section('tittle', 'Favoritos')

@section('content')

    <div class="container container-style">
        <form action="" method="post">
            <fieldset>
                <legend class="tittle">Personal información</legend>

                <label for="nombre">Usuario
                    <input class="input" type="text" name="nombre" id="nombre" />
                </label>

                <label for="email">Correo
                    <input class="input" type="email" name="email" id="email" />
                </label>

                <label for="contrasena">Contraseña
                    <input class="input" type="password" name="contrasena1" id="password1" />
                </label>

                <label for="contrasena2">Confirme su contraseña
                    <input class="input" type="password2" name="contrasena2" id="password2" />
                </label>

                <input type="submit" name="" id="submit" value="Registrar" />
            </fieldset>
        </form>
    </div>

@endsection
