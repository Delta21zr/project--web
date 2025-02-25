<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function crear() {
        return view('dash.vistas.clientes.crear');
    }

}
