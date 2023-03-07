<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LitMatch</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
  <link rel="stylesheet" href="css/inicio.css">
  {{-- perfil --}}
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"> --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> --}}
  {{-- favicon --}}
  <link rel="icon" type="image/x-icon" href="img/ms-icon-150x150.png" />
  @vite(['resources/css/bootstrap.css'])
</head>

<body>

  {{-- Añade la plantilla --}}
  @include('layouts.plantillas')

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
      <div>
        <input type="checkbox" class="checkbox" id="checkbox">
        <label for="checkbox" class="label botonclarooscuro">
          <i class="bi bi-moon"></i>
          <i class="bi bi-sun-fill"></i>
          <div class='ball'>
        </label>
    </div>
    </div>
  </nav>
  <main>
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
        {{-- PREFIERE HOMBRE--}}
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
                    <button class="boton" type="submit"><i class="bi bi-heart-fill"></i></button>
                  </form>
                </div>
              </div>
              @php
                  $numUsuarios ++;
                  @endphp
            @endif
            {{-- PREFIERE MUJER --}}
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
                      <button class="boton" type="submit"><i class="bi bi-heart-fill"></i></button>
                    </form>
                  </div>
                </div>
                @php
                  $numUsuarios ++;
                  @endphp
            @endif
          @else
          {{-- PREFIERE TODO --}}
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
                        <button class="boton" type="submit"><i class="bi bi-heart-fill"></i></button>
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
        <br>
      </div>
    </div>
    {{--GALERÍA DE ME GUSTAS --}}
    <div class="tab-pane fade w-70" id="nav-gusto" role="tabpanel" aria-labelledby="nav-gusto-tab">
      <nav class="container-fluid p-3 row d-flex w-100 justify-content-center">
        <div class="nav nav-tabs w-100 justify-content-center " id="nav-tab" role="tablist">
          <button class="nav-link col active" id="color nav-megusta-tab" data-bs-toggle="tab" data-bs-target="#nav-megusta" type="button" role="tab" aria-controls="nav-megusta" aria-selected="false">ME GUSTA</button>
          <button class="nav-link col" id="color nav-legusto-tab" data-bs-toggle="tab" data-bs-target="#nav-legusto" type="button" role="tab" aria-controls="nav-legusto" aria-selected="false">LE GUSTO</button>
          <button class="nav-link col" id="color nav-compatible-tab" data-bs-toggle="tab" data-bs-target="#nav-compatible" type="button" role="tab" aria-controls="nav-compatible" aria-selected="false">RESULTADOS COMPATIBLES</button>
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

                    <form action="{{route('quitarMg')}}" method="post">
                      @csrf
                      <input type="hidden" value="{{session('usuario')}}" name="usuarioDaMg">
                      <input type="hidden" value="{{$usuario->usuario}}" name="usuarioRecibeMg">
                      <button class="boton botondadomg" type="submit"><i class="bi bi-heart-fill iconodadomg"></i></button>
                    </form>
                  </div>
                </div>
                @endif
                
              @endforeach
            @endif
          @endforeach
        </div>
      </div>
      <!-- LE GUSTO -->
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
                      <button class="boton mg" type="submit"><i class="bi bi-heart-fill"></i></button>
                    </form>
                  </div>
                </div>
                @endif
              @endforeach
            @endif
          @endforeach
        </div>
      </div>
      <!-- COMPATIBLES -->
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

                    <form action="{{route('quitarMg')}}" method="post">
                      @csrf
                      <input type="hidden" value="{{session('usuario')}}" name="usuarioDaMg">
                      <input type="hidden" value="{{$usuario->usuario}}" name="usuarioRecibeMg">
                      <button class="boton botondadomg" type="submit"><i class="bi bi-heart-fill iconodadomg"></i></button>
                    </form>
                  </div>
                </div>
                @endif
              @endforeach
          @endforeach
        </div>
      </div>
    </div>
  {{-- PERFIL --}}
    <div class="tab-pane fade w-70" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      {{-- perfil --}}
      <div class="container rounded bg-white mt-5 mb-5">
        {{-- if del usuario --}}
        @foreach ($usuarios as $usuario)
        @if(($usuario->usuario) == session('usuario'))
        <div class="row">
          {{-- primera columna --}}
            <div class="columna1 col-md-5 border-right">
              {{-- imagen usuario --}}
                <div class="image d-flex flex-column align-items-center text-center p-3 py-5"> {{-- imagen --}}
                  <button class="btn"> 
                    <img class="rounded-circle mt-5" width="150px" src="img/{{$usuario->imagen}}">
                  </button>
                </div>
                {{-- MODIFICAR IMAGEN --}}
                <form action="{{route('modificarImg')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT') 
                    <div class="col-md-6 divImg">
                      <label class="labels mt-3">Cambiar imagen de perfil</label><br>
                      <input type="file" name="imagen">
                      <input type="hidden" name="usuario" value="{{session('usuario')}}">
                      <button class="btn btn-primary profile-button" type="submit">Modificar imagen</button>
                    </div>
                </form>
                
                {{-- usuario y email --}}
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  <h2 class="font-weight-bold">{{$usuario->usuario}}</h2>
                  <span class="text-black-50">{{$usuario->email}}</span>
                </div>
            </div>
          {{-- segunda columna --}}
            <div class="col-md-7 border-right">
                <div class="p-3 py-5">
                  {{-- formulario --}}
                  <form action="{{route('modificarUsuario')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Datos del perfil</h4>
                    </div>
                    <div class="row mt-2">
                        <input type="hidden" name="usuario" value="{{session('usuario')}}">
                        <div class="col-md-6"><label class="labels">Nombre</label><input type="text" class="form-control" value="{{$usuario->name}}" name="name"></div>
                        <div class="col-md-6"><label class="labels">Apellido</label><input type="text" class="form-control" value="{{$usuario->apellido}}" name="apellido"></div>
                        
                      </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Teléfono</label><input type="text" class="form-control" value="{{$usuario->telefono}}" name="telefono"></div>
                        <div class="col-md-12"><label class="labels">Ciudad</label>
                          
                          <select class="form-control" name="ciudad">
                            <option value="{{session('usuarioCiudad')}}">{{session('usuarioCiudad')}}</option>
                            @foreach ($ciudades as $ciudad)
                              <option value="{{$ciudad->nombre}}">{{$ciudad->nombre}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Género</label>
                          <select class="form-control" name="genero">
                              <option value="Hombre">Hombre</option>
                              <option value="Mujer">Mujer</option>
                              <option value="Otro">Otro</option>
                          </select>
                        </div>
                        <div class="col-md-6"><label class="labels">Preferencia</label>
                          <select class="form-control" name="preferencia">
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Todo">Todo</option>
                          </select>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                      <button class="btn btn-primary profile-button" type="submit">Modificar perfil</button>
                    </div>
                  </form>
                  <hr>
                  <form action="{{route('nuevoHobbieUsuario')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{session('usuario')}}" name="usuario">
                    <div class="row d-flex justify-content-center align-items-center mt-4">
                      <label class="labels">Añadir hobbies</label>
                      <div class="col-6">
                          <select class="form-control" name="hobbie">
                            @foreach ($hobbies as $hobbie)
                              <option value="{{$hobbie->nombre}}">{{$hobbie->nombre}}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-primary profile-button" type="submit">Añadir Hobbie</button>
                      </div>
                    </div>
                  </form>
                    <div class="col-md-12 mt-3"><label class="labels">Tus hobbies</label>
                      @foreach ($hobbieUsuario as $hobbieUsu)
                        <div class="col-6 d-flex justify-content-start " name="hobbie">
                          @if(($hobbieUsu->usuario) == session('usuario')) 
                            <li value="{{$hobbieUsu->hobbie}}"> {{$hobbieUsu->hobbie}}</li><br>
                          @endif 
                        </div>
                       @endforeach 
                    </div>
                  
                  </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
   
    </div>
    </div>
    </div>
    </main>
    <!-- FOOTER -->
    @yield('footer')

    <script src="js/inicio.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>