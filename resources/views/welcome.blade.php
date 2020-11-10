<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css" />
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <title> {{ config('app.name') }}</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"> <i class="fas fa-home"></i> Home</a>
                    @else
                        <a href="{{ route('login') }}"> <i class="fas fa-sign-in-alt"></i> Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"> <i class="fas fa-user-plus"></i> Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <span class="inner"> {{ config('app.name') }}</span>
                </div>

                <div class="links">
              
                    <a href="https://trello.com/b/KqZd6nte/mentalconnect" target="_blank">Trello</a>
                    <a href="https://github.com/pryzma/mentalconnect" target="_blank">GitHub</a>
                </div>
                <div class="landing_page_img"></div>
            </div>
        </div>
    </body>
</html>
