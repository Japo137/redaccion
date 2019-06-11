<?php
include ("conexion/conexion.php");

$id = (isset($_POST['id']))?$_POST['id']:"";
$nombre =(isset($_POST['nombre']))?$_POST['nombre']:"";
$ap_paterno=(isset($_POST['ape-pa']))?$_POST['ape-pa']:"";
$ap_materno=(isset($_POST['ape-ma']))?$_POST['ape-ma']:"";
$grado=(isset($_POST['grado']))?$_POST['grado']:"";
$grupo=(isset($_POST['grupo']))?$_POST['grupo']:"";
$matricula=(isset($_POST['matricula']))?$_POST['matricula']:"";
$contrasena=(isset($_POST['contra']))?$_POST['contra']:"";
$contra_repe=(isset($_POST['contra-repe']))?$_POST['contra-repe']:"";
$usuario=(isset($_POST['usuario']))?$_POST['usuario']:"";
$action=(isset($_POST['accion']))?$_POST['accion']:"";
$action2=(isset($_POST['accion2']))?$_POST['accion2']:"";

$mostrarModal=false;
$error=array();
switch ($action) {
  case 'btnAgregar_alu':

  if($nombre==""){
    $error['Nombre']="Campo obligatorio";
  }
  if($ap_paterno==""){
    $error['ApellidoP']="Campo obligatorio";
  }
  if($ap_materno==""){
    $error['ApellidoM']="Campo obligatorio";
  }

  if($grado==""){
    $error['Grado']="Campo obligatorio";
  }

  if($grupo==""){
    $error['Grupo']="Campo obligatorio";
  }
  if($matricula==""){
    $error['Matricula']="Campo obligatorio";
  }
  if($contrasena==""){
    $error['Contraseña']="Campo obligatorio";
  }

  if($contra_repe==""){
    $error['contra_repe']="Campo obligatorio";
  }

  if(count($error)>0){
    $mostrarModal=true;
    break;
  }
  if($contrasena != $contra_repe){
    echo "La contraseñas no coinciden";
  }else {


    $conexion->query("INSERT INTO alumno(usuario,nombre,ap_paterno,ap_materno,grado,grupo,matricula,contrasena)
    VALUES('$usuario','$nombre','$ap_paterno','$ap_materno','$grado','$grupo','$matricula','$contrasena')");
    mysqli_close($conexion);

    header('Location: index.php');
  }

  break;
   case 'btnAgregar_doc':
   include_once 'guarda_doc.php';
     break;

}
