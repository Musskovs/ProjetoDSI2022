<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href={{ URL::asset('css/common.css'); }} rel="stylesheet">
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="{{ route('curso.index') }}" class="nav-link px-2 text-white">Cursos</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Instituições</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    @if (session('usuario'))
                        <a type="button" class="btn btn-outline-light me-2"> {{ session('usuario.nome') }}<a>
                        <a href="{{ route('usuario.logout') }}" type="button" class="btn btn-outline-danger me-2">Logout</a>
                    @else
                        <a href="{{ route('usuario.index') }}" type="button" class="btn btn-outline-light me-2">Login</a>
                        <a href="{{ route('usuario.criar') }}" type="button" class="btn btn-warning">Sign-up</a>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <main class="container pt-2">
        @yield('body')
    </main>

</body>
</html>
