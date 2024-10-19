<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Combobox</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <h2>Convertidor de unidades</h2>
        <form method="POST" action='/convertir'>
            @csrf
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="conversor">
                <option value="1">MB a TB</option>
                <option value="2">GB a MB</option>
                <option value="3">GB a TB</option>
                <option value="4">TB A GB</option>
            </select>

            <div class="mb-3">
                <label for="nombre" class="form-label">Cantidad 1</label>
                <input type="number" class="form-control" name="cant1" placeholder="Ingresa la cantidad 1 indicada en el combobox" required>
            </div>

            <button type="submit" class="btn btn-primary">Resultado</button>
        </form>
    </div>
</body>
</html>
