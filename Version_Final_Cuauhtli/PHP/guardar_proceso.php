<?php
include("conexion.php");
$nombre=$_POST['nombre'];
//podemos dejarlo así con la funcion addslanshes
$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));#hay un problema de función en esta linea
//también podemos insertale de manera directa la superglobal $_FILES
#$foto=$_FILES['Imagen']['tmp_name'];
$query="INSERT INTO tabla_imagen(nombre,Imagen) VALUES('$nombre','$Imagen')";
$resultado=$conexion->query($query);

if($resultado){
  header('location:../php/mostrar.php');
  /*echo"!!!!SE INSERTÓ LA IMAGEN EN LA BASE DE DATOS!!!!";*/
}
else{
    echo"No se insertó la imagen";
}
?>