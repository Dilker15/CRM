<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Calzado;
use App\Models\Venta;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function compra ( Request $request){
        $array=json_decode($_POST["arrayaenviar"]);
        return view('tienda.prueba');
    }
}

