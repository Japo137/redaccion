<?php
include ("conexion/conexion.php");
$usuario =(isset($_POST['usuario_doc']))?$_POST['usuario_doc']:"";
$nombre =(isset($_POST['nombre_doc']))?$_POST['nombre_doc']:"";
$ap_paterno =(isset($_POST['ape_pa_doc']))?$_POST['ape_pa_doc']:"";
$ap_materno =(isset($_POST['ape_ma_doc']))?$_POST['nombre_doc']:"";
$no_empleado =(isset($_POST['empleado']))?$_POST['empleado']:"";
$password =(isset($_POST['contra_doc']))?$_POST['contra_doc']:"";
$password2 =(isset($_POST['contra_doc_repe']))?$_POST['contra_doc_repe']:"";

$g1="";
$g2=$g3=$g4=$g5=$g6=$g1;
$grupos="";
if(isset($_POST['1A'])){
$g1="1A";
}
if(isset($_POST['1B'])){
$g2="1b";
}
if(isset($_POST['1C'])){
$g3="1C";
}
if(isset($_POST['2A'])){
$g4="2A";
}
if(isset($_POST['2B'])){
$g5="2B";
}
if(isset($_POST['2C'])){
$g6="2C";
}
$grupo=$g1." ".$g2." ".$g3." ".$g4." ".$g5." ".$g6;

if($password != $password2){
  echo "La contraseñas no coinciden";
}else {

    $conexion->query("INSERT INTO docente (usuario,nombre,ap_paterno,ap_materno,grupo,n_empleado,contrasena)
      VALUES('$usuario','$nombre','$ap_paterno','$ap_materno','$grupo','$no_empleado','$password')");
      mysqli_close($conexion);
      echo "Se insertaron correctamente";
      header('Location: index.php');

}


 ?>
