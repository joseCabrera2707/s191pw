<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@</title>
    <!-- Cargar archivos CSS y JS de Bootstrap usando Vite -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/welcome.css']); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    
</head>
<body>

    <!-- Menú de navegación (Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Mi Sitio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('feature')); ?>">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('preciasos')); ?>">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <!-- Presentación (Hero Section) -->
        <section class="bg-light py-5 text-center">
            <div class="container">
                <h1 class="display-4">Bienvenido a Mi Sitio Web</h1>
                <p class="lead">Aquí encontrarás todo lo que necesitas sobre nuestros servicios.</p>
                <a href="#" class="btn btn-primary btn-lg">Saber más</a>
            </div>
        </section>

        <!-- Contenido adicional -->
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <h2>Características</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque leo at ligula vehicula auctor.</p>
                </div>
                <div class="col-md-4">
                    <h2>Precios</h2>
                    <p>Vivamus congue justo id augue scelerisque, sed fermentum libero feugiat.</p>
                </div>
                <div class="col-md-4">
                    <h2>Contacto</h2>
                    <p>Phasellus volutpat enim sit amet risus lacinia gravida.</p>
                </div>
            </div>
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
<?php /**PATH C:\laragon\www\s191pw\holamundo\resources\views/welcome.blade.php ENDPATH**/ ?>