<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
  <link rel="stylesheet" href="css/inicio.css">
  @vite(['resources/css/bootstrap.css'])
</head>

<body>
  <!-- HEADER -->
  <header class="container-fluid p-3 d-flex w-100 ">
    <div class="col d-flex justify-content-center align-items-center">
      <img src="img/logo.png" alt="">
    </div>
    <div class="col d-flex justify-content-center align-items-center d-none d-sm-none d-md-block">
      <h5 class=" d-flex justify-content-center align-items-center"><i class="bi bi-person-circle"></i>{{session('usuario')}}</h5>
    </div>
    <div class="col d-flex justify-content-center align-items-center">
      <form action="">
        <img src="img/poder.png" alt="" style="max-width: 30px;" class="">
        <a class="btn btn-outline-danger" href="{{route('home')}}">Cerrar Sesión</a>
      </form>
    </div>
  </header>
  <nav class="container-fluid p-3 row d-flex w-100 justify-content-center">
    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
      <button class="nav-link active col-3" id="color nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Inicio</button>
      <button class="nav-link col-3" id="color nav-gusto-tab" data-bs-toggle="tab" data-bs-target="#nav-gusto" type="button" role="tab" aria-controls="nav-gusto" aria-selected="false"><i class="bi bi-suit-heart"></i> Galeria de Me gustas</button>
      <button class="nav-link col-3" id="color nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Perfil</button>
    </div>
  </nav>
  <div class="tab-content d-flex justify-content-center" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      {{-- INICIO --}}
      <h5 class="bg-white text-dark mt-4 text-center">Me considero <b>{{ session('generoUsuarioActivo')}}</b> y busco <b>{{ session('preferenciaUsuarioActivo')}}</b></h5>
      <div class="row container-fluid d-flex w-70 justify-content-center cursos contenedor">
        @php
          $numUsuarios = 0;
        @endphp

        @foreach ($usuarios as $usuario)
        @if(($usuario->usuario) != session('usuario'))
          @if(session('preferenciaUsuarioActivo') == 'Hombre')
            @if(($usuario->genero == 'Hombre' && $usuario->preferencia == session('generoUsuarioActivo')) || ($usuario->genero == 'Hombre' && $usuario->preferencia == 'Todo') )
            <div class="curso">
                <div class="curso__imagen">
                  <img class="imagen-curso" src='img/{{$usuario->imagen}}' alt="Imagen del usuario">
                </div>
                <div class="info-curso">
                  <h3>{{$usuario->usuario}}</h3>
                  <h6><i class="bi bi-geo-alt-fill"></i> {{$usuario->ciudad}}</h6>
                  <h6>Me llamo <b>{{$usuario->name}}</b> {{$usuario->apellido}}.</h6>
                  <h6>Tengo <b>{{$usuario->edad}}</b> años.</h6>
                  <h6>Busco: <b>{{$usuario->preferencia}}</b>.</h6>
                  <h6>Me considero: <b>{{$usuario->genero}}</b>.</h6>
                  <h6>Si quieres saber más de mí, llámame: <b>{{$usuario->telefono}}</b></h6>

                  <form action="{{route('darMg')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{session('usuario')}}" name="usuarioDaMg">
                    <input type="hidden" value="{{$usuario->usuario}}" name="usuarioRecibeMg">
                    <div class="boton">
                      <i class="bi bi-heart-fill"></i>
                      <input type="submit" value="Dar mg" class="boton">
                    </div>
                  </form>
                </div>
              </div>
              @php
                  $numUsuarios ++;
                  @endphp
            @endif
          @elseif(session('preferenciaUsuarioActivo') == 'Mujer')
            @if(($usuario->genero == 'Mujer' && $usuario->preferencia == session('generoUsuarioActivo')) || ($usuario->genero == 'Mujer' && $usuario->preferencia == 'Todo') )
              <div class="curso">
                  <div class="curso__imagen">
                    <img class="imagen-curso" src='img/{{$usuario->imagen}}' alt="Imagen del usuario">
                  </div>
                  <div class="info-curso">
                    <h3>{{$usuario->usuario}}</h3>
                    <h6><i class="bi bi-geo-alt-fill"></i> {{$usuario->ciudad}}</h6>
                    <h6>Me llamo <b>{{$usuario->name}}</b> {{$usuario->apellido}}.</h6>
                    <h6>Tengo <b>{{$usuario->edad}}</b> años.</h6>
                    <h6>Busco: <b>{{$usuario->preferencia}}</b>.</h6>
                    <h6>Me considero: <b>{{$usuario->genero}}</b>.</h6>
                    <h6>Si quieres saber más de mí, llámame: <b>{{$usuario->telefono}}</b></h6>

                    <form action="{{route('darMg')}}" method="post">
                      @csrf
                      <input type="hidden" value="{{session('usuario')}}" name="usuarioDaMg">
                      <input type="hidden" value="{{$usuario->usuario}}" name="usuarioRecibeMg">
                      <div class="boton">
                        <i class="bi bi-heart-fill"></i>
                        <input type="submit" value="Dar mg" class="boton">
                      </div>
                    </form>
                  </div>
                </div>
                @php
                  $numUsuarios ++;
                  @endphp
            @endif
          @else
            @if($usuario->preferencia == session('generoUsuarioActivo') || $usuario->preferencia == 'Todo')
              <div class="curso">
                    <div class="curso__imagen">
                      <img class="imagen-curso" src='img/{{$usuario->imagen}}' alt="Imagen del usuario">
                    </div>
                    <div class="info-curso">
                      <h3>{{$usuario->usuario}}</h3>
                      <h6><i class="bi bi-geo-alt-fill"></i> {{$usuario->ciudad}}</h6>
                      <h6>Me llamo <b>{{$usuario->name}}</b> {{$usuario->apellido}}.</h6>
                      <h6>Tengo <b>{{$usuario->edad}}</b> años.</h6>
                      <h6>Busco: <b>{{$usuario->preferencia}}</b>.</h6>
                      <h6>Me considero: <b>{{$usuario->genero}}</b>.</h6>
                      <h6>Si quieres saber más de mí, llámame: <b>{{$usuario->telefono}}</b></h6>

                      <form action="{{route('darMg')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{session('usuario')}}" name="usuarioDaMg">
                        <input type="hidden" value="{{$usuario->usuario}}" name="usuarioRecibeMg">
                        <div class="boton">
                          <i class="bi bi-heart-fill"></i>
                          <input type="submit" value="Dar mg" class="boton">
                        </div>
                      </form>
                    </div>
                  </div>
                  @php
                  $numUsuarios ++;
                  @endphp
              @endif
          @endif
        @endif
        @endforeach
        <h4 class="bg-white text-dark mt-4 text-center">{{$numUsuarios}} usuarios compatibles</h4>
      </div>
    </div>
    <div class="tab-pane fade w-70" id="nav-gusto" role="tabpanel" aria-labelledby="nav-gusto-tab">
      {{-- ME GUSTAS --}}
      <nav class="container-fluid p-3 row d-flex w-100 justify-content-center">
        <div class="nav nav-tabs w-100 justify-content-center " id="nav-tab" role="tablist">
          <button class="text-white nav-link col active" id="color nav-megusta-tab" data-bs-toggle="tab" data-bs-target="#nav-megusta" type="button" role="tab" aria-controls="nav-megusta" aria-selected="false">ME GUSTA</button>
          <button class="text-white nav-link col" id="color nav-legusto-tab" data-bs-toggle="tab" data-bs-target="#nav-legusto" type="button" role="tab" aria-controls="nav-legusto" aria-selected="false">LE GUSTO</button>
          <button class="text-white nav-link col" id="color nav-compatible-tab" data-bs-toggle="tab" data-bs-target="#nav-compatible" type="button" role="tab" aria-controls="nav-compatible" aria-selected="false">RESULTADOS COMPATIBLES</button>
        </div>
      </nav>
      <!-- me gustan -->
      <div class="tab-pane fade show active w-100" id="nav-megusta" role="tabpanel" aria-labelledby="nav-megusta-tab">
        <div class="row container-fluid d-flex w-100 justify-content-center cursos contenedor">
          @foreach($megustas as $mg)
            @if(($mg -> usuarioDaMg) == session('usuario'))
              @foreach($usuarios as $usuario)
                @if(($usuario -> usuario) == ($mg -> usuarioRecibeMg) )
                <div class="curso">
                  <div class="curso__imagen">
                    <img class="imagen-curso" src='img/{{$usuario->imagen}}' alt="Imagen del usuario">
                  </div>
                  <div class="info-curso">
                    <h3>{{$usuario->usuario}}</h3>
                    <h6>Me llamo <b>{{$usuario->name}}</b> {{$usuario->apellido}}.</h6>
                    <h6>Tengo <b>{{$usuario->edad}}</b> años.</h6>
                    <h6>Si quieres saber más de mí, llámame: <b>{{$usuario->telefono}}</b></h6>

                    <form action="" method="post">
                      @csrf
                      <input type="hidden" value="{{session('usuario')}}" name="usuarioDaMg">
                      <input type="hidden" value="{{$usuario->usuario}}" name="usuarioRecibeMg">
                      <div class="boton">
                        <i class="bi bi-heart-fill"></i>
                        <input type="submit" value="Quitar mg" class="boton">
                      </div>
                    </form>
                  </div>
                </div>
                @endif
              @endforeach
            @endif
          @endforeach
        </div>
      </div>
      <!-- le gusto -->
      <div class="tab-pane fade show active w-100" id="nav-legusto" role="tabpanel" aria-labelledby="nav-legusto-tab">
        <div class="row container-fluid d-flex w-100 justify-content-center cursos contenedor">
          @foreach($megustas as $mg)
            @if(($mg -> usuarioRecibeMg) == session('usuario'))
              @foreach($usuarios as $usuario)
                @if(($usuario -> usuario) == ($mg -> usuarioDaMg) )
                <div class="curso">
                  <div class="curso__imagen">
                    <img class="imagen-curso" src='img/{{$usuario->imagen}}' alt="Imagen del usuario">
                  </div>
                  <div class="info-curso">
                    <h3>{{$usuario->usuario}}</h3>
                    <h6>Me llamo <b>{{$usuario->name}}</b> {{$usuario->apellido}}.</h6>
                    <h6>Tengo <b>{{$usuario->edad}}</b> años.</h6>
                    <h6>Si quieres saber más de mí, llámame: <b>{{$usuario->telefono}}</b></h6>

                    <form action="" method="post">
                      @csrf
                      <input type="hidden" value="{{session('usuario')}}" name="usuarioDaMg">
                      <input type="hidden" value="{{$usuario->usuario}}" name="usuarioRecibeMg">
                      <div class="boton">
                        <i class="bi bi-heart-fill"></i>
                        <input type="submit" value="Quitar mg" class="boton">
                      </div>
                    </form>
                  </div>
                </div>
                @endif
              @endforeach
            @endif
          @endforeach
        </div>
      </div>
      <!-- compatibles -->
      <div class="tab-pane fade show active w-100" id="nav-compatible" role="tabpanel" aria-labelledby="nav-compatible-tab">
        <div class="row container-fluid d-flex w-100 justify-content-center cursos contenedor">
          @foreach($megustas as $mg)
              @foreach($usuarios as $usuario)
                @if((($usuario -> usuario) == ($mg -> usuarioDaMg)) && (($mg -> usuarioRecibeMg) == session('usuario')) )
                <div class="curso">
                  <div class="curso__imagen">
                    <img class="imagen-curso" src='img/{{$usuario->imagen}}' alt="Imagen del usuario">
                  </div>
                  <div class="info-curso">
                    <h3>{{$usuario->usuario}}</h3>
                    <h6>Me llamo <b>{{$usuario->name}}</b> {{$usuario->apellido}}.</h6>
                    <h6>Tengo <b>{{$usuario->edad}}</b> años.</h6>
                    <h6>Si quieres saber más de mí, llámame: <b>{{$usuario->telefono}}</b></h6>

                    <form action="" method="post">
                      @csrf
                      <input type="hidden" value="{{session('usuario')}}" name="usuarioDaMg">
                      <input type="hidden" value="{{$usuario->usuario}}" name="usuarioRecibeMg">
                      <div class="boton">
                        <i class="bi bi-heart-fill"></i>
                        <input type="submit" value="Quitar mg" class="boton">
                      </div>
                    </form>
                  </div>
                </div>
                @endif
              @endforeach
          @endforeach
        </div>
      </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>