<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/welcome.css']); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    
    <title><?php echo $__env->yieldContent('titulo'); ?></title>
    <!-- Cargar archivos CSS y JS de Bootstrap usando Vite -->
   
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

<?php echo $__env->yieldContent('contenido'); ?>

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
<?php /**PATH C:\laragon\www\s191pw\holamundo\resources\views/plantillaprueba.blade.php ENDPATH**/ ?>