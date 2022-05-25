<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@500&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <title>  </title>
   </head>
      
        <body>
            <form>
                <table>
                    <tr>
                       <th rowspan="4"><img src="../../img/{{$carpeta}}/{{$calzado->imagen}}" width="200" height="170"></th>
                        <!--<th rowspan="4"><img src="./img/<?php echo $carpeta; ?>/<?php echo $calzado->imagen; ?>" width="200" height="170"></th>-->

                        <th><?php echo $calzado->marca?></th>
                    </tr>
                    <tr>
                        <td align="justify"><?php echo $calzado->detalle?></td>
                    </tr>
                    <tr>
                        <td align="right">Bs. <?php echo $calzado->precio?></td>
                    </tr>
                    <tr>
                        <td align="right">Ingrese cantidad:
                            <input type="number" min="1" max ="100" value="1" name="txtCant"></td>
                    </tr>
                    <tr>
                        <th align ="right">
                       <button type ="button" class="btn btn-secondary">Cerrar</button>
                       <button type ="button" class="btn btn-primary">Agregar a Carrito</button>
                        </th>
                    </tr>
                </table> 
            </form>
          <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
        </body>
 
</html>