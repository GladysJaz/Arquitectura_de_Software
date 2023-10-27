<?php
$usuario=$_POST['usuario']; #datos ingresados por teclado
$contraseña=$_POST['contraseña'];

session_start();
$session['usuario']=$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios where  usuario='$usuario' and contraseña='$contraseña'";# se manda a llamar la base de datos
$resultado=mysqli_query($conexion,$consulta);#viene de la conexion de la base de datos

$filas=mysqli_num_rows($resultado);#almacena el resultado y haga la validación correspondiente

if($filas){
    header('location:../HTML/portada.html');    
}else{
     ?>
     <?php
     include("../HTML/index.html");
     ?>
     <h1 class="bad">¡ERROR EN LA AUTENTICACIÓN DEL USUARIO!</h1>
     <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);
