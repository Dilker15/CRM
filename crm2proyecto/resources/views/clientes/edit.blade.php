@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Datos</h1>
@stop

@section('content')
   <div class="card-custom">
       <div class="card-header bg-secondary">
            <div class="card-title">
                Editar Datos de {{$cliente->nombre}}
            </div>
            <div class="pull-right">
                <a href="{{route('clientes.index')}}" class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
       </div>
       
       <div class="card-body">
            <form action="{{route('clientes.update',$cliente)}}" method="post" id="formulario">
               
                <fieldset>
                    <center><legend>FORMULARIO DE EDICION</legend></center>
                    @csrf 
                    @method('PUT')
                    @include('clientes.partial.form')
                    <div class="pull-right mt-3 ml-3">
                        <button class="btn btn-sm btn-success float-right">
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
            border:1px solid black;
            padding:2rem;

        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop