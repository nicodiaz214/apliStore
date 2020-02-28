<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>@yield('title', 'ApliSports')</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
            <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,700&display=swap" rel="stylesheet">
            <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico')}}">
            <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
        </head>
        <body>
            <div class="container-fluid">

                <header id="home">
                    <nav class="navbar navbar-expand-lg navbar-light " id="barra-inicio">
                        <a class="navbar-brand" title="ApliSport - Tienda de Apps Deportivas" href="/"><img src=""> ApliSports </a>
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
                            <li class="nav-item" id="nav-links">
                              <a class="nav-link" href="#about-us">Sobre Nosotros</a>
                            </li>
                            <li class="nav-item" id="nav-links">
                              <a class="nav-link" href="#contact">Contacto</a>
                            </li>
                            @guest
                            <li class="nav-item" id="nav-links">
                                <a class="nav-link" href="/login">Login</a>
                              </li>
                              <li class="nav-item" id="nav-links">
                                <a class="nav-link" href="/register">Register</a>
                              </li>
                            @else
                              <li class="nav-item" id="nav-links">
                                <a class="nav-link" href="/userprofile">{{ Auth::user()->name }}</a>
                              </li>
                                <li class="nav-item" >
                                    <a class="nav-link" title="Logout" id="nav-links" href="{{ route('logout') }}"
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
                @guest
                <section class="subscription">
                    <div class="jumbotron">
                      <h1 class="display-4">Conoces ApliSports?</h1>
                      <p class="lead">Descubrí las aplicaciones deportivas que marcan tendencia!</p>
                      <hr class="my-8">
                      <p>Si sos desarrollador, ademas de comprar apps, también podes vender las tuyas en nuestro sitio.</p>
                      <p class="lead">
                      <a class="btn btn-primary btn-lg" id="btn-subscription" href="/register" role="button">Registrate!</a>
                      </p>
                      </div>
                </section>         
                @endguest
                <section class="stock">
                    <h2> Nuestras Apps </h2>
                        @foreach ($categories as $category)
                                <article class="stock-productos">
                                <h3> <strong>{{ $category->name }} </strong></h3>
                                <a href="/categories/{{$category->id}}"><img src="{{ asset($category->image) }}" alt=""></a>
                                </article>
                        @endforeach
                </section>

            <section class="about-us" id="about-us">
                <div class="about-us-info">
                    <span>ApliSports</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate corporis beatae alias, neque unde, obcaecati totam explicabo harum recusandae quaerat pariatur? Quo ipsam, aliquam totam sequi in eveniet, fugiat ut atque hic quae ullam laboriosam itaque iusto ab. Culpa laborum animi laudantium, error odio delectus sed maiores rem consequatur facere!</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia quae magnam soluta explicabo deleniti laborum neque, nobis minima libero vitae odit similique nam, amet obcaecati distinctio. Nemo earum alias consequatur doloribus eos exercitationem, libero quos atque nam laborum magnam adipisci qui in quasi possimus facere laudantium nulla illum. Voluptates, libero.</p>     
                </div>
            </section>                    

                <footer class='footer-contact'>
                    <div class="contact" id="contact">
                    <span>Contacto</span>
                    <form action= "/" method="post">
                    @csrf 
                        <div class="row">
                        <div class="col-xl-6">
                            <input class="form-contact" type="text" class="form-control" name="name" id="name" placeholder="Nombre" autocomplete="none" required >
                        </div>
                        <div class="col-xl-6">
                            <input class="form-contact" type="text" class="form-control" name="lastname" id="lastename" placeholder="Apellido" autocomplete="none" required>
                        </div>
                        <div class="col-xl-6">
                            <input class="form-contact" type="text" class="form-control" name="phone" id="telephone" placeholder="Telefono" autocomplete="none" required>
                        </div>
                        <div class="col-xl-6">
                            <input class="form-contact" type="email" class="form-control" name="email" id="mail" placeholder="Email" autocomplete="none" required>
                        </div>
                        <div class="col-xl-12">
                            <textarea class="form-contact textarea" class="form-control" name="message" id="message" rows="6" placeholder="Mensaje" autocomplete="none" required></textarea>
                        </div>
                        <div class="col-xl-12">
                        <input class="checkbox" type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="checkbox-term" for="exampleCheck1">Acepto los términos y condiciones.</label>
                            </div>
                            <button class="btn-contact" type="submit">Enviar</button>
                        </div>
                    </form>
                    <div class="contact-bottom">
                    <a href="mailto:contacto@apliSports.com?Subject=Consulta" id="correo">contacto@aplisports.com</a>
                    <a href="https://api.whatsapp.com/send?phone=5491137929212" id="phone">+ 54 11 4567 1234</a>
                    </div>
                    <div class="social-media-btn">
                            <a href="http://www.facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                            <a href="http://www.twitter.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                            <a href="http://www.instagram.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>                   
                        </div>
                        <p>O'higgins 2191, 2do E. CABA</p>
                        <p>©ApliSports 2020. Todos los derechos reservados.</p>
                    </div>
                </footer>

                <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
                <script src="{{ asset('js/main.js') }}"></script> 

            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>           
        </body>
        </html>