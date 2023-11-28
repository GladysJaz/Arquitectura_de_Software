<?php

    $conexion = new mysqli("localhost","root","","cuauhtli");

        if ($conexion){
                //echo "Conexion exitosa";
                //header ("Location: mostrar.php");

        }
            else {
                echo "Conexion no exitosa";

        } 
?>