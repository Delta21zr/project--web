<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Asegurar que el modelo se refiere a la tabla 'clientes'
    protected $table = 'clientes'; // Nombre correcto de la tabla

    // Evitar los campos 'created_at' y 'updated_at' si no los tienes en la tabla
    public $timestamps = false;

    // Especificar la columna de la clave primaria
    protected $primaryKey = 'cliente_id';  // La clave primaria es 'cliente_id' y no 'id'

    // Si 'cliente_id' no es auto incremental, agrega esta línea
    // public $incrementing = false;

    // Si 'cliente_id' no es entero, puedes especificar el tipo de la clave
    // protected $keyType = 'string'; // Esto es necesario solo si usas UUID u otro tipo diferente de 'int'

    // Definir los campos que se pueden llenar mediante el método fill()
    protected $fillable = ['nombre', 'apellido1', 'apellido2'];
}
