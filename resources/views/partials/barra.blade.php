<!-- resources/views/partials/barra.blade.php -->
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de PIN</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>

<header class="header">
    <div class="logo">
        <img src="{{ asset('imagen/logo.png') }}" alt="Logo" width="50" height="50">
    </div>
    <div class="titulo">
        <h1>Validación de PIN</h1>
    </div>

    <div class="iniciar-sesion">
        <a href="{{ route('sesion') }}">
            <button>Iniciar sesión</button>
        </a>
    </div>
</header>

<footer class="promocion">
    <p><strong>Promoción</strong></p>
    <p>Por cada 2 pines de 15 días, lleva 2 días gratis</p>
</footer>



    


