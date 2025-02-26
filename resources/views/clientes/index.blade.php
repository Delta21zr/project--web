@extends('dash.layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Clientes</h1>

    @if(session('success'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if(count($clientes) > 0)
        <ul class="list-group mt-3">
            @foreach($clientes as $cliente)
                <li class="list-group-item">
                    {{ $cliente->nombre }} {{ $cliente->apellido1 }} {{ $cliente->apellido2 }}
                </li>
            @endforeach
        </ul>
    @else
        <p class="mt-3">No hay clientes registrados.</p>
    @endif
</div>
@endsection
