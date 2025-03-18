@extends("dash.layouts.app")

@section("content")
    <h1>Actualizar Cliente</h1>
    <form method="POST" action="{{ route('clientes.actualizar', $cliente->cliente_id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre(s)</label>
            <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido1">Apellido 1</label>
            <input type="text" name="apellido1" value="{{ $cliente->apellido1 }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido2">Apellido 2</label>
            <input type="text" name="apellido2" value="{{ $cliente->apellido2 }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
@endsection
