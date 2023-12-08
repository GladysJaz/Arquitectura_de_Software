<?php
include("conexion.php");
$id=$_REQUEST['id_imagen'];
$nombre=$_POST['nombre'];

//podemos dejarlo así con la funcion addslanshes
$Imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));#hay un problema de función en esta linea

//también podemos insertale de manera directa la superglobal $_FILES
#$foto=$_FILES['Imagen']['tmp_name'];

$query="UPDATE tabla_imagen SET nombre='$nombre', Imagen='$Imagen' WHERE id_imagen='$id'";
$resultado= $conexion->query($query);

if($resultado){
   header('Location:../php/mostrar.php');
 // echo "SI SE MODIFICÓ LA IMAGEN";
}
else{
    echo"NO SE MODIFICÓ LA IMAGEN";
}
?>