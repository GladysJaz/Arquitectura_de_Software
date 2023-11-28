
          <?php
              include("conexion.php");

              $id = $_REQUEST['id'];

              $query = "SELECT * FROM tabla_imagen WHERE id = '$id'";
              $resultado = $conexion->query($query);
              $row = $resultado->fetch_assoc();
          ?>

   