<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'sucursal_id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'puesto',
        'telefono',
        'email',
        'fecha_ingreso',
        'salario',
        'turno',
        'estatus'
    ];
}