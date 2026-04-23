<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    
    protected $table = 'sucursales';
    protected $primarykey = 'id';
    //  protected $fillable = // control y cierre de llave
    // ['nombre','apellido', 'especialidad', 'telefono', 'correo'];
   
    public $timestamps=false;
}
