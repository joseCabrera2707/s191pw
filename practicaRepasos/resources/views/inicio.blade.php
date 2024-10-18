<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portada</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-light">

    <div class="container d-flex flex-column min-vh-100 justify-content-center align-items-center">
        
        <div class="text-center mb-4">
            <h1 class="display-4">Bienvenido</h1>
            <p class="lead">Universidad politécnica de Querétaro</p>
        </div>

        
        <div class="card text-center border-success" >
            <img src="{{ asset('images/upq.jpeg') }}"  class="card-img-top rounded-circle mx-auto mt-4"  alt="Imagen de perfil">
            <div class="card-body">
                <h5 class="card-title">Nombre del Usuario</h5>
                <p class="card-text">
                    <strong>Nombre:</strong>José Ángel Martínez Cabrera<br>
                    <strong>Carrera:</strong> Ingeniería en Sistemas Computacionales<br>
                    <strong>Universidad:</strong> UPQ<br>
                    <strong>Materia:</strong> Programación Web<br>
                    <strong>Teléfono:</strong> 4423300114
                </p>
            </div>
        </div>

        
    </div>

</body>
</html>