<div class="row">

    <div class="col-md-5">
        <label for="nombre">
            Nombre:
        </label>
        <input type="text" name="nombre" id="nombre" value="{{isset($cliente) ? $cliente->nombre :''}}" class="form form-control">
    </div>

    <div class="col-md-5">
        <label for="apellidos">
            Apellidos:
        </label>
        <input type="text" name="apellido" id="apellido" value="{{isset($cliente)? $cliente->apellido :''}}" class="form form-control">
    </div>

    <div class="col-md-4">
        <label for="telefono">
            Telefono:
        </label>
        <input type="text" name="telefono" id="telefono" value="{{isset($cliente)? $cliente->telefono :''}}" class="form form-control">
    </div>
    <div class="col-md-4">
        <label for="email">
            Email:
        </label>
        <input type="text" name="email" id="email" value="{{isset($cliente)? $cliente->email : ''}}" class="form form-control">
    </div>


    @isset($cliente)

        <div class="col-md-4">
            <label for="estado">
                Estado:
            </label>
            <select name="estado" id="estado" class="form form-control {{$cliente->estado == '1' ? 'bg-success' : 'bg-danger'}}" >
                    @if($cliente->estado == '1')
                        <option value="1" selected >HABILITADO</option>
                        <option value="2">DESHABILITADO</option>
                    @else 
                        <option value="1">HABILITADO</option> --}}
                        <option value="2" selected>DESHABILITADO</option> 
                    @endif 

            </select>
        </div>


    @endisset


</div>