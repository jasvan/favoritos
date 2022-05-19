@extends('layauts.plantilla')
@section('tittle', 'Favoritos')

@section('content')

    <div class="container container-style">
        <form action="{{ route('favorito_nuevo') }}" method="POST">
            @csrf
            <fieldset>
                <legend class="tittle">
                    Agregar nuevos favoritos
                </legend>

                <label for="titulo">
                    Titulo
                    <input class="input" type="text" name="titulo" id="titulo" />
                </label>

                <label for="url">
                    Url
                    <input class="input" type="text" name="url" id="url" />
                </label>

                <label for="categoria">
                    Categoria
                    <input class="input" type="password" name="categoria" id="categoria" />
                </label>

                <label for="descripcion">
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
