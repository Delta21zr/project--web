<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema CRUD de ejemplo">
    <title>Sistema CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/clientes/crear">Crear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes/eliminar">Eliminar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes/leer">Leer</a> <!-- Nueva opción de lectura -->
                </li>
                <li class="nav-item">
                    <!--<a class="nav-link" href="/clientes/actualizar">Actualizar</a> Nueva opción de actualización -->
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="javascript:void(0);" tabindex="-1" aria-disabled="true" style="pointer-events: none; color: #6c757d;">Deshabilitado</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content') <!-- Aquí se cargará el contenido específico de cada vista -->
</div>

<!-- Carga de JS necesaria para Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Espacio para insertar scripts adicionales -->
@yield('scripts')

</body>
</html>
