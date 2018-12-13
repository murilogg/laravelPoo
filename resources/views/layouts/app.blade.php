<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Poo PHP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style=" background:-webkit-gradient(linear, left top, left bottom, from(silver ), to(#383d41))">
            <div class="container" >
                <a class="navbar-brand" style="color:white" href="{{ url('/') }}"><h4>PAGINA PRINCIPAL</h4></a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        <!-- LOGIN FICAVA AQUI -->

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style=" background:-webkit-gradient(linear, left bottom, left top, from(white ), to(silver))">
            @yield('content')
        </main>
    </div>
</body>
</html>
