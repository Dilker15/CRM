<?php
 /*$conexion = pg_connect("host=ec2-107-22-238-112.compute-1.amazonaws.com
  port=5432 dbname=dem5gsglilbhi6 user=wzrbauqcysmhys password=9ac05f8831846d1897df78f3c28ae46471e3bf6367a5e2e5327bd9c7792cca24");
*/
   
  $host ="localhost:3307";
  $usuario = "root";
  $clave ="";
  $bd = "proyectosi2";
  $conexion = mysqli_connect( $host, $usuario, $clave, $bd);
 /*if($conexion){
     echo "conectado correctamente";
 }else{
     echo "No se pudo establecer conexión";
 }*/

 
?>