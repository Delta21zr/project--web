@extends("dash.layouts.app")
@section("content")

<div class="card-body">
    <h5 class="card-title">Añadir un producto</h5>

    <form method="POST" action="{{ route('productos.store') }}"> <!-- Acción corregida -->
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre(s) del producto</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label> <!-- Etiqueta corregida -->
            <input type="text" name="descripcion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label> <!-- Etiqueta corregida -->
            <input type="text" name="precio" class="form-control" required>
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
