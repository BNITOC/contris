<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Menú lateral -->
        <div class="border-end bg-light" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4">
                <h5>Panel de Administración</h5>
            </div>
            <div class="list-group list-group-flush">
                <a href="admin" class="list-group-item list-group-item-action">Inicio</a>
                <a href="usuarios" class="list-group-item list-group-item-action">Usuarios</a>
                <a href="inventario" class="list-group-item list-group-item-action">Inventario</a>
                <a href="#" class="list-group-item list-group-item-action">Crear Vendedor</a>
                <a href="#" class="list-group-item list-group-item-action">Configuración</a>
            </div>
        </div>

        <!-- Contenido -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn" id="menu-toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="container-fluid mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
