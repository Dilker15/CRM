<div class="row">
    <div class="col-md-5">
        <label for="nombre">
            Nombre del permiso:
        </label>
        <input type="name" name="name" id="name" value="{{isset($permiso) ? $permiso->name :''}}" class="form form-control">
    </div>
    <div class="col-md-6">
        <label for="descripction">
            Descripcion:
        </label>
        <input type="text" name="descripcion" id="descripcion" value="{{isset($permiso)? $permiso->descripcion : ''}}" class="form form-control">
    </div>
</div>