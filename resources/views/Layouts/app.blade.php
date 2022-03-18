<html>
    <head>
        <title>NLM - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg text-navbar-light fixed-top" style="background-color: black">
            <a class="navbar-brand">NLM</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Cursos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Bobotes</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        {{--Al llamar un elemento por su nombre desde --}}
       {{-- @section('sidebar')

        @show--}}
 {{-- Este container es para boostrap y no se puede cambiar--}}
        <div class="container">
            <br>
            @yield('content')
        </div>
    </body>
</html>
