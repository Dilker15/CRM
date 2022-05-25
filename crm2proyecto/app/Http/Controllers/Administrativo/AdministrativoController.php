<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrativo\Administrativo;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdministrativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrativos = Administrativo::get();
        return view('administrativos.index',compact('administrativos'));
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
        $admin = Administrativo::create($inputs);
        $persona_id = $admin->id;
        $nombre = $inputs['nombre'];
        $email = $inputs['correo'];
        $ci = $inputs['ci'];
        $rol_id = 1; 
       // dd($inputs);

        $this->crearUsuario($nombre,$email,$ci,$rol_id,$persona_id);
        return redirect()->route('administrativos.index')->with('success','Administrativo Creado con Exito');
    }

    
    private function crearUsuario($name,$email,$ci,$rol_id,$persona_id){

        $usuario = User::create([
            'name' => $name,
            'email'=> $email,
            'password' => \bcrypt($ci),
            'role_id' => $rol_id,
            'tipo_id' => 1,
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
    public function show(Administrativo $administrativo)
    {
        return view('administrativos.show',compact('administrativo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrativo $administrativo)
    {
        return view('administrativos.edit',compact('administrativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Administrativo $administrativo)
    {
        $inputs = $request->all();
        $administrativo->update($inputs);
        $email = $inputs['correo'];
        $ci = $inputs['ci'];
        $name= $inputs['nombre'];
        $usuario = User::where('tipo_id',1)->where('persona_id',$administrativo->id)->first();

        $usuario->update([
            'email' => $email,
            'name' => $name,
            'password' => \bcrypt($ci)
        ]);

        return redirect()->route('administrativos.index')->with('success','Datos editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {
        $inputs = $request->all();
        $id = $inputs['admin_id'];
        $admin = Administrativo::find($id);
        $admin->update([
            'estado' => 2
        ]);
        return redirect()->route('administrativos.index')->with('success','eliminado con exito');
    }
}
