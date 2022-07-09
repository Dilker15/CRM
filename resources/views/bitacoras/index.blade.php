@extends('adminlte::page')

@section('title', 'CRM')

@section('content_header')
    <h1>Bitacoras / Logs </h1>
@stop

@section('content')
    <div class="card custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Bitacoras de Usuarios:
            </div>
            <div class="pull-right">
                <a href="{{route('bitacoras.create')}}" class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-plus"></i>
                    &nbsp;
                    Nada
                </a>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table id="miTabla" class="table table-striped table-bordered table-hover" style="width:100%">
                <thead class="bg-secondary">
                    <tr>
                            <th class="text-center">
                                Usuario:
                            </th>
                            <th class="text-center">
                                Acciones
                            </th>
                     </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        {{$k=0;}} 
                            @foreach($bitacoras as $bitacora)
                             
                                 @if($user->id == $bitacora->user_id and $k==0)
                                 {{$k++;}}
                                    <tr>
                                        <td class="text-center">
                                           {{$user->name}}  
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('bitacoras.show',$user)}}" class="btn btn-sm btn-info">
                                                <i class="fa fa-eye"></i>
                                                &nbsp;
                                                Ver
                                            </a>
                                        </td>
                                    
                                    </tr>    
                                 @endif
                             @endforeach
                        @endforeach

                </tbody>
            </table>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
        $(document).ready(function() {
        $('#miTabla').DataTable();
        } );

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
@stop