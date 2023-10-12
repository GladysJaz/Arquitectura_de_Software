<?php 
include ("conexion.php");

$nombre = $_POST("usuario");
$pass   = $_POST("pass");

if(isset($_POST["btningresar"])){
    $query=mysqli_query($conn,"SELECT*FROM login WHERE Usuario='$nombre' and password='$pass'");
    $nr=mysqli_num_rows($query); 

    if($nr == 1)
    {
        echo "<script> alert('Bienvenido $nombre');windows.location = portada.html </script>";
    }else{
        echo "<script> alert('Usuario no encontrado $nombre');windows.location = index.html </script>";
    }

}
?>