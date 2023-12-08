<?php 
include("con_db.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 &&  #mediante strlen se cuenta la cantidad de caracteres ingresados
	    strlen($_POST['email']) >= 1 &&  # se valida que los registros sean mayor o igual a 1
		strlen($_POST['tel']) >= 1 &&    # para que sean enviados a la base de datos
		strlen($_POST['nom_evento']) >= 1 && 
		strlen($_POST['espacio']) >= 1 && 
		strlen($_POST['fecha_solicitud']) >= 1 && 
		strlen($_POST['hora']) >= 1 && 
		strlen($_POST['descripcion'])>= 1) {

	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$tel = trim($_POST['tel']);
		$nom_evento= trim($_POST['nom_evento']);
		$espacio = trim($_POST['espacio']);
		$fecha_solicitud = date("y/m/d");
		$hora = date("H:i:s");
		$descripcion= trim($_POST['descripcion']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, tel, nom_evento, espacio, fecha_solicitud, hora, descripcion, fecha_reg) 
		VALUES ('$name','$email', '$tel', '$nom_evento', '$espacio', '$fecha_solicitud', '$hora', '$descripcion','$fechareg')";

	    $resultado = mysqli_query($conex,$consulta); #con esta linea se ejecuta la consulta
		
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡HAZ SOLICITADO EL ESPACIO CORRECTAMENTE!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>