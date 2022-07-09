@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  

@section('content')


<div class="card-custom">
    <div class="card-header bg-secondary">
        <div class="card-title">
            Datos generales:
        </div>
        <div class="pull-right">
            <a href="{{route('ventas')}}" class="btn btn-sm btn-warning float-right">
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
                <input type="text" name="nombre" id="nombre" value="{{$venta->id}}" class="form form-control" readonly >
            </div> 
            <div class="col-md-4">
                <label for="Apellidos">
                    Fecha y hora:
                </label>
                <input type="text" name="fechahora" id="fechahora" value="{{$venta->fechahora}}" class="form form-control" readonly>
            </div>

            <div class="col-md-4">
                <label for="Apellidos">
                   Cantidad
                </label>
                <input type="text" name="monto" id="monto" value="{{$venta->monto_total}}" class="form form-control" readonly>
            </div>
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