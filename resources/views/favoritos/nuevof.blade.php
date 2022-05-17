@extends('layauts.plantilla')
@section('tittle', 'Favoritos')

@section('content')

    <div class="container container-style">
        <form action="" method="POST">
            @csrf
            <fieldset>
                <legend class="tittle">
                    Agregar nuevos favoritos
                </legend>

                <label for="nombre">
                    Titulo
                    <input class="input" type="text" name="titulo" id="titulo" />
                </label>

                <label for="email">
                    Url
                    <input class="input" type="text" name="url" id="url" />
                </label>

                <label for="contrasena">
                    Categoria
                    <input class="input" type="password" name="categoria" id="categoria" />
                </label>

                <label for="contrasena2">
                    Descripcion
                    <textarea class="input" name="descripcion" id="textare">
                        </textarea>
                </label>

                <div class="checkbox">
                    <input type="checkbox" name="visible" id="visible" />
                    <label for="ocultar">
                        Ocultar
                    </label>
                </div>

                <input type="submit" name="guardar" value="guardar" id="submit" />
            </fieldset>
        </form>
    </div>
@endsection
