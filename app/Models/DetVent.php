<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetVent extends Model
{
    use HasFactory;
    protected $table = 'detalle_venta';

    // Tu tabla usa "id"
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'venta_id',
        'producto_id',
        'cantidad',
        'precio_unitario',
        'descuento',
        'impuesto',
        'subtotal',
        'observaciones',
        'entregado',
        
    ];
}