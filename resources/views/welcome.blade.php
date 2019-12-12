<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>DigitalWine</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Css -->
        <link href="/css/inicio.css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">DigitalWine</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Comprar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Vinos</a>
          <a class="dropdown-item" href="#">Accesorios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    
    <li class="nav-item">
            @if (Route::has('login'))
                <div class="nav-link">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
        </li>
        </ul>
            @endif

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 <!-- Slider -->
 <div class="principal">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/img/slider-vino.jpg" class="d-block w-100" alt="imagen">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
              <div class="carousel-item">
                <img src="/img/slider-vino.jpg" class="d-block w-100" alt="imagen">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
              <div class="carousel-item">
                <img src="/img/slider-vino.jpg" class="d-block w-100" alt="imagen">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de slider -->
     <div>
         <br>
         <H1>Productos destacados</H1>
         <br>
     </div>
     <!-- Contenido -->
    
<div class="row">

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item One</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Two</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Three</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Four</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Five</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Six</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

</div>
<!-- /.row -->

</div>
     
        <!-- Fin de contenido -->
    
          
    </body>

    <!-- Footer -->
    <footer class="bg-secondary">
       <div class="container text-center">
         <div class="row bg-secondary">
           <div class="col-md-4 py-3">
             <h3 class="text-white">Redes Sociales</h3>
              <nav>
                <ul class="social-header list-inline mb-0 my-3 text-center">
                  <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                          </span>
                      </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                          </span>
                      </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                          </span>
                      </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                          </span>
                      </a>
                  </li>
                </ul>
              </nav>
           </div>
           <div class="col-md-4 py-3">
             <h3 class="text-white"><i class="fas fa-truck"></i> Envios Gratis</h3>
             <p class="text-white">Compras de $1500 Rosario y alrededores</p>
           </div>
           <div class="col-md-4 py-3 payment-container">
             <h3 class="text-white">Medios de pago</h3>
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/visa@2x.png" alt="" height="29">
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/mastercard@2x.png" alt="" height="29">
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/amex@2x.png" alt="" height="29">
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/ar/banelco@2x.png" alt="" height="29">
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/ar/cabal@2x.png" alt="" height="29">
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/ar/tarjeta-naranja@2x.png" alt="" height="29">
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/mercadopago@2x.png" alt="" height="29">
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/nativa@2x.png" alt="" height="29">
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/pagofacil@2x.png" alt="" height="29">
             <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/rapipago@2x.png" alt="" height="29">
           </div>
           <div class="col-md-12 text-center bg-secondary">
               <p class="text-white pt-3">&copy;2019 - Todos los derechos reservados.</p>
           </div>
         </div>
       </div>
    </footer>
</html>
