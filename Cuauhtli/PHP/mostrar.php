   <?php
                include("conexion.php");

                $query = "SELECT * FROM tabla_imagen";
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><img height = "100px" src= "data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                    <th><a href = "modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
                    <th><a href = "eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
                </tr>
            <?php
                 }
            ?>
 