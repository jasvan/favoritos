@extends('layauts.plantilla')
@section('tittle', 'Favoritos' )
{{-- . $descrption, $url, $id --}}
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
                    <div class='tr'>
                        <div id="td1">
                        </div>
                        {{-- {{ $description }} --}}
                        <div id="td2">
                            <a href="">
                                {{-- {{ $url }} --}}
                            </a>
                        </div>

                        <div id="td3">
                            <div class='btntd penzil'>
                            </div>
                        </div>
                        <div id="td5">
                            <div class='btntd trash'>
                                {{-- <input type="hidden" name=" {{ $id }} " /> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="editar">
                    <input type="hidden" id="edit">
                </div>
            </form>
            <div class='tfoot'>
                <div class='tr'>
                    <hr />
                    <div class='td'>Total paginas <strong>77</strong></div>
                </div>
            </div>
        </div>
    </div>

@endsection
