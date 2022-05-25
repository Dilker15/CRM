@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Creacion de Permisos</h1>
@stop

@section('content')
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Crear Permiso
            </div>
            <div class="pull-right">
                <a href="{{route('permisos.index')}}" class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
                <form action="{{route('permisos.store')}}" method="post" id="formulario">
                 <fieldset>
                    <center><legend>FORMULARIO DE DATOS</legend></center>
                    @csrf 
                    @method('POST')
                    @include('permisos.partial.form')
                    <div class="pull-right">
                        <button type="submit" class="btn btn-sm btn-success float-right mt-3">
                            <i class="fa fa-save"></i>
                            &nbsp;
                            Guardar
                        </button>
                    </div>
                 </fieldset>
                
                </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>
        #formulario{
            border: 1px solid black;
            padding:10px

        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop