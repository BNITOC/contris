@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Pin</h1>

    <form action="{{ route('pins.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duración (días)</label>
            <input type="number" name="duracion" id="duracion" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('pins.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
