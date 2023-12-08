<?php
include("conexion.php");
$id=$_REQUEST['id_imagen'];


$query="DELETE   FROM tabla_imagen WHERE id_imagen=$id";
$resultado= $conexion->query($query);

if($resultado){
   header('Location:../php/mostrar.php');
 //echo 'SE ELIMINÓ LA IMAGEN';
}
else{
    echo"NO SE ELIMINÓ LA IMAGEN";
}
?>