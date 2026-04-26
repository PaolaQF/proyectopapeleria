<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetVent;

class DetVentController extends Controller
{
    function index(){
        $Detalle_Venta = DetVent::all();
        return view("detalle_venta.index",['Detalle_Venta'=>$Detalle_Venta]);
    }

    function show($id){
        $DetVent = DetVent::find($id);
        return view("detalle_venta.show",['DetVent'=>$DetVent]);
        }

    function edit ($id){
        $DetVent = DetVent::find($id);
        return view ("detalle_venta.edit", ['DetVent'=>$DetVent]);
        }

    function create (){
        return view('detalle_venta.create');
    }

    function update (Request $request,$id){
        $DetVent = DetVent::find($id);

        $DetVent->venta_id = $request->venta_id;
        $DetVent->producto_id = $request->producto_id;
        $DetVent->cantidad = $request->cantidad;
        $DetVent->precio_unitario = $request->precio_unitario;
        $DetVent->descuento = $request->descuento;
        $DetVent->impuesto = $request->impuesto;
        $DetVent->subtotal = $request->subtotal;
        $DetVent->observaciones = $request->observaciones;
        $DetVent->entregado = $request->entregado;
        
        $DetVent->save();

        return redirect()->route('detalle_venta.index');
    }

    function store (Request $request){
        $DetVent = new DetVent();
        
        $DetVent->venta_id = $request->venta_id;
        $DetVent->producto_id = $request->producto_id;
        $DetVent->cantidad = $request->cantidad;
        $DetVent->precio_unitario = $request->precio_unitario;
        $DetVent->descuento = $request->descuento;
        $DetVent->impuesto = $request->impuesto;
        $DetVent->subtotal = $request->subtotal;
        $DetVent->observaciones = $request->observaciones;
        $DetVent->entregado = $request->entregado;

        $DetVent->save();

        return redirect()->route('detalle_venta.index');
    }

    function destroy($id){
        $DetVent = DetVent::find($id);
        $DetVent->delete();
        return redirect()->route('detalle_venta.index');
    }

}
