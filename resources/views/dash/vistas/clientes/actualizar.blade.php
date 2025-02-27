    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{ route('clientes.update, $cliente') }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre(s) del cliente</label>
            <input type="text" name="nombre" value="{{$cliente->nombre}}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido1">Apellido 1 del cliente</label>
            <input type="text" name="apellido1" value="{{$cliente->apellido1}}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellido2">Apellido 2 del cliente</label>
            <input type="text" name="apellido2"  value="{{$cliente->apellido2}}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>