@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Roles</h1>
@stop

@section('content')
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title">
                Roles
            </div>
            <div class="pull-right">
                <a href="{{route('roles.create')}}" class="btn btn-sm btn-warning float-right">
                    <i class="fa fa-plus"></i>
                    &nbsp;
                    Crear un nuevo Rol
                </a>
            </div>
        </div>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="card-body table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th colspan="3" class="text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($roles as $rol)
                        <tr>
                            <td>
                                {{$rol->name}}
                            </td>
                            <td>
                                <a href="{{route('roles.edit',$rol)}}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-edit"></i>
                                    &nbsp;
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a href="{{route('roles.show',$rol)}}" class="btn btn-sm btn-info">
                                    <i class="fa fa-eye"></i>
                                    &nbsp;
                                    Ver
                                </a>
                            </td>
                            <td>
                                <form action="{{route('roles.destroy')}}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <input type="hidden" name="rol_id" id="rol_id" value="{{$rol->id}}">
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