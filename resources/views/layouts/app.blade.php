<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Agenda -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>

    <!-- URL que engloba todo -->
    <script type="text/javascript">
        <!-- Codifica los datos y obtiene la url -->
        var baseURL = {!! json_encode(url('/')) !!}
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="container mt-1" style="background-color: #52BE80">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('secretaria')}}">Secretaria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('curso.index')}}">Cursos</a>
            </li>

            @if(auth()->guest())

            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Iniciar sesión</a>
            </li>

            @else

            <li class="nav-item">
                 <a class="nav-link" href="{{route('user.index')}}">Usuarios</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('evento')}}">Agenda</a>
            </li>

            <li class="nav-item">
                <form action="{{route('logout')}}" method="POST">
                   <input type="submit" value="logout">
                   @csrf
                </form>
            </li>

            @endif

        </ul>
    </div>
</nav>
<!-- Agenda -->
<script src="{{ asset('js/agenda.js') }}" defer></script>

        <main class="py-4">
            @yield('content')
        </main>


<footer class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div>
    <!-- Facebook -->
    <a class="btn btn-primary" style="background-color: #55acee;" href="http://twitter.com" role="button">
        <i class="fab fa-twitter me-2"></i>Twitter
    </a>
    <!-- Twitter -->
    <a class="btn btn-primary" style="background-color: #3b5998;" href="http://facebook.com" role="button">
        <i class="fa fa-facebook me-2"></i>Facebook
    </a>
    </div>
</footer>

</body>
</html>