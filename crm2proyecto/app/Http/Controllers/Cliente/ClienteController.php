<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente\Cliente;
use App\Models\User;
use Spatie\Permission\Models\Role;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $clientes = Cliente::get();
        return view('clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
        $cliente = Cliente::create($inputs);
        $email = $inputs['email'];
        $rol_id=2;
        $contraseña = $inputs['nombre'].'123';
        $persona_id= $cliente->id;
        $this->crearUsuario($inputs['nombre'],$email,$contraseña,$rol_id,$persona_id);
        
        return redirect()->route('clientes.index')->with('success','Cliente creado con Exito');
    }   

    private function crearUsuario($name,$email,$ci,$rol_id,$persona_id){

        $usuario = User::create([
            'name' => $name,
            'email'=> $email,
            'password' => \bcrypt($ci),
            'role_id' => $rol_id,
            'tipo_id' => 2,
            'persona_id' =>$persona_id,

        ]);
        $rol = Role::find($rol_id);
        $usuario->assignRole($rol);


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
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Cliente $cliente)
    {
            $inputs = $request->all();
            $usuario = User::where('tipo_id',2)->where('persona_id',$cliente->id)->first();
            $usuario->update([
                'email' => $inputs['email'],
                'name' =>$inputs['nombre'],
                'password' => \bcrypt($inputs['nombre'].'123'),
            ]);

            $cliente->update($inputs);
            return redirect()->route('clientes.index')->with('success','Cliente Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $inputs = $request->all();
        $id = $inputs['cliente_id'];
        $cliente = Cliente::find($id);
        $cliente->update([
            'estado' => 2,
        ]);
        return redirect()->route('clientes.index')->with('danger','Cliente Eliminado Existosamente');
    }
}
