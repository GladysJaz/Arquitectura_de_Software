<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/uacm.jpg" type="image/x-icon" />
    <link rel="stylesheet" type="text/CSS" href="../CSS/index.css" />
    <title>CUAUHTLI</title>
</head>
<body>
   
   <div id="form">
    <h1></h1>
    <form name="form" action="login_registrar.php" method ="POST">
        <h1>Bienvenid@s UACEMITAS</h1>
        <labe>Usuario:</labe>
        <input type="text" id="user" name="user"placeholder="&#128274"></br></br>
        <label>Contraseña:</label>
        <input type="text" id="pass" name="pass" placeholder="&#128273"></br></br>
        <input type="submit" id="btn" value="Inicio de sesion" name="submit" />
    </form>
    <img src="../imagenes/ajolote.png" alt="text"class="mediana"height="45"width="45"/>
   </div>
  
</body>
</html>