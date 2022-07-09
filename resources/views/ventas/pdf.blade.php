<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body class="bg-gradient-cyan">
    <div class="card-custom">
        <div class="card-header bg-secondary">
            <div class="card-title text-center">
                <h3 class="text">LISTADO DE VENTAS</h3>   
            </div>
        </div>
        <div class="card-body table-responsive">
           
            <table class="table table-hover table-bordered table" style="width:100%">
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
                        
                       
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" value="{{$i=0;}}">
                    @foreach ($clientes as $cliente)
                    <input type="hidden" value="{{$i++;}}">
                    @foreach ($cliente->ventas as $venta)
                     <tr>                     
                       <td>  {{ $cliente->nombre }} {{ $cliente->apellido }} </td>
                       <td> {{$venta->fechahora}} </td>
                       <td> {{$venta->monto_total}} </td>
                   
                     </tr>
                    @endforeach
                  
                  @endforeach
                </tbody>
                
            </table>
            <tfoot>
                <span>Cantidad de ventas hay : {{$i}}</span> 
                <div class="pull-right">
                    <span class="float-right">
                        Fecha Actual: {{now()}}
                    </span>
                </div>
            </tfoot>
        </div>
    </div>
        







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>