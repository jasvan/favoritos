@extends('layauts.plantilla')

@section('tittle', 'Principal')

@section('content')

    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" >Home</a>
        @else
            <a href="{{ route('login') }}" >Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" >Register</a>
            @endif
        @endauth
    </div>


@endsection
