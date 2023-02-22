@section('header')
<header class="d-flex justify-content-center p-4">
     <img src="img/logo.png" alt="Bootstrap" class=" d-none d-md-inline img-fluid w-40">
</header>
@endsection

@section('nav')
<nav class="border-top  navbar navbar-expand-md bg-body-tertiary">
     <div class="container-fluid">
          <a class="navbar-brand fs-2 fw-bold text-primary text-uppercase d-md-none" href="#"><img src="img/logo.png" alt="Bootstrap" class="img-fluid"></a>
          <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav container-xl text-center d-flex justify-content-around">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#nosotros">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('registro')}}">Registrate</a>
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
@endsection

@section('inicio-session')
<div class="modal fade" id="staticBackdrop"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="text-center">Iniciar Sesion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <form action="adminCli.html" class="needs-validation" novalidate>
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
@endsection

@section('footer')
<footer>
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
  @endsection