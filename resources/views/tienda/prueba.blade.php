<?php 

if(isset($nombre)){
  session_start();
  $_SESSION['nombre'] =$nombre;
  echo $nombre;
  //$nombre = $_SESSION['nombre'];
  $n1 = $nombre;
  echo $n1;
  unset( $_SESSION['nombre']);
session_destroy();
 if(isset( $_SESSION['nombre'])){
    echo "la sesion se ha destruido correctamente";
 }else {
    echo "sigue la sesion";
 }
 }
?>