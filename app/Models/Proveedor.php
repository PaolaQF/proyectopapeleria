<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
     protected $table = 'proveedores';
    protected $primaryKey = 'id';
    protected $fillable = ['id',
    'nombre_comercial',
    'contacto_nombre', 
    'telefono',
    'email',
    'calle',
    'numero',
    'colonia',
    'ciudad',
    'rfc',
    'dias_credito',
    'estatus'];
    public $timestamps = false;
}