<!DOCTYPE html>
<html>
<head>
    <title>Mostrar imagen</title>
</head>
<body>
    <center>
        <table border="2">
            <thead>
                <tr>
                    <th colspan="5"><a href="index_cuauhtli.php">Nuevo</a></th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>imagen</th>
                    <th colspan="2">operaciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include("conexion_ima.php");

                $query = "SELECT * FROM imagen";
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><img height = "70px" src= "data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                <th><a href = "modificar_ima.php?id=<php? echo $row['id']; ?>">Modificar</a></th>
                <th><a href = "eliminar.php?id=<php? echo $row['id']; ?">Eliminar</a></th>
                </tr>
            <?php
                 }
            ?>
            </tbody>
        </table>
    </center>
</body>
</html>              