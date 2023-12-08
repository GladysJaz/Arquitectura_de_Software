<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet type="text/css" href="../estilo/mostrar.css">
    <title>MOSTRAR IMAGEN</title>
</head>
<body>
    <center>
    <table border="5">
        <thead>
            <tr>
                <th colspan="5" ><a href="../html/Cuauhtli.html">REGRESA AL MENÚ</a></th>
            </tr>
            <tr>    
               <th><em>ID_IMAGEN</em></th>
               <th><em>NOMBRE</em></th>
               <th><em>OBRA DE ARTE</em></th>
               <th colspan="2"><em>OPERACIONES</em></th>
            </tr>
        </thead>
        <tbody>
           
            <?php
                 include('conexion.php');
                 $query= "SELECT * FROM tabla_imagen";
                 $resultado=$conexion->query($query);
                    while($row=$resultado->fetch_assoc()){
            ?>
               <tr>
                <td><?php echo $row['id_imagen'];?></td>
                <td><?php echo $row['nombre'];?></td>
                <td><img width="50px" height="50px" src="data:imagen/.jpg;base64,<?php echo base64_encode($row['imagen'])?>"/></td>
                <td><a href="../php/modificar.php? id_imagen=<?php echo $row['id_imagen'];?>">MODIFICAR</a></td>
                <td><a href="../php/eliminar.php? id_imagen=<?php echo $row['id_imagen'];?>">ELIMINAR</a></td>
                
               </tr>
               <?php
                   }
            ?>   
        </tbody>
    </table>
    </center>
   
</body>
</html>