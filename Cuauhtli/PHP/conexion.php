<?php
 $servername ="localhost";
 $username   ="root";
 $password   ="";
 $db_name    ="database";
 $conn = new mysqli($servername,$username,$password,$db_name,3308);
 if($conn->connect_error){
    die("Conección fallida".$conn->connect_error);
 }
 echo "Conexión exitosa";
?>