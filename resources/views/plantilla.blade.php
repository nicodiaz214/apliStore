<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>@yield('title')</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
            <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
        </head>
        <body>
            <div class="container-fluid">

                <header id="home">
                    <nav class="navbar navbar-expand-lg navbar-light" id="barra-inicio">
                        <a class="navbar-brand" href="/"><img src="img/logo.png" alt="">ApliSports</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active" id="nav-links">
                              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item" id="nav-links">
                              <a class="nav-link" href="/applications">Apps</a>
                            </li>
                            @guest
                            <li class="nav-item" id="nav-links">
                                <a class="nav-link" href="/login">Login</a>
                              </li>
                            @else
                            <li class="nav-item" id="nav-links">
                                <a class="nav-link" href="/userprofile">{{ Auth::user()->name }}</a>
                              </li>
                                <li class="nav-item" >
                                    <a class="nav-link" id="nav-links" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-times"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                            @endguest
                          </ul>
                      </nav>
                </header>
                <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close"
                        data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
                @endforeach
                </div>
  
                @yield('login')
                @yield('register')
                @yield('applications')
                @yield('categories')
                @yield('applications-show')
                @yield('content')

               <section class="login-form">

               </section>

              <footer>
              <p>©ApliStore 2020. Todos los derechos reservados.</p>
              </footer>

                <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
                <script src="js/main.js"></script>

            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>           
        </body>
        </html>