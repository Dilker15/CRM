@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ventas Realizadas</h1>
@stop

@section('content')
   
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Ventas:
            @if(session('success'))
                <div class="alert alert-success" role="success">
                    {{session('success')}}
                </div>
            @endif
           
            </div>
           
            <div class="pull-right">
                <a href="{{route('ventas.pdf')}}"class="btn btn-sm btn-danger ml-2 float-left">
                    <i class="fa fa-book"></i>
                    &nbsp;
                    PDF
                </a>
            </div> 
            
           <!--   <div class=" pull-right">
                
              <a href="" class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-plus"></i>
                    &nbsp;
                    Crear Nuevo Administrativo
                </a>

            </div>-->
            
            
        </div>
      
        <div class="card-body">         
            <table id="miTabla" class="cell-border" style="width:100%">
                <thead class="bg-secondary">
                    <tr>
                       <th>
                           Nombre
                       </th>
                       <th>
                           Fecha
                       </th>
                       <th>
                           Cantidad
                       </th>
                       
                       <th colspan="3" class="text-center">
                           Acciones
                       </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($clientes as $cliente)

                    @foreach ($cliente->ventas as $venta)
                     <tr>
                       <th scope="row"> {{$venta->id}} </th>
                       <td>  {{ $cliente->nombre }} </td>
                       <td> {{$venta->fechahora}} </td>
                       <td> {{$venta->monto_total}} </td>
                       <td>             
                        <a href="{{route('ventas.show',$venta)}}" class="btn btn-sm btn-info p-1">
                            <i class="fa fa-eye"></i>
                            &nbsp;
                            Ver
                        </a>
                  
                        </td>
                     </tr>
                    @endforeach
                  
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