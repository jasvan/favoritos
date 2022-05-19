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
    @include('layauts.partials.head');
    @yield('content')
</body>

</html>
