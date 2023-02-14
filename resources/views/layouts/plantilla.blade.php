<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.csss">
    <link rel="stylesheet" href="css/estilo.css">

</head>
  <body>
    <!-- HEAD -->
    <header class="d-flex justify-content-center p-4">
      <img src="img/logo.png" alt="Bootstrap" class=" d-none d-md-inline img-fluid w-40">
    </header>
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
                <a class="nav-link" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#nosotros">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro.html">Registrate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#contactar">Contactar</a>
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
      <!-- REGISTRO -->
      <section class="cid p-5" id="registrarse">
        <div class="align-center container">
            <div class="row">
                <!-- card registrate -->
                <div class="col-12  col-lg-8 ">
                    <div class="card-wrapper">
                        <h1 class="mbr-section-title mb-4 display-1"><strong>Registrate</strong></h1>
                        <p class="mbr-text display-7">Sea lo que sea que busques, con nosotros tendrás la oportunidad de encontrarlo.</p>
                        <p class="mbr-text display-7">Creemos que el amor puede estar en cualquier parte</p>
                        <p class="mbr-text display-7">Solo podrás encontrarlo si te arriesgas y pruebas</p>
                        <div class="mbr-section-btn mt-4"><a class="btn btn-lg btn-primary display-4" href="registro.html" style="">Registrase</a></div>
                    </div>
                </div>
                <!-- imagen -->
                <div class="col-4 col-lg-3 my-auto mx-auto d-none d-lg-inline">
                    <div class="image-wrapper">
                        <img src="img/principal.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
      </section> 
      <!-- NOSOTROS -->
      <div class="container-xl" id="nosotros">
        <h2 class="display-5 text-center text-white bg-danger mt-5">Sobre Nosotros</h2>
      </div>
      <section class="container-xl d-flex flex-column  align-items-center pt-2">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row text-center justify-content-around">
              <!-- card 1 -->
              <div class="col-12 col-md-6 col-lg-4 ">
                <div class="card" style="max-width: 26rem;">
                  <img class="card-img-top img-fluid " src="img/imagen.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <!-- card 2 -->
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="max-width: 26rem;">
                  <img class=" card-img-top  img-fluid" src="img/carrousel2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <!-- card 3 -->
              <div class="col-12 col-md-6 col-lg-4 ">
                <div class="card" style="max-width: 26rem;">
                  <img class="card-img-top img-fluid" src="img/carrousel3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </section>
      <!-- CONTACTAR -->
      <section id="contactar">
        <div class="container">
          <div class="cid">
            <div class="card-wrapper text-center p-0">
              <h4 class="mbr-section-title fs-2 p-3"><strong>Contacta con Nosotros</strong></h4>
              <div class="p-5">
                  <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="ksaZGCsIleL6fEgnIf9zO/g37Z+1R68AqWnr0JMt+OTyb7GVjLrfyMh+Xdp7/GvKPmj4XltFyBENUbvyln6p7uqYD1pZWpkS6vSQGIF3mhNcykpKiOR/qHl2p/qjASly.wNM4G6uCCrJbQVpXsLZMVV3vetepJJKh9eUtCUZgTeVHySvR8NUOGlrha1+BeWlntePuUcXC0VmXfq0vZD8ozN3w3Ef1A0WKGdisk3XtAOWwBH7iEfKbkl/si2J1wjwt">
                  <div class="row">
                      <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Gracias por contactar con nosotros</div>
                      <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">oh, ha habido un problema!</div>
                  </div>
                  <div class="dragArea row">
                      <div class="col-lg-6 col-md-12 col-sm-12 form-group mb-3" data-for="Nombre">
                          <input type="text" name="name" placeholder="Nombre" data-form-field="Nombre" class="form-control display-7" value="" id="">
                      </div>
                      <div data-for="email" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                          <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control display-7" value="" id="">
                      </div>
                      <div data-for="phone" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                          <input type="tel" name="phone" placeholder="Telefono" data-form-field="phone" class="form-control display-7" value="" id="">
                      </div>
                      <div data-for="message" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                          <textarea name="message" placeholder="Mensaje" data-form-field="message" class="form-control display-7" id=""></textarea>
                      </div>
                   </div>
                   <div class="mbr-section-btn mt-4"><a class="btn btn-lg btn-primary display-4" href="" style="">Registrase</a></div>
                  </form>
              </div>
              
              
          </div>
          </div>
        </div>
      </section>
  </main>

  <!-- FOOTER -->
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
<script>
  (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
