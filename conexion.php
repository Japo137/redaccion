<?php
try {
  $conexion = new mysqli('localhost','root','','redaccion');

} catch (Exception $e) {
  echo $e->getMessage();
  exit;
}

/*
if($conexion->ping()){
  echo "conectado";
}else{
  echo $bd->connect_error;
}
*/

 ?>
