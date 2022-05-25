@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  

@section('content')


<div class="card-custom">
    <div class="card-header bg-secondary">
        <div class="card-title">
            Datos Personales: {{$administrativo->nombre}}
        </div>
        <div class="pull-right">
            <a href="{{route('administrativos.index')}}" class="btn btn-sm btn-warning float-right">
                <i class="fa fa-reply"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <label for="nombre">
                    Nombre:
                </label>
                <input type="text" name="nombre" id="nombre" value="{{$administrativo->nombre}}" class="form form-control" readonly >
            </div> 
            <div class="col-md-4">
                <label for="Apellidos">
                    Apellidos:
                </label>
                <input type="text" name="apellidos" id="apellidos" value="{{$administrativo->apellidos}}" class="form form-control" readonly>
            </div>

            <div class="col-md-4">
                <label for="ci">
                    Ci:
                </label>
                <input type="text" name="ci" id="ci" value="{{$administrativo->ci}}" class="form form-control" readonly>

            </div>

            <div class="col-md-4">
                <label for="direccion">
                    Direccion:
                </label>
                <input type="text" name="direccion" id="direccion" value="{{$administrativo->direccion}}" class="form form-control" readonly>
            </div>

            <div class="col-md-4">
                <label for="correo">
                    Correo:
                </label>
                <input type="text" name="correo" id="correo" value="{{$administrativo->correo}}" class="form form-control" readonly>
            </div>

            <div class="col-md-4">
                <label for="telefono">
                    Telefono:
                </label>
                <input type="text" name="telefono" id="telefono" value="{{$administrativo->telefono}}" class="form form-control" readonly>
            </div>

            <div class="col-md-4">
                <label for="sexo">
                    Sexo:
                </label>
                <input type="text" name="sexo" id="sexo" value="{{$administrativo->sexo == 'M' ? 'MASCULINO' :'FEMENINO'}}" class="form form-control" readonly>
            </div>

            <div class="col-md-4">
                <label for="fecha_nacimiento">
                    Fecha Nacimiento:
                </label>
                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$administrativo->fecha_nacimiento}}" class="form form-control" readonly>
            </div>

            <div class="col-md-4">
                <label for="estado">
                    Estado:
                </label>
                <input type="text" name="estado" id="estado" value="{{$administrativo->estado == '1'? 'HABILITADO':'DESHABILITADO'}}" class="form form-control {{$administrativo->estado =='1' ? 'bg-success' :'bg-danger'}}">
            </div>

            
        </div>
    </div>
</div>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop