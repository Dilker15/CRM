<?php

namespace App\Http\Controllers;

use App\Models\Cliente\Cliente;
use App\Models\User;
use App\Models\Calzado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Cliente1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function perfil(){
        return view('tienda.perfil');
    }


    public function catalogo(){
      //$calzados = Calzado::all();

        //calzados destacados
        $calzados = DB::table('calzado')
                    //->groupBy('marca','precio','stock','estado','detalle','imagen')
                   ->where('estado','=','Promocion')->get();

    //calzados para mujeres
        $calzados1 = DB::table('calzado')
                  
                  //  ->where('estado','=','Destacado'  )->get();
                      ->where([
                        ['estado','=','Destacado'],
                        ['tipo', '=','mujer'],
                      ])->get();

    //calzados para hombres
        $calzados2 = DB::table('calzado') 
                  //  ->where('tipo','=','hombre')->get();
                  ->where([
                    ['estado','=','Destacado'],
                    ['tipo', '=','hombre'],
                  ])->get();

      return view('tienda.home1',compact('calzados','calzados1','calzados2'));
    }



    public function ListarCalzadosHombres(){
        $calzados2 = DB::table('calzado')->where('tipo','=','hombre')->get();   
        $niños =     DB::table('calzado') ->where('tipo','=','kidman')->get();
   

        return view('tienda.hombres',compact('calzados2','niños'));
    }
   

    public function ListarCalzadosMujeres(){
      $calzados1 = DB::table('calzado')->where('tipo','=','mujer')->get();   
      $niñas =     DB::table('calzado') ->where('tipo','=','kidwoman')->get();
 

      return view('tienda.mujeres',compact('calzados1','niñas'));
  }


    
     public function ListarCalzado($id,$carpeta){
       $calzado = Calzado::find($id);
     //   $c= $carpeta;
        return view('tienda.detalle',compact('calzado','carpeta'));
     }

     public function ListarCalzado1($id,$carpeta){
      $c = Calzado::find($id);
    //   $c= $carpeta;
       return view('tienda.hombres',compact('c','carpeta'));
    }

     public function MostrarCalzado($id){
         $ide= $id;
        return view('tienda.detalle',compact('ide'));
     }



    public function index()
    {
     
      return view('tienda.loginregister');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     
    public function create()
    {
        return view('administrativos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        User::create($inputs);

        return redirect()->route('administrativos.index')->with('success','Administrativo Creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
