<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    @vite(['resources/css/plantilla.css'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{__('Biblioteca')}} Alejandría</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{request()->routeis('rutaprincipal')?"text-success":""}}" aria-current="page" href="{{ route('rutaprincipal')}}">{{__('Inicio')}}</a>
        <a class="nav-link {{request()->routeis('rutaregistro')?"text-success":""}}" href="{{ route('rutaregistro')}}">{{__('Registro')}}</a>
      </div>
    </div>
  </div>
</nav>



<div class="container-fluid">
@yield('contenido')
</div>


<footer class="bg-dark text-white text-center py-3">
  <div class="container">
    <p class="mb-0">© {{__('Biblioteca')}} Alejandría</p>
    <p class="mb-0">{{__('Biblioteca')}}. 30-10-2024</p>
    <p class="mb-0">{{__('Desarrollado por')}} Jose Ángel Martínez Cabrera</a></p>
  </div>
</footer>

</body>
</html>