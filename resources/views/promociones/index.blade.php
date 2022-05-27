@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Promociones</h1>
@stop

@section('content')
   
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
            Promociones:
            @if(session('success'))
                <div class="alert alert-success" role="success">
                    {{session('success')}}
                </div>
            @endif

            </div>
            <div class="pull-right">
                <a href="#"class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-plus"></i>
                    &nbsp;
                    Crear Nueva Promoción
                </a>
            </div>
        </div>
      
        <div class="card-body">         
            <table id="miTabla" class="cell-border" style="width:100%">
                <thead class="bg-secondary">
                    <tr>
                       <th>
                           Descrpcion
                       </th>
                       <th>
                           Fecha de inicio
                       </th>
                       <th>
                           Fecha final
                       </th>
                       
                       <th colspan="3" class="text-center">
                           Acciones
                       </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($promociones as $promocion)
                        <tr>
                            <td>
                                {{$promocion->descripcion}}
                            </td>
                            <td>
                                {{$promocion->fecha_inicio}}
                            </td>
                            <td>
                                {{$promocion->fecha_fin}}
                            </td>
                            
                       
                            <td>
                                <a href="#" class="btn btn-sm btn-warning p-1">
                                    <i class="fa fa-edit"></i>
                                    &nbsp;
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info p-1">
                                    <i class="fa fa-eye"></i>
                                    &nbsp;
                                    Ver
                                </a>
                            </td>
                            <td>
                                <form action="#" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <input type="hidden" id="admin_id" name="admin_id" value="{{$promocion->id}}">
                                    <div class="pull-right">
                                        <button class="btn btn-sm btn-danger float-right p-1" >
                                            <i class="fa fa-trash"></i>
                                            &nbsp;
                                            Eliminar
                                        </button>
                                    </div>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                   
                </tbody>
               
            </table>

        </div>
    </div>

@stop

@section('css')
    
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css"> --}}
    
@stop

@section('js')
    <script> 
    $(document).ready(function() {
    $('#miTabla').DataTable();
} )

    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
@stop