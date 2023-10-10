<!DOCTYPE html>
<html>
<head>
	<title>Solicitar Espacio Publico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="SolicitaEspacio.css">
</head>
<body>
    <form method="post">
    	<h1>Solicita Tu espacio</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="email" name="email" placeholder="Email">

		<label>
			Selecciona la fecha:
		<input type="date" name="Fecha" required pattern="\d{4}-\d{2}-\d{2}" />
        </label>

		<select class="select-css">
			<option>Seleccionar...</option>
			<option>Primera opción</option>
			<option>Segunda opción</option>
			<option>Tercera opción</option>
			<option>Cuarta opción</option>
		</select>
		
    	<input type="submit" name="register">
    </form>
	
        <?php 
        include("registrar.php");
        ?>
</body>
</html>