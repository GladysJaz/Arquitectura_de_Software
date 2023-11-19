<?php
    include ("conexion_ima.php");
    $id= $_REQUEST['id'];

    
    $query = "DELETE FROM imagen WHERE id='$id'";
    $resultado = $conexion->query($query);

    if($resultado){
       header ("Location: mostrar.php");
    }
        else{
            echo "No se elimino";
        }
?>