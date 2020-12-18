<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/app.css" />
        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
        <title>{{ config('app.name') }}</title>
    </head>
    <body class="font-sans">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}"> <i class="fas fa-home"></i> Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"> <i class="fas fa-sign-in-alt"></i> Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"> <i class="fas fa-edit"></i> Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title">
                    <span class="inner">{{ config('app.name') }}</span>
                </div>
                <div class="splash"></div>
                <div class="links">
                    <a href="https://trello.com/b/KqZd6nte/mentalconnect" target="_blank"> <i class="fab fa-trello"></i> Trello</a> 
                    <a href="https://github.com/pryzma/mentalconnect" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
