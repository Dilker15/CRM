<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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
   
    <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">
    <title>Tienda de Zapatos </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class="navbar-brand" href="#">CalzadoManía</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " href="{{route('catalogoHombres')}}">hombres</a>
              </li>
             
            </ul>
            <style>
              .b{
                   height: 30px;
                   width: 170px;
                   margin-right: -2cm  ;
                
                   border:none;
                   padding: 3px 17px 20px 25px;
                   outline: none;
                   background-color: rgb(243, 36, 181);
                   color: white;
                   font-weight: 700;
                   text-decoration: none;
                   border-radius:60px;
                 }
                 .b:hover{
                   color:yellow;
                 } 
             </style>
           </div>
           <a class="b" href="{{route('tienda')}}">Menú Principal</a>
         </div>
          </div>
        </div>
      </nav>


      <section class="calmujeres" id="s2">
        <div class="container py-5">
          <div class="row py-5 ">
              <div class="col-lg-5 m-auto text-center">
                <label class="fuente2" href="#">Para mujeres</label>
                  <h6 style="color:red;"> Destacados</h6>
              </div>
          </div>
           <div class="row">

            @foreach ($calzados1 as $calzado1)
            <div class="col-lg-3 text-center">
              <div class="card border-0 bg-light mb-2">

                <div class="card-body">
                  <img src="./img/woman/{{$calzado1->imagen}}" class="imagen_fija img-fluid img-thumbnail" alt="">
                  
                </div>
              </div>
              <h6> {{$calzado1->marca}}</h6>
              <h6> {{$calzado1->detalle}}</h6>

              <p> Bs.  {{$calzado1->precio}}</p>
              <?php
              $carpeta = "woman";
              ?>
        <a type ="button" class="btn btn-success" href="{{route('listarcalzado',['id' =>$calzado1->id ,'carpeta'=>$carpeta] )}}">Agregar Carrito</a>
      </div>
            @endforeach
               
          </div>
<br>
    
          
        </div>
      </section>
      

      <section class="calniñas" id="s3">
        <div class="container py-5">
          <div class="row py-5 ">
              <div class="col-lg-5 m-auto text-center">
                <label class="fuente2" href="#">Para niñas</label>
                  <h6 style="color:red;"> Destacados</h6>
              </div>
          </div>
           <div class="row">
            @foreach ($niñas as $niña)
            <div class="col-lg-3 text-center">
              <div class="card border-0 bg-light mb-2">
                 <div class="card-body">
                  <img src="./img/kidwoman/{{$niña->imagen}}" class="imagen_fija img-fluid img-thumbnail" alt="">                  
                </div>
              </div>
              <h6> {{$niña->marca}}</h6>
              <h6> {{$niña->detalle}}</h6>
              <p> Bs. {{$niña->precio}}</p>
              <?php
              $carpeta = "kidwoman";
              ?>
              <a type ="button" class="btn btn-success" href="{{route('listarcalzado',['id' =>$niña->id ,'carpeta'=>$carpeta] )}}">Agregar Carrito</a>
             </div>
            @endforeach               
         </div><br>   
        </div>
      </section>
      

  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>