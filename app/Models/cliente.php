<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Asegurar el nombre correcto de la tabla
    public $timestamps = false; // Evita el error de created_at y updated_at

    protected $fillable = ['nombre', 'apellido1', 'apellido2'];
}

