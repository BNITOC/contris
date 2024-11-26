@extends('layouts.admin') <!-- Se extiende el layout admin -->

@section('content') <!-- Se inicia la sección 'content' -->
<div class="container-fluid">
    <h1 class="mt-4 mb-4 text-center">Lista de Usuarios</h1>

    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Rol</th>
                    <th>Vereda</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario['id'] }}</td>
                        <td>{{ $usuario['nombre'] }}</td>
                        <td>{{ $usuario['email'] }}</td>
                        <td>{{ $usuario['telefono'] }}</td>
                        <td>{{ $usuario['rol'] }}</td>
                        <td>{{ $usuario['vereda'] }}</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary me-1" onclick="editUser({{ $usuario['id'] }})">Editar</button>
                            <button class="btn btn-sm btn-danger" onclick="deleteUser({{ $usuario['id'] }})">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<!-- Scripts de Bootstrap y Bootstrap Icons -->
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

<script>
    function editUser(id) {
        alert('Editar usuario con ID ' + id);
        // Aquí puedes agregar la lógica para editar el usuario
    }

    function deleteUser(id) {
        if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
            alert('Eliminar usuario con ID ' + id);
            // Aquí puedes agregar la lógica para eliminar el usuario
        }
    }
</script>
@endpush
