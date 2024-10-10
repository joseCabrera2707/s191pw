
<?php $__env->startSection('titulo','preciosdlv'); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Nuestros Precios</h1>
        <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Plan Básico</h5>
                        <p class="card-text">Ideal para individuos que recién comienzan.</p>
                        <h2 class="card-price">$10.00</h2>
                        <a href="#" class="btn btn-primary">Seleccionar</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Plan Estándar</h5>
                        <p class="card-text">Para pequeños negocios que necesitan más recursos.</p>
                        <h2 class="card-price">$20.00</h2>
                        <a href="#" class="btn btn-primary">Seleccionar</a>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Plan Premium</h5>
                        <p class="card-text">Para empresas que requieren todas las características.</p>
                        <h2 class="card-price">$30.00</h2>
                        <a href="#" class="btn btn-primary">Seleccionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillaprueba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\s191pw\holamundo\resources\views/precios.blade.php ENDPATH**/ ?>