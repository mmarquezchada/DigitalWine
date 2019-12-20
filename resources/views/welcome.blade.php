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
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/img/images7.jpg" class="d-block w-100" alt="imagen">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
              <div class="carousel-item">
                <img src="/img/images8.jpg" class="d-block w-100" alt="imagen">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
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
      <a href="#"><img class="card-img-top" src="data:image/jpeg;base64,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" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"> <strong>Zuccardi Concreto Malbec </strong></a>
        </h4>
        <h5>$1677.00</h5>
        <p class="card-text"><strong>Región: </strong> Mendoza</p>
        <p><strong>Cepa: </strong> Malbec</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="data:image/jpeg;base64,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" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"> <strong>Domingo Molina Malbec </strong></a>
        </h4>
        <h5>$862.00</h5>
        <p class="card-text"><strong>Región: </strong> Mendoza</p>
        <p><strong>Cepa: </strong> Malbec</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="data:image/jpeg;base64,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" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"> <strong>Don Miguel Escorihuela Gascon Malbec </strong></a>
        </h4>
        <h5>$3539.00</h5>
        <p class="card-text"><strong>Región: </strong> Mendoza</p>
        <p><strong>Cepa: </strong> Cabernet Franc</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="data:image/jpeg;base64,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" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"><strong>Gran Callejon Del Crimen Winemaker Selection Blend</strong></a>
        </h4>
        <h5>$1314.00</h5>
        <p class="card-text"><strong>Región: </strong> Mendoza</p>
        <p><strong>Cepa: </strong> Blend</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8NDQ8NDQ8PDQ0ODQ0ODQ0NDg8ODg0NFREWFhURFRUYHSggGBolHRUVIjEhJSkrLy4uFx8zOjMtNyotLisBCgoKDg0OGxAQFy4dHyUxNzctLi01LS0rLSstKystKy0tNS01Ky0tLS0tKy0rLi0tLS0tKy0wLS0yLS0rLSsrK//AABEIAQsAvQMBIgACEQEDEQH/xAAcAAEBAAIDAQEAAAAAAAAAAAAAAQYHAgQFCAP/xABNEAABAwICBgUGCAoIBwAAAAABAAIDBBEFIQYHEjFBURNhcYGRFCIycqGxCDM0YoKywdEjJEJSY3N0kqLCFSU1Q1OD4fAXRJSjs9LT/8QAGgEBAAIDAQAAAAAAAAAAAAAAAAECAwQFBv/EACsRAQACAgEDAwIFBQAAAAAAAAABAgMREgQhMQUTQSIyFWGBkfAUM1Fxof/aAAwDAQACEQMRAD8A3iiiIKiiqAiiICKogIoqg8fSfSajwmDyiul6JhdsMAaXvkf+a1ozK13Va+qBp/BUdXILnzn9DHfrttFeR8JOrBfhtPs5htTMXX4EsaBb6JWl5GZXzQfRuFa4oqkF4w2s6Mek6OSmeR3Oe26zfRrSOlxSAz0che1riyRjmlkkUg/Je07ivn/V5hQnp5D01REQMuhey3g5pWa6jbU9fi9HdzyfJphI6wJAMjSCB6w9qDcSIiAiKIKiiIKiKIKiiIKiKIKoqogIiIKoiICqIg0N8JOncKnDprjZfDUxgcQ5j2E/XHgVqGT0d3Jbl+Es/wA/ChyFcfEwfctNOOSDa+rFhbRyPF+OQDDfLrC9zUu10uL4tPlssip4nCxBLnveQbfQcvB1ZP8AxaQHcG/YVkuo/wCX4561D76hBt1FFUBRVEERFUBFEQFVFUBFFUBFEQERVBEREFREQaH+Eqfw+GD9HVn+KP7lp5+5be+EmfxrDh+gqD/G37lqJ5yQbQ1a38llP+9yynUh/aGND9i986xvVi8CkkH+9yyXUqf60xrr8kP8UyDbyIiCIqiCIqogqiIgqIiCKqIgIiqCKqIgIiICqIg+f/hIvvX0DeVLIfGT/RamcwkZAnsBK+kdajQaijuAfwc28Dm1Y/CwWGQ8AuZ1XqXsX4cd/qz0wco3tjurbKlkuCN/pAhZNqUd/WuLjnHTHwfJ96y/CmjyMZD0XcBzXPQJgE1XYAZQ5gW4vWanWcrUrx+5Sceomf8ADMVURbrGKKogiKogKKogKKqIKiIgIiICIiAiiqAiiINX6zJ9rEYIx/dU9z2ucfuXkRHIK6UVPT4rVSbw14ib2MGz7wVxi3LyXqGTlmmXRxRqsM0wn5I31SuehLtmpqG/nMaf3XH/ANlxwb5M31SvwwGTosRbwEm3Ge8XHtAW9S3G+G387wwTG4tDO0RF32qiIqgIoqgKKogiqIgiqiIKiiICqiICqKIKupitWKenlmP5DCR1u3NHiQu0sL1h4nYMpWn9JL/KPefBYOoy+3jmy9K8raa+LTtuJNy5xJPMneu9CumwXddd6Fq8dltuXShl2COvA0dRC82tlMU4kbvjex47Wm/2LuYJforciV1MRjPSG/Fbua8xhpaPhr1j6pbGhlD2Ne03a9oc08wRcLmse0KrekpjC4+fTu2P8s5sPhcdyyFenxZIyUi0fLTtGp0IiiyIVFEQVREQVRVRAREQEVRARRVARRVBwmlDGOe42axpc48gBcrTeN1rqmofI7e95dbk3gO4WWwtO6/oqURA2dO630G2J+wd61xHFtEuXD9Vz9+EfDb6enyQMXdjapFFZdhjF520tt7uBDzO9MXh3OXPAW+Y71vsXfrYNppC7NcXudJpqTOrvEwOt8lr4iTaKoHQP5B5N2Hxy71sRazraQvY5gyeM2Hk8Zg+KzvAMQ8qpIpvynNtIOUjcnDxBW36Nn5Y5xz5hTPXvt6CKou010REQEVUQEVUQFVEQVFEQVEUQVFF+dTMI43yHcxjnHsAuomddxrnTSs6etcwG7YQIh6wzd7TbuXnRRWAUjvJI57sy95ce0m67oiXjOszc8ky6VI1Gn5NYv0a1c9lUBaE2WexgH5Y9U+9ey9lwvFwD03j5o96yAtyXpfTfq6aGpl+5j9XFZ9+a7WiM3RVFRSn0X7NTEO3J48bK4gzj1rosk6Kso5uBkMD/VkFh7VqdNb2Ou18Stb6qM4VRF6lqCiIgKoiAiKIKiiqCKoiCKoiCLx9L5+joJubg1g+k4A+y69lYvrAktSxt/OmHgGlYOptxw2n8l8cbtDD6Bq9ABdShHuXdAXhs1t2dFwcFAFzcFAFgHpYH8afUKyIbljuCfHfQcsibuXp/Sf7H6y1M33PPrxkV4uMC1O543xuZIO1rgV7laMivLrI9qnlbzif9Urn9dPHqYsyY/tZnDJtsa8bnNa4d4uua87R6XboqZ3OCP2NsvRXr6zuIlpyiKopQKKogKKogIiICIiAiIgLD9YZ8ynHzpD7G/eswWr9e2KzUdNRyQFoc6eVh2mhw2di+7uC1+qxzkxTWvmV8doraJkoR7l3LLSsesPEWbnQHthH3rNNAdORXP8AJa3YjqHG8D2DYZKLehY7ne9eZt6L1Mzvt+7a/qKs2cFxAXebTA8+4hfr5EzL0s+sfcqfg3U/l+6ffq4YN8cPVd7lkTdy8mlpmxu2m3Jsd5Fl+9biTKaF887msijbtOcfcBxJ5LtdB0mTDj4287YMl4tO4cqzcV57vi3+o73LVmNa2a3pX9BDTNh2j0YlZK+TZ4bRDwL9y8uPWxiJuww0dnAjKOa9j/mLU6v03PlyRauk0y1iH0Don/Z9L+pavXXi6Fv2sLonHe6micbcyLr2l6CkarEME+RERWQIiICIiAiIgIiICIiAtQ/CM+R0H7TL/wCNbeWsNflIZcMY4C5gk6XsbdrXHuDie5RI+dHqMcQQQSCCCCDYgjcQVXriEG5dXOn7ajYoa94bU5MgqHbqj5rzwf18e3fs232r5PBW0tBdZ4gj8mxQvkZGw9DVNDpJbAZRvAzdyDvHmo0Nu1dZFSxPnneI4mC7nO9gHMnktQ6XaUvxF5ttMpmX6GK+/wCe/m73e/w9JtL58XnDnXipWE9BTA5NH5z+Dnnnw3Dr6wPm9ymIHjV5zXRh9LvXer+K4YDQuqqynpmi5mnjjPU0u849zbnuUD6v0JaRhVEDkRSxAjuXtroYG0CliA3AOA7A4rvqa+CRERSCIiAiIgIiICIiAiIgLFdOoWyMjieNpkjJmPHNpAB96ypYvpkfOg7JP5VW3hMPlvHsLfRVUtNJe8bjsOP95EfRf3j7V563LrA0Z/pCDp4G3q4AdkcZot5j7d5HhxWmiLGxyIyIO8FEPTZhLixj+kbZ7Q7ZDSXAbG1a3E78uolR2GEOA22m53gE/lWv1jjfkvyw2oiiLjLEJg7YsCG+bYkk5rkyqjFrRgERht7NvtgMG0P3SfpnvrO144vRoKEZEvy2dvJu0bXjBtnn6Z/cK96tw0Qwl7ZWv2Z3RFuTX2FxtgXORIcO4c14VHWsv8UM442OyZckOBc++zcEi4716VdUsle6RkYhDgLsabtDrC5GQsCbm3C6V5fJPH4eBiG8rYOpbR4uklxSVvmRh0FNcZOkPxj+4Wb9I8limDYDLidWylhFto7UklrthhB8557OA4mwX0Bh1BFR08VLA3YhhYGMHE8yeZJuSeZKtKjJMF+TR/T+uV3l0cF+TR/S+uV3lNfBIoqikFFUQEREBERAREQEREBYrpn6UI+bJ7wsqWK6ZDz4fVf7wq28JhimIYhHRwPqJ3bEcYuebjwa3mStC43iPllVNU9GyHppC/o2CwaOvmeZ4m6yDWHpGa2pMETvxWnc5rbHKWUZOk7OA6u1YikQS7MUQIzLgb5AMcbi2+4XMRR3HnPseOwRncfYuLK6UAASOAaAAMsmjh7AucU8jznJa1jd7g3O4489x7k7nZ3qKnBt8YTbMBhOa9l1K5kROxIADYucxzQO/wAPFePT1MrS09KTyLH3t4bl6bqqRzCHPeWnMgvdY7s7dw8E7nZ3ND9LHYRVl7m7dNNsMqWWG2Ggmz2nfdtybcfBb1hqI542TQvbJFIwPje03DmncQvmOuWf6m9JiyR2FTO/By7UlISfQlzL4+xwue0Hmkob8wT5NH2O+sV3l0cF+TR9jvrFd5TXwSIiKQREQEUVQEREBERAREQFrbXXipo6LbYbSyMdDEb5hzyAXDrDdo9y2StKfCOebYe3gTUOt1jZAPtPiokaOcoFXqBBQuzQ0ss8rIYGOlmkdssjjG05x6grh1BLVTMp6dhlmkdssY3ees8gN5K39oDoXFhMW27ZlrpWtE8wzDB/hx33NHPeePACBoyGFzHlj2uY9ji17HAtcxw3tIO4r1Bu7gty6YaFQ4kOmj2Ya1rbCTc2YcGyfY7eFqXEsPlpnvhmaY5Gkgtd7wpGO1x3r88KqnQVEU7DZ0MscrSMs2uDvsXOu3rqQekg+xsAeH0kLxucwuHYSSvQXh6EG+E0JO/ySG/7oXuJXwSIiKQREQEREBFFUBERAREQFpD4R58/Dx8yp97Fu9aj15YN5ZLR/hOj6OOb8navtOb19Sx5LxSOVvC1YmZ1D5/cuxh1FLUzMggYZJZXbLGDiefUAMyepZAdDz/j/wDb/wBV7WjmL0mBB+zEaqskyfLtBuyzgxosdkc+fgsdepx3nVZ2tOK0eYbD0F0RiwqHO0lZK0dPOMw39Gy+5oPjvPVlYHHktU/8XbbqG5/aLfyLsM1tutlQN/6k/wDzV5tEeVYiZbUjHHn4LytKtGYcThLH2ZO0HoZwM2nk7m1Y1o3rCfWymI0rIrMLgRMX7iMrbIWQN0ic12zJE1oO54cSO9OcRXka76fP+kmGzUVQ+mqWFkrD9F7Tue08WnmvJg9JfQWl+EwYvCxlS0NMZvFUQm0rAd7QTcEHLIhYVU6vaOBjntkqHFouNp8e/uaFo/inT747nf8Apf2bN26Ef2VQ/skP1QvcXkaJRhmHUjBubTxtF+QFl666NJ3WGOfIiIrIEREBERAREQEREBERBFrrWyCHUjuDhK09VrFbGWvtdsL/AOiHVEXp08jXH9W7zX/f3LD1GOcmOawvjtxttpXHdIAwmKAgnc5/AHkFjBcTdzjcneV+QkBNyc0Lts2Cx4sFccahNsk2ncv2pWXBK7rF+MQAAC/VpVbzuV69oZbq+P4279Q/3hbIezabuuOJWs9BaoRVEj3C4EWyO0uCzuo0ij6LcWksc7IjzbLPg+3TFfy83FsSfRXc3zmZbTDuIv7F6oq46uhkmiO0Oidlxa624rANJcb6a7eAI4rjojXSdOKeO5ZUOZG8drhY911z+u6GMtovXtMf9ZMWXj2l9G6OM2aGmH6CP2i69JfnBGGMawbmNa0dgFl+i6lY1EQxSKKqKUKiIgIiICIiAiIgIiIC/GrpmzMMbwHNcCHNcA5rgRYgg7xYr9kQalx7UXRTOdJRVMtG5xJ6NzWzQNJO5oycB1XKxCs1F4mwkwVFHMOF3SxOPdske1fRCIPmSfVRjsX/ACrJhziqIc/3iF1Xavscbvw6fudC73OX1MoqzSJTuXzRh2h2NRX/AKvnzIv6PDvXoHQnHJbgUTmh3F8sLLeLl9DokViPBtoCl1N4pO6876emB37UrpnAdjW2v3rYeh2rClwxwldK+onyu5zWtY31RvHis8RWQKqKoCIiAiIgIiIP/9k=" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"><strong>Mosquita Muerta Blend De Blancas</strong></a>
        </h4>
        <h5>$663.00</h5>
        <p class="card-text"><strong>Región: </strong> Mendoza</p>
        <p><strong>Cepa: </strong> Blend De Blancos</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="data:image/jpeg;base64,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" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#"><strong>The Apple Doedn't Fall Cabernet</strong></a>
        </h4>
        <h5>$853.00</h5>
        <p class="card-text"><strong>Región: </strong> Mendoza</p>
        <p><strong>Cepa: </strong> Cabernet Sauvignon</p>
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
</html>
