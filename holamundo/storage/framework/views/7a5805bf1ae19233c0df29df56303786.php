<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Bootstrap</title>
    <!-- Cargar archivos CSS y JS de Bootstrap usando Vite -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/welcome.css']); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    
</head>
<body>

    <!-- Menú de navegación (Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Sitio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card" style="width: 18rem;">
    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen de ejemplo">
    <div class="card-body">
        <h5 class="card-title">Título de la Tarjeta</h5>
        <p class="card-text">Este es un texto breve de descripción que proporciona información adicional sobre el contenido de la tarjeta.</p>
        <a href="#" class="btn btn-primary">Ir a algún lugar</a>
    </div>
</div>


    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-light">Política de Privacidad</a></li>
                <li class="list-inline-item"><a href="#" class="text-light">Términos de Servicio</a></li>
                <li class="list-inline-item"><a href="#" class="text-light">Soporte</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>
<?php /**PATH C:\laragon\www\s191pw\holamundo\resources\views/caracteristicas.blade.php ENDPATH**/ ?>