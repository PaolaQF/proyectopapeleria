<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    function index(){
        $ventas = Venta::all();
        return view("ventas.index",['ventas'=>$ventas]);
    }

    function show($id){
        $venta = Venta::find($id);
        return view("ventas.show",['venta'=>$venta]);
        }

    function edit ($id){
        $venta = Venta::find($id);
        return view ("ventas.edit", ['venta'=>$venta]);
        }

    function create (){
        return view('ventas.create');
    }

    function update (Request $request,$id){
        $venta = Venta::find($id);
        $venta->sucursal_id = $request->sucursal_id;
        $venta->empleado_id = $request->empleado_id;
        $venta->cliente_id = $request->cliente_id;
        $venta->folio = $request->folio;
        $venta->fecha_venta = $request->fecha_venta;
        $venta->metodo_pago = $request->metodo_pago;
        $venta->subtotal = $request->subtotal;
        $venta->descuento = $request->descuento;
        $venta->impuesto = $request->impuesto;
        $venta->total= $request->total;
        $venta->estatus = $request->estatus;
        $venta->save();

        return redirect()->route('ventas.index');
    }

    function store (Request $request){
        $venta = new Venta();
        $venta->sucursal_id = $request->sucursal_id;
        $venta->empleado_id = $request->empleado_id;
        $venta->cliente_id = $request->cliente_id;
        $venta->folio = $request->folio;
        $venta->fecha_venta = $request->fecha_venta;
        $venta->metodo_pago = $request->metodo_pago;
        $venta->subtotal = $request->subtotal;
        $venta->descuento = $request->descuento;
        $venta->impuesto = $request->impuesto;
        $venta->total= $request->total;
        $venta->estatus = $request->estatus;
        $venta->save();

        return redirect()->route('ventas.index');
    }

    function destroy($id){
        $venta = Venta::find($id);
        $venta->delete();
        return redirect()->route('ventas.index');
    }
}
