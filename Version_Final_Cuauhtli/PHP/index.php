<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <title>Index de Imagen</title>
</head>
<body> 
            <?php
                 include('conexion.php');
                 $query= "SELECT * FROM tabla_imagen";
                 $resultado=$conexion->query($query);
                 $row=$resultado->fetch_assoc();
            ?>   
   <br/><br/>
        <form action="guardar_proceso.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']?>"/><br/><br/>
            <input type="file" name="Imagen"/><br/><br/>
            <input type="submit" value="Aceptar"/>
        </form>
   
</body>
</html>