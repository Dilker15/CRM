@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Permisos</h1>
@stop

@section('content')

<div class="card-custom">
    <div class="card-header bg-secondary">
        <div class="card-title">
            Permisos
        </div>
        <div class="pull-right">
            <a href="{{route('permisos.create')}}" class="btn btn-sm btn-warning float-right">
                <i class="fa fa-plus"></i>
                &nbsp;
                Agregar Nuevo Permiso
            </a>
        </div>
    </div>
    <div class="card-body table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Descripcion
                        </th>
                        <th colspan="2">
                            Acciones    
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permisos as $permiso)

                            <tr>
                                <td>
                                    {{$permiso->name}}
                                </td>
                                <td>
                                    {{$permiso->descripcion}}
                                </td>
                                <td>
                                    <a href="{{route('permisos.edit',$permiso)}}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                        &nbsp;
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('permisos.destroy')}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="permiso_id" id="permiso_id" value="{{$permiso->id}}">

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                            &nbsp;
                                            Eliminar
                                        </button>
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop