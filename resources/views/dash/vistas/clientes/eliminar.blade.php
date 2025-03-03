@extends("dash.layouts.app")

@section("content")
<div class="card-body">
    <h5 class="card-title">Eliminar Cliente</h5>

    <!-- El formulario está enviando una solicitud POST para eliminar un cliente -->
    <form method="POST" action="{{ route('clientes.destroy') }}">
    @csrf
    @method('DELETE') <!-- Esto asegura que se simula un método DELETE -->
    
    <div class="form-group">
        <label for="Idcliente">Id del Cliente</label>
        <input type="text" name="Idcliente" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
</form>


    <!-- Mostrar mensajes de éxito o error -->
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger"> <!-- Cambié la clase a alert-danger -->
            {{ session('error') }}
        </div>
    @endif
</div>
@endsection
