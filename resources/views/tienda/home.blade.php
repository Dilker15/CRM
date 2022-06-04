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
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

   
    <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">

    <title>Tienda de Zapatos </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">

          <a class="navbar-brand" href="{{route('tienda')}}">CalzadoManía</a>

          <a class="navbar-brand" href="#">CalzadoManía</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ">
    
                <a class="nav-link " href="#">Varones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mujeres</a>

                <a class="nav-link " href="#">niños</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">niñas</a>  

                <a class="nav-link " href="#">mujeres</a>
              </li>
              <a class="nav-link " href="#">niños</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">niñas</a>  
                <a class="nav-link " href="#">Varones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mujeres</a>


            </ul>
        <!--    <form class="d-flex">
              <input class=" px-4 search" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn0 " type="submit">Buscar</button>
            </form>-->
              <style>
                .b{
                height: 30px;
                margin-right: -3cm;
                width: 140px;
                border:none;
                padding: 3px 7px 20px 25px;
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

              .b1{
                height: 30px;
                width: 170px;
                margin-right: -2cm  ;
             
                border:none;
                padding: 5px 15px 10px 18px;
                outline: none;
                background-color: rgb(243, 36, 181);
                color: white;
                font-weight: 700;
                text-decoration: none;
                border-radius:60px;
              }
              .b1:hover{
                color:yellow;
              }

              .b2{
                height: 30px;
                width: 170px;
                margin-right: -2cm  ;
             
                border:none;
                padding: 5px 15px 10px 18px;
                outline: none;
                background-color: rgb(43, 33, 187);
                color: white;
                font-weight: 700;
                text-decoration: none;
                border-radius:60px;
              }
              .b2:hover{
                color:yellow;
              }

              
            

              .b3{
                height: 30px;
                width: 170px;
                margin-right: -2cm  ;
             
                border:none;
                padding: 5px 15px 10px 18px;
                outline: none;
                background-color: rgb(12, 12, 12);
                color: white;
                font-weight: 700;
                text-decoration: none;
                border-radius:60px;
              }
              .b3:hover{
                color:yellow;
              }
                </style>
           
          </div>
          <form class="d-flex">
            <!-- <input class=" px-2 search" type="search" placeholder="Buscar" aria-label="Search">-->
             <a class="b" href="{{route('registro')}}">Iniciar Sesión</a>
           </form>
        </div>
      </nav>

      <!-- TITULO DE LA FOTO--> 
    <section class="main">
=======
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
           <!--   <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>-->
            </ul>
            <form class="d-flex">
              <input class=" px-2 search" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn0 " type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>


      <section class="main">

          <div class="container">
              <div class="row py-4">
                  <div class="col-lg-7 pt-5 text-center">
                    <h1 class="text-danger">La moda </h1>     
                    <h1 class="h0 text-light"> caduca,</h1>  
                    <h1 class="text-primary"> el estilo</h1>
                    <h1 class="text-light"> jamás</h1>                 
                    <!--<button class="btn1 mt-3"></button> -->
                  </div>
              </div>
          </div>

    </section>

<!-- INICIO DE CATALOGO CALZADOS MAS COMPRADOS-->
      <section class="product" id="s1">
        <div class="container py-5">
          <div class="row py-5 ">
              <div class="col-lg-5 m-auto text-center">
                <label class="fuente3" href="#">Calzados destacados</label>

      </section>


      <section class="product">
        <div class="container py-5">
          <div class="row py-5 ">
              <div class="col-lg-5 m-auto text-center">
                  <h1> Zapatos para mujeres</h1>
                  <h6 style="color:red;">Zapatos casuales</h6>

              </div>
          </div>
           <div class="row">
                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class="card-body">

                      <img src="./img/woman/z1.jpg" class="img-fluid img-thumbnail" alt="">
                      
                    </div>
                  </div>
                  <h6> Zapato 1</h6>
                  <p>Bs. 149.99</p>
                </div>

                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class=" card-body">
                      <img src="./img/woman/z5.jpg" class=" img-fluid img-thumbnail " alt="">

                      <img src="./img/woman/z6.png" class="img-fluid" alt="">

                      
                    </div>
                  </div>
                  <h6> Zapato 1</h6>
                  <p>Bs. 149.99</p>
                </div>

                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class="card-body">

                      <img src="./img/woman/z2.jpg" class="img-fluid img-thumbnail" alt="">
                      
                    </div>
                  </div>
                  

                      <img src="./img/man/z5.jpg" class="img-fluid" alt="">
                      
                    </div>
                  </div>
                  <h6> Zapato 1</h6>
                  <p>Bs. 149.99</p>
                </div>

                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class="card-body">
                      <img src="./img/woman/z6.png" class="img-fluid" alt="">
                      
                    </div>
                  </div>

                  <h6> Zapato 1</h6>
                  <p>Bs. 149.99</p>
                </div>

                <div class="col-lg-3 text-center">
                  <div class="card border-0 bg-light mb-2">

                    <div class=" card-body">
                    

                      <img src="./img/woman/z3.jpg" class="img-fluid img-thumbnail" alt="">
=======
                      <img src="./img/woman/z6.png" class="img-fluid" alt="">

                      
                    </div>
                  </div>
                  <h6> Zapato 1</h6>
                  <p>Bs. 149.99</p>
                </div>
          </div>

          <div class="row">
            <div class="col-lg-6 text-center m-auto">

              <a class="b3"href="#shop1" id="boton1" onclick="mostrar();">Mostrar más</a>
=======
              <button class="btn2">Mostrar más</button>

            </div>
          </div>
          
        </div>
      </section>


     
   

  

<!-- INICIO DE CATALOGO CALZADOS MUJERES-->
<section class="product" id="s2">
  <div class="container py-5">
    <div class="row py-5 ">
        <div class="col-lg-5 m-auto text-center">
          <label class="fuente2" href="#">Calzados para mujeres</label>
            <h6 style="color:red;">Calzados mas destacados</h6>
        </div>
    </div>
     <div class="row">
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class="card-body">
                <img src="./img/woman/z1.jpg" class="img-fluid img-thumbnail" alt="">
                
              </div>
            </div>
            <h6> Zapato 1</h6>
            <p>Bs. 149.99</p>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class=" card-body">
                <img src="./img/woman/z5.jpg" class=" img-fluid img-thumbnail " alt="">
                
              </div>
            </div>
            <h6> Zapato 1</h6>
            <p>Bs. 149.99</p>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class="card-body">
                <img src="./img/woman/z2.jpg" class="img-fluid img-thumbnail" alt="">
                
              </div>
            </div>
            <h6> Zapato 1</h6>
            <p>Bs. 149.99</p>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class=" card-body">
              
                <img src="./img/woman/z3.jpg" class="img-fluid img-thumbnail" alt="">
                
              </div>
            </div>
            <h6> Zapato 1</h6>
            <p>Bs. 149.99</p>
          </div>
    </div>

    <div class="row">
      <div class="col-lg-6 text-center m-auto">
        <a  class="b1"href="#shop1" id="boton1" onclick="mostrar();">Mostrar más</a>
      </div>
    </div>
    
  </div>
</section>

<!-- INICIO DE CATALOGO CALZADOS VARONES-->
<section class="product" id="s3">
  <div class="container py-5">
    <div class="row py-5 ">
        <div class="col-lg-5 m-auto text-center">
          <label class="fuente1" href="#">Calzados para varones</label>
            <h6 style="color:red;">Calzados populares</h6>
        </div>
    </div>
     <div class="row">
          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class="card-body">
                <img src="./img/woman/z1.jpg" class="img-fluid img-thumbnail" alt="">
                
              </div>
            </div>
            <h6> Zapato 1</h6>
            <p>Bs. 149.99</p>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class=" card-body">
                <img src="./img/woman/z5.jpg" class=" img-fluid img-thumbnail " alt="">
                
              </div>
            </div>
            <h6> Zapato 1</h6>
            <p>Bs. 149.99</p>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class="card-body">
                <img src="./img/woman/z2.jpg" class="img-fluid img-thumbnail" alt="">
                
              </div>
            </div>
            <h6> Zapato 1</h6>
            <p>Bs. 149.99</p>
          </div>

          <div class="col-lg-3 text-center">
            <div class="card border-0 bg-light mb-2">

              <div class=" card-body">
              
                <img src="./img/woman/z3.jpg" class="img-fluid img-thumbnail" alt="">
                
              </div>
            </div>
            <h6> Zapato 1</h6>
            <p>Bs. 149.99</p>
          </div>
    </div>

    <section>


//niños



    </section>
    <div class="row">
      <div class="col-lg-6 text-center m-auto">
        <a class="b2"href="#shop1" id="boton1" onclick="mostrar();">Mostrar más</a>
      </div>
    </div>
    
  </div>
</section>




<!-- JAVASCRIPT-->
  <script type="text/javascript">
  function mostrar(){
    document.getElementById('shop1').style.display ='block';
  }
  function ocultar(){
    document.getElementById('shop1').style.display ='none';
  }
  </script>
=======


>>>>>>> ff08ac3f29b976154900abd43a84529dfa8bf5da


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

<style>
      .letra2{
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                color: rgb(102, 102, 177);
                font-size: 20px; 
                padding: 0 0 0 15px
              }
</style>

  <section class="news py-5">
    
      <div class="container py-5">
        
            <div class="col-lg-9 m-auto text-center">
             
              <h1 class="letraabajo">CalzadoManía</h1>
              <h1 class="letra2">Atención al cliente</h1>
              <p> De Lunes a Sábados en el horario de 09:00hs a 19:00hs y Domingos de 10:00hs a 16:00hs</p>
              <textarea name="comentarios" rows="7" cols="83" placeholder="Esciba aquí su consulta o reclamo"></textarea>
              <h1 class="letra2 align-left">Su correo:</h1>   <input type="email" class="col-lg-9 m-auto text-left" placeholder="Ingrese su correo">
           <br><br>
              <button class="btn2">Enviar</button>
            </div>
          </div>
          
       
  </section>    
  </body>
</html>

<!-- Everything I Do I do it -->

  </body>
</html>

