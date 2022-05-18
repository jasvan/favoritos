@extends('layauts.plantilla')
@section('tittle', 'Favoritos')
<link rel="stylesheet" href="{{ asset('css/favoritos.css') }}">

@section('content')

    <div class='content1'>
        <div class="titulo">
            <h1>Tu lista de favoritos</h1>
        </div>

        <form method="" action="">
            <div class="contenedor">
                <table>
                    <div class="contenido">
                        <thead id="head">
                            <tr>
                                <th id="th1">TITULO</th>
                                <th id="th2">URL</th>
                                <th id="th3">DESCRIPCIÓN</th>
                                <th id="th4">CATEGOÍA</th>
                                <th id="th5">EDITAR</th>
                                <th id="th6">OPCIÓN</th>
                            </tr>
                        </thead>
                    </div>
                    <tbody>
                        @foreach ($datos as $favoritos)
                            <tr id="color">
                                <td id="td1"> {{ $favoritos->titulo }} </td>
                                <td id="td2">
                                    <a href="">
                                        {{ $favoritos->url }}
                                    </a>
                                </td>
                                <td id="td3"> {{ $favoritos->categoria }}</td>
                                <td id="td4"> {{ $favoritos->descripcion }}</td>
                                <td id="td5">
                                    <div class='btntd penzil'>
                                    </div>
                                </td>
                                <td id="td6">
                                    <div >
                                        <button class='btntd trash'></button>
                                        <input type="hidden" name=" {{ $favoritos->id }} " />
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </form>
        <tfoot>
            <div class='section-pagina'>
                <hr />
                <div class='paginate'> Total paginas <strong>{{ $datos->render() }}</strong></div>
            </div>  
    </div>

@endsection
