<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo/mostrar.css">
    <title>Index de Imagen</title>
</head>       

<body>
    <center>
   
        <?php
                 include('conexion.php');
                 $query= "SELECT * FROM tabla_imagen";
                 $resultado=$conexion->query($query);
                 $row=$resultado->fetch_assoc();
            ?>
  
        <form action="modificar_proceso.php?id_imagen=<?php echo $row['id_imagen']?>" method="POST" enctype="multipart/form-data">
            
        <input type="text" name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']?>"/><br/><br/>
            <img height="150px" width="150" src="data:imagen/.jpg;base64,<?php echo base64_encode($row['imagen'])?>"/><br/><br/>
            <input type="file" name="Imagen"/><br/><br/>
            <input type="submit" value="Aceptar"/>
        </form>    
  
    </center>
   
</body>

   
</html>