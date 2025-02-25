@extends("dash.layouts.app")
@section("content")

<div class="card-body">
    <h5 class="card-title">Añadir un cliente</h5>

    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre(s) del cliente</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido1">Apellido 1 del cliente</label>
            <input type="text" name="apellido1" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido2">Apellido 2 del cliente</label>
            <input type="text" name="apellido2" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>

@endsection
