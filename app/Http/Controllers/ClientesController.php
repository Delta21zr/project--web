<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function crear()
    {
        return view('dash.vistas.clientes.crear');
    }
    public function edit($cliente_id)
    {
        $cliente = Cliente::find($cliente_id);
        return view('dash.vistas.clientes.editar', compact('cliente'));
    }


    public function leer()
    {
        $clientes = Cliente::all();
        return view('dash.vistas.clientes.leer', compact('clientes'));
    }

    public function eliminar()
    {
        // Obtener todos los clientes de la base de datos
        $clientes = Cliente::all();  // Asegúrate de obtener todos los clientes
    
        // Pasar los clientes a la vista 'eliminar'
        return view('dash.vistas.clientes.eliminar', compact('clientes'));
    }

    // Método para actualizar cliente
    public function update(Request $request, $id)
    {
        // Validar los datos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido1' => 'required|string|max:255',
            'apellido2' => 'required|string|max:255',
        ]);
    
        // Buscar al cliente
        $cliente = Cliente::find($id);
    
        if ($cliente) {
            // Actualizar los datos del cliente
            $cliente->nombre = $validatedData['nombre'];
            $cliente->apellido1 = $validatedData['apellido1'];
            $cliente->apellido2 = $validatedData['apellido2'];
            $cliente->save();
            
            return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
        } else {
            return redirect()->route('clientes.index')->with('error', 'Cliente no encontrado.');
        }
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function store(Request $request)
    {
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

        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente.');
    }

    public function destroy($cliente_id)
    {
        // Buscar cliente por su cliente_id
        $cliente = Cliente::find($cliente_id);

        if (!$cliente) {
            // Si no existe el cliente, redirigir con mensaje de error
            return redirect()->back()->with('error', 'El cliente con ID ' . $cliente_id . ' no existe.');
        }

        // Eliminar el cliente
        $cliente->delete();

        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', 'Cliente eliminado correctamente.');
    }

    
}
