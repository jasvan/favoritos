<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/menu.css') }}">
</head>

<body>
     <div class="section_menu">
        <div class="table">
            <div class='thead'>
                <fieldset>
                    <a href="" class="link">Ingresar</a>
                    <a href="http://" class="link">Unirse</a>
                    <a href="http://" class="link">Favoritos</a>                    
                </fieldset>
            </div>
        </div>

    </div>
    @yield('content')
</body>

</html>
