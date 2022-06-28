<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente\Cliente;


class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::get();
        return view('ventas.index',compact('ventas'));
    }
    public function pdf(){
        $ventas = Venta::get();
        return view('ventas.pdf',compact('ventas'));

    }
    public function show(Venta $venta)
    {
        return view('ventas.show',compact('venta'));
    }
}
