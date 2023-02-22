<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    @vite(['resources/css/bootstrap.css'])
</head>
<body>
    <!-- HEADER -->
    <header class="container-fluid p-3 d-flex w-100 ">
            <div class="col-4">
                <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-three-dots-vertical"></i><span class="d-none d-md-inline">Menu</span></button>
            </div>
            <div class="col-4">
              <img src="img/logo.png" alt="">
            </div>
            <div class="col d-flex justify-content-evenly">
                <form action="">
                  <img src="img/poder.png" alt="" style="max-width: 30px;" class="">
                  <input type="submit" value="Cerrar Sesion" class="btn btn-outline-danger">
                </form>
            </div>
    </header>
    <!--  ASIDE-->
    <div class="offcanvas offcanvas-start bg-dark text-white" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header d-flex justify-content-center">
          <h2 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Navegación</h2>
          <button type="button" class="btn btn-dark text-white" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        </div>
        <div class="offcanvas-body ">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="adminCli.html" class="nav-link text-white ">
                        <i class="bi bi-person-bounding-box  me-2"></i> Usuarios
                    </a>
                </li>
                <li>
                    <a href="adminHobbies.html" class="nav-link text-white">
                      <i class="bi bi-clipboard2-pulse me-2"></i>Hobbies
                    </a>
                </li>
                <li>
                    <a href="adminCiudad.html" class="nav-link text-white">
                        <i class="bi bi-geo-alt  me-2"></i> Ciudades
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- MAIN -->
    <main>
        <div class="container container-fluid d-flex align-items-center flex-column ">
            <h2 class="m-4">Administracion de Hobbies</h2>
            <a href="" class="text-white text-decoration-none bg-success text-center p-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="bi bi-clipboard2-pulse fs-3"></i>
                <h2>Nuevo</h2>
            </a>
            <h2 class="m-5">Listado de Hobbies </h2>
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- FOR CON TODOS LOS DATOS  -->
                  <!-- <a class="btn btn-danger d-block d-lg-inline">Borrar</a> 
                  <a class="btn btn-success d-block d-lg-inline mt-3">Editar</a> 
                  <a class="btn btn-info d-block d-lg-inline mt-3">Ver</a> -->
                  <!-- <tr>
                    
                  </tr> -->
                </tbody>
              </table>
        </div>

        <!--    AÑADIR HOBBIE  -->
        <div class="modal fade" id="staticBackdrop"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h5 class="text-center">Añadir Hobbie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="modal-body">
                  <form action="" class="needs-validation" novalidate>
                    <div class="m-3 form-floating position-relative">
                      <input type="text" class="form-control" id="nombre" placeholder="nombre" required >
                      <label for="nombre" class="form-label">Nombre</label>
                    </div>
                    <div class="text-center mb-3 mbr-section-btn">
                      <button type="submit" class="btn btn-lg btn-primary display-4">Añadir <i class="bi bi-arrow-up-right-square"></i></button>
                    </div>
                  </form>
                </div>
            </div>
            </div>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>