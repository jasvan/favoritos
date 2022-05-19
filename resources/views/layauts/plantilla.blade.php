<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/menu.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/favoritos.css') }}"> --}}
</head>

<body>
    
    <div class="section_menu">
        <div class="table2">
            <div class='thead2'>
                <fieldset>
                    <a href="{{ route('login') }}" class="link">Ingresar</a>
                    <a href="{{ route('registro') }}" class="link">Unirse</a>
                    <a href="{{ route('favoritos') }}" class="link">Favoritos</a>
                    <a href="{{ route('favorito_nuevo') }}" class="link">Nuevo favorito</a>
                </fieldset>
            </div>
        </div>

    </div>
    @yield('content')
</body>

</html>
