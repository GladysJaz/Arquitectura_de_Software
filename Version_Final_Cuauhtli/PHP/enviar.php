<?php
//Estructura para el envio de los datos de Contacto desde el boton.

//Llamando los campos y el correo destinatario
$destino = "glasdic05@gmail.com";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$contenido = "Nombre: " . $nombre . "Telefono: " . $telefono . "Correo: " . $correo . "Mensaje: " . $mensaje;

mail($destino, "Contacto del sitio web", $contenido);

if ($destino) {
    echo '<script>
    alert("El mensaje ha sido enviado exitosamente");
   
    </script>';
} else {
    echo '<script>
    alert("El mensaje no ha sido enviado exitosamente, inténtalo de nuevo");
    window.location = "../html/Contactanos.html";
    </script>';
}


?>