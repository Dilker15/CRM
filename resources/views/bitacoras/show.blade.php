@extends('adminlte::page')

@section('title', 'CRM')

@section('content_header')
    <h1>Registro de activades del usuario {{$user->name }}</h1>
@stop

@section('content')
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Operaciones
            </div>
            <div class="pull-right">
                <a href="{{route('bitacoras.index')}}"class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
             @foreach($bitacoras as $bitacora)
                <div class="card-custom bg-secondary" id="bitacora">
                    <div class="row p-3">
                        <div class="col-md-5">
                            <label for="created_at">
                                Fecha:
                            </label>
                            <input type="text" name="created_at" id="created_at" value="{{$bitacora->hora_modificada}}" class="form form-control" readonly>
                        </div>
                        <div class="col-md-4 text-center">
                            <label for="accion">
                              Accion:
                            </label>
                            
                           <input type="text" name="accion" id="accion" value="{{$bitacora->accion_descripcion}}" class="text-center form form-control {{$bitacora->accion_color}}">
                        </div>
                        <div class="col-md-5">
                            <label for="tabla">
                                Tabla:
                            </label>
                            <input type="text" id="tabla" name="tabla" value="{{$bitacora->tabla}} " class="form form-control" readonly>
                        </div>
                        <div class="row">
                           
                            <div class="col-md-8">
                                <label for="datos">
                                    Modificaciones:
                                </label>
                                <textarea name="datos" id="datos" cols="50" rows="10" class="form form-control">
                                    {{$bitacora->datos}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        #accion{
            padding-left:1px

        }
        #bitacora{
            border: 1px black solid;
            margin: 1rem;

        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop