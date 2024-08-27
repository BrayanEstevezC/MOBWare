<!-- resources/views/layouts/main.blade.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mobware Solutions')</title>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset ('css/layout.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('css/pages.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link type="icon" href="{{ asset('images/svg/FavIcon-MOBWARE.svg') }}" rel="icon">
    <style>


    </style>
    @yield('additional_css')
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark  " id="navbar">
        <div class="container ">
            <a class="navbar-brand " href="{{ route('home') }}">
                <img class="logo-nav" src="{{ asset('images/svg/Icon-MOBWARE.svg') }}" alt="Mobware Solutions">

                <img class="letters" src="{{ asset('images/svg/Letters.svg') }}" alt="Mobware Solutions">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav text-center ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">SOBRE NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('benefits') }}">BENEFICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('team') }}">NUESTRO EQUIPO</a>
                    </li>
                </ul>
                <ul class="px-5">
                </ul>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-contactanos d-none d-lg-block">CONTACTANOS</a>
        </div>
    </nav>

    <main class="">
        @yield('content')
    </main>

    <footer class="">
        <p>Hola</P>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- ////////////////////////////////////////// -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- ////////////////////////////////////////// -->
    <script src="js/layout.js"></script>
    <script src="js/animation.js"></script>

    @yield('scripts')
</body>

</html>