<?php

namespace App\Http\Controllers;

use App\Models\Calzado;
use App\Models\Promocion;
use Illuminate\Http\Request;


class PromocionController extends Controller
{
    public function index()
    {   $promociones = Promocion::get();
        return view('promociones.index',compact('promociones'));
    }
}
