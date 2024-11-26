<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de PIN</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @include('partials.barra')

    <main class="main-content">
        <div class="cuadro-validacion">
            <input type="text" placeholder="Ingrese su Usuario" id="usuario">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Validar
            </button>
        </div>
    </main>
    

 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TIEMPO DE PIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="time-info">
                    <h4>DIA: <span id="dia"> 3</span></h4>
                    <h4>HORA: <span id="hora">14</span></h4>
                    <h4>MINUTOS: <span id="minutos">34</span></h4>
                  
                </div>
                <p id="mensaje-usuario"></p>
            </div>
                      
        </div>
    </div>
</div>

    
</body>

</html>
