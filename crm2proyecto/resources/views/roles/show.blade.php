@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Datos del Rol</h1>
@stop

@section('content')
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Permisos Asignados
            </div>
            <div class="pull-right">
                <a href="{{route('roles.index')}}" class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
         </div>
         <div class="card-custom">
             
                 <div class="card-header">
                     <div class="col-md-6">
                         <label for="nombre">
                             Nombre del Rol:
                         </label>
                         <input type="text" name="name" id="name" value="{{$rol->name}}" class="form form-control" readonly>
                    </div>
                </div>
                
                 <div class="card-body">
                  <span class="bg-secondary"><strong>PERMISOS ASIGNADOS AL ROL</strong></span>
                   @foreach($permisos as $permiso)
                        <div class="col-md-6">
                            <label for="nombre">
                                {{$permiso->name}}
                                <input type="checkbox" name="name" id="name" value="{{$permiso->name}}" checked disabled>
                            </label>

                        </div>

                   @endforeach
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