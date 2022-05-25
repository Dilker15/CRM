@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edicion de Roles</h1>
@stop

@section('content')
  <div class="card-custom">
      <div class="card-header bg-secondary">
            <div class="card-title">
               Editar un rol
            </div>
            <div class="pull-right">
                <a href="{{route('roles.index')}}"class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
        </div>
      <div class="card-body">
            <form action="{{route('roles.update',$rol)}}" method="post" id="formulario">
                <fieldset>
                    <center><legend>FORMULARIO DE DATOS</legend></center>
                    @csrf 
                    @method('PUT')
                    @include('roles.partial.form')
                    <div class="pull-right">
                        <button type="submit" class="btn btn-sm btn-success float-right ">
                            <i class="fa fa-save"></i>
                            &nbsp;
                            Actualizar
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
            padding: 2rem

        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop