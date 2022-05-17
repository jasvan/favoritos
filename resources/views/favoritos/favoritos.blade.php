@extends('layauts.plantilla')
@section('tittle', 'Favoritos')
<link rel="stylesheet" href="{{ asset('css/favoritos.css') }}">

@section('content')

    <div class='content'>
        <div class="titulo">
            <h1>Tu lista de favoritos</h1>
        </div>
        <div class="table">
            <div class='thead'>
                <div class='tr'>
                    <div id="url1" class='th'>Titulo</div>
                    <div id="url2" class='th'>Url</div>
                    <div id="url3" class='th'>Editar</div>
                    <div id="url5" class='th opcion'>Opcion</div>
                </div>
            </div>
            <form action="" method="POST">
                <div class='tbody'>

                    @foreach ($datos as $favoritos)
                    
                    <div class='tr'>

                        <div id="td1">
                            {{$favoritos->titulo}}
                        </div>

                        <div id="td2">
                            <a href="">
                                {{ $favoritos->url }}
                            </a>
                        </div>

                        <div id="td3">
                            <div class='btntd penzil'>
                            </div>
                        </div>

                        <div id="td5">
                            <div class='btntd trash'>
                                <input type="hidden" name=" {{ $favoritos->id }} " />
                            </div>
                        </div>

                    </div>

                    @endforeach

                </div>
                <div class="editar">
                    <input type="hidden" id="edit">
                </div>
            </form>
            
        </div>
        <div class='tfoot'>
                <div class='section-pagina'>
                    <hr />
                    <div class='paginate'> Total paginas <strong>{{$datos ->render()}}</strong></div>
                </div>
            </div>
    </div>

@endsection
