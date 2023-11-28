<?php

    include("conexion.php");

    $id = $_REQUEST['id'];

    $query = "DELETE FROM tabla_imagen WHERE id ='$id'";
    $resultado = $conexion->query($query);

    if($resultado){
            //cho "Se ha eliminado";
        header ("Location: mostrar.php");
    }
        else{
            echo "No se elimino";
        }
?>