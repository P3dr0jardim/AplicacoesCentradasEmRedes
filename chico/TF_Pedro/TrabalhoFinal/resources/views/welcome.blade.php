<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->

</head>

<body>

    <ul class="nav justify-content-end">
        @if (Route::has('login'))
        <li class="nav-item">
            @auth
            <a class="nav-link" href="{{ url('/home') }}">Home</a>
        </li>
        <li class="nav-item">
            @else
            <a class="nav-link active" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
            @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
        @endif
        @endauth

    </ul>
    @endif
    <div class="jumbotron">
        <h1 class="display-4">Projeto Final!</h1>
        <p class="lead"><b>Trabalho realizado por:</b></p>
        <h7>Pedro Jardim Nº: 2015118</h7>
        <p>
            <h7>Helder Perestrelo Nº: 2015118</h7>
            <hr class="my-4">
            <p></p>
            <a class="btn btn-primary btn-lg" href="/public/ver-jogos" role="button">Ver Carros</a>
            <a class="btn btn-primary btn-lg" href="/public/ver-plataformas" role="button">Ver Motas</a>

    </div>


</body>

</html>
