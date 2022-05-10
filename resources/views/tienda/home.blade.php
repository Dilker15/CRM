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
   
   
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
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
                <a class="nav-link " href="#">Varones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mujeres</a>
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
              <input class=" px-4 search" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn0 " type="submit">Buscar</button>
            </form>

            <form class="d-flex">
             <!-- <input class=" px-2 search" type="search" placeholder="Buscar" aria-label="Search">-->
              <button class="btnInicio" type="submit">Login</button>
            </form>
          </div>
        </div>
      </nav>

      <!-- TITULO DE LA FOTO--> 
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
              <a href="#shop1" id="boton1" onclick="mostrar();">Mosstrar más</a>
            </div>
          </div>
          
        </div>
      </section>

     
   <style>

     #shop1{
       display: none;
     }
   </style>
<!-- 1ER CATALOGO DE ZAPATOS MAS COMPRADOS-->
  <section class="shop" id="shop1">
    <div class="container">
        <div class="row p-5">
            <div class="col-lg-8 m-auto text-center">
              <h1>Zapatos para mujeres </h1>
                <h6 style="color:red;">Zaptos</h6>
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
            <a  href="#s1"  onclick="ocultar();">Ocultar Catálogo</a>
          </div>
        </div>
  </div>
</section>

<!-- INICIO DE CATALOGO CALZADOS MAS COMPRADOS-->
<section class="product" id="s1">
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
        <a href="#shop1" id="boton1" onclick="mostrar();">Mosstrar más</a>
      </div>
    </div>
    
  </div>
</section>


<style>

#shop1{
 display: none;
}
</style>

<!-- 1ER CATALOGO DE ZAPATOS MAS COMPRADOS-->
<section class="shop" id="shop1">
  <div class="container">
      <div class="row p-5">
          <div class="col-lg-8 m-auto text-center">
            <h1>Zapatos para mujeres </h1>
              <h6 style="color:red;">Zaptos</h6>
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
          <a  href="#s1"  onclick="ocultar();">Ocultar Catálogo</a>
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