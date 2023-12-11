<?php
 require_once 'clases/imagen.php';
 $Imagen = new imagen(9, 'Ivonne', 'Blob-5.8 KB');
 echo 'Id: ' . $imagen->get_id() . '<br />';
 echo 'Nombre: ' . $imagen->get_nombre() . '<br />';
 echo 'Imagen: ' . $imagen->get_Imagen() . '<br />';
 $imagen->set_nombre('Pendrive 30');
 $imagen->set_Imagen('Blob-5.8 KB');
 echo '<hr />';
 echo 'Id: ' . $imagen->get_id() . '<br />';
 echo 'Nombre: ' . $imagen->get_nombre() . '<br />';
 echo 'Imagen: ' . $imagen->get_imagen() . '<br />';
?>