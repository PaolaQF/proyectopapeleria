<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = 'ventas';
    protected $primaryKey = 'id';
    protected $fillable = ['id',
    'sucursal_id',
    'empleado_id', 
    'cliente_id',
    'folio',
    'fecha_venta',
    'metodo_pago',
    'subtotal',
    'descuento',
    'impuesto',
    'total',
    'estatus'];
    public $timestamps = false;
}