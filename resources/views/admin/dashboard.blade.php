@extends('layouts.admin') <!-- Esto hace que esta vista use el layout admin -->

@section('content')
<div class="container-fluid">
    <!-- Filtro de Vendedor en la esquina superior derecha -->
    <div class="d-flex justify-content-end my-3">
        <label for="vendedorFilter" class="me-2">Filtrar por Vendedor:</label>
        <select id="vendedorFilter" class="form-select w-auto" onchange="filtrarPorVendedor()">
            <option value="todos">Todos</option>
            <option value="vendedor1">Vendedor 1</option>
            <option value="vendedor2">Vendedor 2</option>
            <!-- Más opciones de vendedores si es necesario -->
        </select>
    </div>

    <!-- Tarjetas de resumen y gráfico de ventas -->
    <div class="row">
        <div class="col-md-12"> <!-- Cambiado para que ocupe toda la fila -->
            <!-- Gráfico de Ventas -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Ventas</h5>
                    <div>
                        <button class="btn btn-outline-primary btn-sm" onclick="updateChart('diario')">Diario</button>
                        <button class="btn btn-outline-primary btn-sm" onclick="updateChart('quincenal')">Quincenal</button>
                        <button class="btn btn-outline-primary btn-sm" onclick="updateChart('mensual')">Mensual</button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Canvas con mayor tamaño -->
                    <canvas id="ventasChart" style="height: 200px; width: 90%;"></canvas>
                </div>
            </div>
        </div>
        <!-- Total de Ventas -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Total de Ventas</h5>
                </div>
                <div class="card-body">
                    <h2 id="totalVentas">450 Pines Vendidos</h2>
                    <p>Este es el total de pines vendidos desde el inicio del sistema.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Resto del diseño: Vendedores Activos, Inventario, etc. -->
    <div class="row mt-4">
        <div class="col-md-4">
            <!-- Vendedores Activos -->
            <div class="card">
                <div class="card-header">
                    <h5>Vendedores Activos</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Vendedor 1: 150 Pines</li>
                        <li>Vendedor 2: 120 Pines</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Inventario -->
            <div class="card">
                <div class="card-header">
                    <h5>Inventario Actual</h5>
                </div>
                <div class="card-body">
                    <p>Disponibles: 500 Pines</p>
                    <p>Vendidos: 300 Pines</p>
                </div>
            </div>
        </div>
       
    </div>
</div>

<!-- Scripts para gráficos con datos quemados -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('ventasChart').getContext('2d');

    // Datos quemados para cada vendedor y periodo
    var dataPorVendedor = {
        todos: { diario: [10, 15, 8, 12, 20, 25, 18], quincenal: [150, 120, 130, 140, 160, 180, 175], mensual: [500, 480, 510, 530, 550, 570, 590] },
        vendedor1: { diario: [5, 8, 4, 6, 10, 12, 9], quincenal: [75, 60, 65, 70, 80, 90, 88], mensual: [250, 240, 255, 265, 275, 285, 295] },
        vendedor2: { diario: [3, 5, 2, 4, 8, 10, 5], quincenal: [60, 55, 62, 68, 75, 82, 79], mensual: [200, 190, 205, 220, 230, 240, 250] }
    };

    var ventasChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'],
            datasets: [{
                label: 'Ventas Diarias',
                data: dataPorVendedor.todos.diario,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,  // Hacer que el gráfico sea responsivo
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var periodoActual = 'diario';
    var vendedorActual = 'todos';

    // Función para actualizar el gráfico según el periodo seleccionado
    function updateChart(periodo) {
        periodoActual = periodo;
        ventasChart.data.datasets[0].data = dataPorVendedor[vendedorActual][periodo];
        ventasChart.data.datasets[0].label = `Ventas ${periodo.charAt(0).toUpperCase() + periodo.slice(1)}`;
        ventasChart.update();
    }

    // Función para filtrar los datos por vendedor
    function filtrarPorVendedor() {
        vendedorActual = document.getElementById('vendedorFilter').value;
        updateChart(periodoActual); // Actualizar el gráfico con los datos filtrados
        actualizarTotalVentas(); // Actualizar el total de ventas
    }

    // Actualizar total de ventas con datos quemados
    function actualizarTotalVentas() {
        var totalVentas = dataPorVendedor[vendedorActual].mensual.reduce((a, b) => a + b, 0);
        document.getElementById('totalVentas').innerText = `${totalVentas} Pines Vendidos`;
    }

    // Actualización inicial
    actualizarTotalVentas();
</script>

@endsection
