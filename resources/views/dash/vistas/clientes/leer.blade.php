@extends("dash.layouts.app")

@section("content")
    <h1>Sistema CRUD</h1>
    <h2>Listado de Clientes</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Cliente</th> <!-- Nueva columna para cliente_id -->
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->cliente_id }}</td> <!-- Muestra el cliente_id -->
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido1 }}</td>
                <td>{{ $cliente->apellido2 }}</td>
                <td>
                <button type="button" class="btn btn-primary btn-sm">Actualizar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
