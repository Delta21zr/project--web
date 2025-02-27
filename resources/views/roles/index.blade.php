@extends('dash.layouts.app')

@section('content')
<div class="container">
    <h1>Lista de clientes</h1>

    <!-- Puedes agregar la lógica para mostrar los clientes aquí -->
    <ul>
        @foreach($clientes as $cliente)
            <li>{{ $cliente->nombre }} {{ $cliente->apellido1 }} {{ $cliente->apellido2 }}</li>
        @endforeach
    </ul>
</div>
@endsection
