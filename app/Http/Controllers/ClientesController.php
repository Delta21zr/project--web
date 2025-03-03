<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function crear() {
        return view('dash.vistas.clientes.crear');
    }


    public function leer() {
    $clientes = Cliente::all(); // Cliente con mayúscula inicial
        return view ('dash.vistas.clientes.leer', compact('clientes'));
    //dd($clientes);
    // return view('dash.vistas.clientes.crear');
    }
    public function eliminar() {
        $clientes = Cliente::all(); // Cliente con mayúscula inicial
            return view ('dash.vistas.clientes.eliminar', compact('clientes'));
    }
public function update(Request $request, $id)
{
    // Validación de los datos
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido1' => 'required|string|max:255',
        'apellido2' => 'required|string|max:255',
    ]);

    // Buscar el cliente por el ID
    $cliente = Cliente::find($id);

    if ($cliente) {
        // Actualizar los datos
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente');
    } else {
        return redirect()->route('clientes.index')->with('error', 'Cliente no encontrado');
    }
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
    public function destroy(Request $request)
    {
        // Obtener el ID del cliente
        $Id = $request->input("Idcliente");
    
        // Buscar el cliente por el ID usando la columna 'cliente_id'
        $cliente = Cliente::find($Id);  // Esto buscará en la columna 'cliente_id'
    
        if ($cliente) {
            // Si el cliente existe, eliminarlo
            $cliente->delete();
            // Redirigir con mensaje de éxito
            return redirect()->route('clientes.index')->with('success', 'Cliente borrado correctamente');
        } else {
            // Si el cliente no existe, redirigir con mensaje de error
            return redirect()->route('clientes.index')->with('error', 'Cliente no encontrado');
        }
    }
    
    
    
}

