<div class="row">
    <div class="col-md-6">
        <label for="nombre">
            Nombre:
        </label>
        <input type="text" name="name" id="name" value="{{isset($rol) ? $rol->name : ''}}" class="form form-control" required>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
            <div class="card-custom">
                <div class="card-body">
                    @foreach($permisos as $permiso)
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                <input type="checkbox" name="permisos[]" value="{{$permiso->name}}" {{$permiso->checked == '1' ? 'checked' : ''}}>
                                {{$permiso->name}}
                            </label>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
</div>