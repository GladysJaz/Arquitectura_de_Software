<?php
    include ("conexion_ima.php");

    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO imagen(nombre, imagen) VALUES('$nombre','$imagen')";
    $resultado = $conexion->query($query);

    if($resultado){
       header ("Location: mostrar.php");
    }
        else{
            echo "No se inserto";
        }
?>