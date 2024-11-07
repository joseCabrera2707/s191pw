<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    @session('formulario')
    <script>
        Swal.fire({
            title: "Guardado Correctamente",
            text: '{{$value}}',  
            icon: "success"
        });
    </script>
    @endsession
    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

    <form method="POST" action="/enviarformulario">
    @csrf
        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="text" class="form-control" name="correo">
            <small>{{$errors->first('correo')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="text" class="form-control" name="contrasena">
            <small>{{$errors->first('contrasena')}}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="text" class="form-control" name="edad" >
            <small>{{$errors->first('edad')}}</small>
        </div>



        <button type="submit" class="btn btn-danger "> Guardar Usuario</button>
    </form>

</div>


</body>
</html>