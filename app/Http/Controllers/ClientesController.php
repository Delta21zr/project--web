<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function crear() {
        return view('dash.vistas.clientes.crear');
    }

    public function index() {
        // Obtener todos los clientes de la base de datos
        $clientes = Cliente::all();

        // Pasar los clientes a la vista
        return view('clientes.index', compact('clientes')); // Pasa la variable $clientes
    }

    public function store(Request $request) {
        // Validación de los datos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255', 
            'apellido1' => 'required|string|max:255', 
            'apellido2' => 'required|string|max:255', 
        ]);

        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido1 = $request->apellido1;
        $cliente->apellido2 = $request->apellido2;

        $cliente->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente');
    }
}
