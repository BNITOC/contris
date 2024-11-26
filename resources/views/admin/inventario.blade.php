@extends('layouts.admin') <!-- Se extiende el layout admin -->

@section('content') <!-- Se inicia la sección 'content' -->
<div class="container">
    <h1>Listado de Pines (Datos Simulados)</h1>
    <a href="create" class="btn btn-primary mb-3">Crear Nuevo Pin</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Duración (días)</th>
                <th>Fecha de Activación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pins as $pin)
                <tr>
                    <td>{{ $pin['id'] }}</td>
                    <td>{{ $pin['codigo'] }}</td>
                    <td>{{ $pin['duracion'] }}</td>
                    <td>{{ $pin['fecha_activacion'] ?? 'No activado' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
