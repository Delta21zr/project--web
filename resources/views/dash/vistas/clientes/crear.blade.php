    @extends("dash.layouts.app")
    @section("content")
    <!-- <div class="card" style="width: 18rem;"> -->
    <div class="card-body">
        <h5 class="card-title">anadir un cliente</h5>
        <form action="">
            <div class = "form-group">
                <label for="nombre">nombre(s) del cliente</label>
                <input type="text" name = "nombre" class = "form-control" required>
            </div>
            <div class = "form-group">
                <label for="napellido1">apelldio1 del cliente</label>
                <input type="text" name = "apellido1" class = "form-control" required>
            </div>
            <div class = "form-group">
                <label for="apellido2">napellido2 del cliente</label>
                <input type="text" name = "apelldio2" class = "form-control" required>
            </div>
            <button type ="submit"class = "form-control">guardar</button>
        </form>
    </div>
    </div>
    @endsection