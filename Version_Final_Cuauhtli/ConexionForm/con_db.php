<?php

$conex = mysqli_connect("localhost","root","","registro");  #con esta linea se ha realizado la conexion de base de datos

if ($conex){
    echo "conexion con base de datos exitosa";
}
?>