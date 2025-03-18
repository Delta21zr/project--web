@extends("dash.layouts.app")

@section("content")
    <h1>Sistema CRUD</h1>
    <h2>Listado de Clientes</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Cliente</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->cliente_id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido1 }}</td>
                <td>{{ $cliente->apellido2 }}</td>
                <td>
                    <!-- Formulario de eliminación -->
                    <form method="POST" action="{{ route('clientes.destroy', $cliente->cliente_id) }}" style="display:inline;" id="delete-form-{{ $cliente->cliente_id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $cliente->cliente_id }})">Eliminar</button>
                    </form>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
<script>
    // Función que muestra SweetAlert antes de enviar el formulario de eliminación
    function confirmDelete(cliente_id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma, enviamos el formulario
                document.getElementById('delete-form-' + cliente_id).submit();
                Swal.fire(
                    'Deleted!',
                    'The client has been deleted.',
                    'success'
                );
            }
        });
    }
</script>
@endsection
