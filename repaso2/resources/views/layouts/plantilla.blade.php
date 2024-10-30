<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    @vite(['resources/css/plantilla.css'])
    <title>@yield('titulo')</title>
    <style>
    

</style>

</head>
<body>


<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Biblioteca Alejandría</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{ route('rutaprincipal')}}">Home</a>
        <a class="nav-link" href="{{ route('rutaregistro')}}">Registro</a>
      </div>
    </div>
  </div>
</nav>

<!--Contenido-->

<div class="container-fluid">
@yield('contenido')
</div>

<!-- Footer -->

<footer class="bg-dark text-white text-center py-3">
  <div class="container">
    <p class="mb-0">© Biblioteca Alejandría</p>
    <p class="mb-0">Todos los derechos reservados. 30 de Octubre de 2024</p>
    <p class="mb-0">Desarrollado por Jose Ángel Martínez Cabrera</a></p>
  </div>
</footer>

</body>
</html>