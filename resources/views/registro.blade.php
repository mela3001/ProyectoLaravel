<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="apple-mobile-web-app-title" content="CodePen">
  <title>LitMatch</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/registro.css">
  <link rel="icon" type="image/x-icon" href="img/ms-icon-150x150.png" />
  @vite(['resources/css/bootstrap.css'])
  @vite(['resources/css/estilo.css'])
  @vite(['resources/js/registro.js'])
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
  </script>


<script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script></head>

<body translate="no">
@include('layouts.plantillas')
    <!-- HEAD -->
    @yield('header')
    <!-- MAIN -->
    <main>
        <!-- NAV -->
      <nav class="border-top  navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand fs-2 fw-bold text-primary text-uppercase d-md-none" href="#"><img src="img/logo.png" alt="Bootstrap" class="img-fluid"></a>
          <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav container-xl text-center d-flex justify-content-around">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('home')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#nosotros">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Registrate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('home')}}#contactar">Contactar</a>
              </li>
              <li>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Iniciar Sesion</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- INICIO DE SESION -->
      <div class="modal fade" id="staticBackdrop"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="text-center">Iniciar Sesion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <form action="{{route('inicio')}}" class="needs-validation" novalidate>
                <div class="m-3 form-floating position-relative">
                  <input type="email" name="email" id="input-email" class="form-control" placeholder=" " required />
                  <label for="input-email" class="form-label">Direccion de email</label>
                  <div id="email-help-block" class="form-text">
                    No compartiremos tu dirección de email con nadie más.
                  </div>
                  <div class="valid-tooltip">Campo válido</div>
                  <div class="invalid-tooltip">Email no valido</div>
                </div>
                <div class="m-3 form-floating position-relative">
                  <input type="password" class="form-control" id="password" placeholder="Password" required minlength="8" maxlength="20">
                  <label for="input-password" class="form-label">Contraseña</label>
                  <div id="password-help-block" class="form-text">
                    Tu contraseña debe tener entre 8 y 20 caracteres, contener
                    letras y números,...
                  </div>
                </div>
                <div class="text-center mb-3 mbr-section-btn">
                  <button type="submit" class="btn btn-lg btn-primary display-4">Iniciar Sesion <i class="bi bi-arrow-up-right-square"></i></button>
                </div>
              </form>
            </div>
        </div>
        </div>
    </div>
          
          <!-- PRINCIPAL -->
          
            <form id="msform" action="#" method="get">
                <!-- Progreso -->
                <ul id="progressbar" >
                  <li class="active" >Genero</li>
                  <li>Preferencia</li>
                  <li>Hobbies</li>
                  <li>Datos</li>
                  <li>Usuario</li>
                </ul>

                <!-- GENERO -->
                <fieldset>
                  <h2 class="fs-title">Genero que te identifica</h2>
                  <div class="form-check d-flex justify-content-start p-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="femenino">
                    <label class="form-check-label" for="femenino">
                      <img src="img/genero-femenino.png" alt="" class="ps-2" style="max-width: 30px;"> Femenino
                    </label>
                  </div>
                  <div class="form-check d-flex justify-content-start p-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="masculino" >
                    <label class="form-check-label" for="masculino">
                      <img src="img/genero-masculino.png" alt="" class="ps-2" style="max-width: 30px;"> Masculino
                    </label>
                  </div>
                  <div class="form-check d-flex justify-content-start p-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="otro" >
                    <label class="form-check-label" for="otro">
                      <img src="img/genero-fluido.png" alt="" class="ps-2" style="max-width: 30px;"> Otro
                    </label>
                  </div>
                  <input type="button" name="previous" class="previous action-button" value="Previous">
                  <input type="button" name="next" class="next action-button" value="Next">
                </fieldset>

                <!-- PREFERENCIA -->
                <fieldset>
                  <h2 class="fs-title">Prefiero</h2>
                  <div class="form-check d-flex justify-content-start p-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="hombre">
                    <label class="form-check-label" for="hombre">
                      <img src="img/hombre.png" alt="" class="ps-2" style="max-width: 30px;"> Hombre
                    </label>
                  </div>
                  <div class="form-check d-flex justify-content-start p-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="mujer" >
                    <label class="form-check-label" for="mujer">
                      <img src="img/mujer.png" alt="" class="ps-2" style="max-width: 30px;"> Mujer
                    </label>
                  </div>
                  <div class="form-check d-flex justify-content-start p-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="todo" >
                    <label class="form-check-label" for="todo">
                      <img src="img/orgullo.png" alt="" class="ps-2" style="max-width: 30px;"> Todo
                    </label>
                  </div>
                  <input type="button" name="previous" class="previous action-button" value="Previous">
                  <input type="button" name="next" class="next action-button" value="Next">
                </fieldset>

                <!-- HOBBIES -->
                <fieldset>
                  <h2 class="fs-title">Algunos de mis hobbies son ..</h2>
                  <!-- select de hobies -->
                  <div class="row p-3">
                  @foreach ($hobbies as $hobbie)
                    <div class="col-6 d-flex justify-content-start ">
                      <label><input type="checkbox" id="{{$hobbie->nombre}}" value="{{$hobbie->nombre}}"> {{$hobbie->nombre}}</label><br>
                    </div>
                  @endforeach
                  </div>
                  <input type="button" name="previous" class="previous action-button" value="Previous">
                  <input type="button" name="next" class="next action-button" value="Next">
                </fieldset>

                <!-- DATOS PERSONALES -->
                <fieldset>
                  <h2 class="fs-title justify-content-center">Datos personales</h2>
                  <input type="text" name="name" placeholder="Nombre" class="datos">
                  <input type="text" name="apellidos" placeholder="Apellidos" class="datos">
                  <input type="number" name="telefono" placeholder="Telefono" class="datos">
                  <div class="row d-flex align-items-center">
                    <div class="col-6 d-flex flex-colum justify-content-center align-items-center">
                      <label >Fecha Nacimiento</label>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                      <input type="date" name="fecha" class="datos">
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Ciudad</label>
                    <select class="form-select" id="inputGroupSelect01">
                      <!-- select ciudades -->
                      @foreach ($ciudades as $ciudad)
                        <option value="{{$ciudad->nombre}}">{{$ciudad->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                  <input type="button" name="previous" class="previous action-button" value="Previous">
                  <input type="button" name="next" class="next action-button" value="Next">
                </fieldset>
                <fieldset>
                  <h2 class="fs-title justify-content-center">Usuario</h2>
                  <input type="text" name="usuario" placeholder="usuario" class="datos">
                  <input type="text" name="contraseña" placeholder="contraseña" class="datos">
                  <input type="button" name="previous" class="previous action-button" value="Previous">
                  <input type="submit" class="submit action-button" target="_top" name="registro" value="Registrarse">
                </fieldset>
              </form>
    </main>

    <!-- FOOTER -->
    <footer class="footer pt-sm-5">
        <div class="row d-flex justify-content-center bg-light mt-5">
        <!-- descargar -->
        <div class="col-12 col-md-6  d-flex flex-column align-items-center">
            <h5>Puedes descargar a traves de:</h5>
            <div class="d-flex flex-row">
                <div class="text-center pe-3">
                <a href=""><i class="bi bi-apple fs-2"></i></a>
                <p>App Store</p>
                </div>
                <div class="text-center">
                <a href=""><i class="bi bi-google-play fs-2"></i></a>
                <p>Google Play</p>
                </div>
            </div>
        </div>
        <!-- redes sociales  -->
        <div class="col-12 col-md-6 d-flex flex-column align-items-center">
            <h5>Siguenos en:</h5>
            <div>
            <a href=""><i class="bi bi-facebook fs-2 p-3"></i></a>
            <a href=""><i class="bi bi-instagram fs-2 p-3"></i></a>
            <a href=""><i class="bi bi-twitter fs-2 p-3"></i></a>
            </div>
        </div>
        </div>
    <div class="row text-center bg-light">
        <p class="text-center mt-2">Todos los derechos reservados. &copy; LitMacht</p>
    </div>
    
    </footer>


<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script id="rendered-js" src="js/registro.js"></script>

  

<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-44fe83e49b63affec96918c9af88c0d80b209a862cf87ac46bc933074b8c557d.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


 
</body>

</html>