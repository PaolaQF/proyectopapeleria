<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    
    //All: es un contenedor de todos los datos 
    function index(){
    $productos = Producto:: all();
    return view( "productos.index", [ 'productos' => $productos]);

    }
}