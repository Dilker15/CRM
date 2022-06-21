<?php
require 'conexion.php';
session_start();

//echo "Ha iniciado correctamente";
$usuario = $_POST['email'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) as contar from users where email= '$usuario' and password ='$password'";

$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
 // header("location: principal.blade.php");
  echo "<script>location.href ='https://www.facebook.com';</script>";
  //echo "BIEVENIDO $usuario";
}else{
  echo "datos vacios";
}


/*if($resultado){
  if( mysqli_num_rows( $resultado ) > 0){

    //Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal
    while($fila = mysqli_fetch_array( $resultado ) ){

      //Ahora $fila tiene la primera fila de la consulta, pongamos que tienes
      //un campo en tu DB llamado NOMBRE, así accederías
      echo $fila['name'];
    }

  }else {
  echo  "no hay datos";
  }
}*/


?>