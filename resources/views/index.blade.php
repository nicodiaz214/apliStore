<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
            <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/estilo.css">
        </head>
        <body>
            <div class="container-fluid">

                <header id="home">
                    <nav class="navbar navbar-expand-lg navbar-light" id="barra-inicio">
                        <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active" id="nav-links">
                              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item" id="nav-links">
                              <a class="nav-link" href="#">Apps</a>
                            </li>
                            <li class="nav-item" id="nav-links">
                                <a class="nav-link" href="#">Login</a>
                              </li>
                              <li class="nav-item" id="nav-links">
                                <a class="nav-link" href="#">Register</a>
                              </li>
                              <li class="nav-item" id="nav-links">
                                <a class="nav-link" href="#contact">Contacto</a>
                              </li>
                          </ul>
                      </nav>
                </header>

    <section class="products-off">
    <div class="products-off-tittle"><h2>Aplicaciones</h2></div>
    <div class="products-list">

    <div class="product-card">
        <a href=""><img src="img/chat.png" alt=""></a>
        <h5 class="product-tittle">Chat</h5>
        <p class="product-description">Conectate con tu gente.</p>
        <button class="btn-buy"> <a href="#">ver mas</a></button>
    </div>

    <div class="product-card">
        <a href=""><img src="img/fitnes.png" alt=""></a>
        <h5 class="product-tittle">Fitnes</h5>
        <p class="product-description">Ejercita tu cuerpo.</p>
        <button class="btn-buy"> <a href="#">ver mas</a></button>
    </div>

    <div class="product-card">
        <a href=""><img src="img/fotos.png" alt=""></a>
        <h5 class="product-tittle">Fotos</h5>
        <p class="product-description">Edita tus fotos.</p>
        <button class="btn-buy"> <a href="#">ver mas</a></button>
    </div>

    </div>

    <div class="products-more"><a href="#">Ver mas aplicaciones</a></div>
    </section>

                <footer>
                    <div class="contact" id="contact">
                    <span>Contacto</span>
                    <form action="index.html" method="post">
                        <div class="row">
                        <div class="col-xl-6">
                            <input class="form-contact" type="text" class="form-control" id="name" placeholder="Nombre" autocomplete="none" required >
                        </div>
                        <div class="col-xl-6">
                            <input class="form-contact" type="text" class="form-control" id="lastename" placeholder="Apellido" autocomplete="none" required>
                        </div>
                        <div class="col-xl-6">
                            <input class="form-contact" type="text" class="form-control" id="telephone" placeholder="Telefono" autocomplete="none" required>
                        </div>
                        <div class="col-xl-6">
                            <input class="form-contact" type="email" class="form-control" id="mail" placeholder="Email" autocomplete="none" required>
                        </div>
                        <div class="col-xl-12">
                            <textarea class="form-contact textarea" class="form-control" id="message" rows="6" placeholder="Mensaje" autocomplete="none" required></textarea>
                        </div>
                        <div class="col-xl-12">
                        <input class="checkbox" type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="checkbox-term" for="exampleCheck1">Acepto los términos y condiciones.</label>
                            </div>
                            <button class="btn-contact" type="submit">Enviar</button>
                        </div>
                    </form>
                    <div class="contact-bottom">
                    <a href="#" id="email">contacto@aplistore.com</a>
                    <a href="#" id="phone">+ 54 11 4567 1234</a>
                    </div>
                    <div class="social-media-btn">
                            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a></i>
                            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <p>O'higgins 2191, 2do E. CABA</p>
                        <p>©ApliStore 2020. Todos los derechos reservados.</p>
                    </div>
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