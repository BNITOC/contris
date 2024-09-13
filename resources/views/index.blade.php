<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de PIN</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="imagen\logo.png" alt="Logo" width="50" height="50">
        </div>
        <div class="titulo">
            <h1>Validación de PIN</h1>
        </div>
        <div class="iniciar-sesion">
            <button>Iniciar sesión</button>
        </div>
    </header>
    

    <main class="main-content">
        <div class="cuadro-validacion">
            <h2>Ingrese su usuario</h2>
            <input type="text" placeholder="Usuario" id="usuario">
            <button id="validar">Validar</button>
        </div>
    </main>

    <footer class="promocion">
        <p><strong>IMPORTANTE</strong></p>
        <p>Promoción: Por cada 2  pines de 15 días lleva 2 dias gratis</p>
    </footer>
</body>
</html>
