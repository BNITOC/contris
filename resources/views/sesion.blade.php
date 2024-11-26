<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/sesion.css') }}">
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="imagen\logo.png" alt="Logo" width="50" height="50">
        </div>
        <div class="titulo">
            <h1>Iniciar Sesión</h1>
        </div>
        <div class="iniciar-sesion">
             <a href ="{{route('index')}}">
           
            <button>inicio</button>
             </a>
        </div>
    </div>

    <div class="main-content">
        <div class="cuadro-validacion">
            <input type="text" placeholder="Usuario">
            <input type="password" placeholder="Contraseña">
            <button>Entrar</button>
        </div>
    </div>

    <div class="promocion">
        <p>¡No te pierdas nuestras <strong>ofertas exclusivas</strong>!</p>
    </div>

    <footer>
        <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
