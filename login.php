<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>bienvenidos</title>
	</head>
	<body>
		<?php
		include 'includes/nav.php';
		?>
		
		
		
		<div align="center" class="registro-box">
		<h1>Sistema de login</h1>
		<form method="POST" action="procesar_formulario.php">
	
			
			<label for="email">Email</label><br/>
			<input type="text" name="usuario" required="required"><br/>
			
			<label for="pass">Contraseña</label><br/>
			<input type="password" name="pass" required="required" minlength="5"><br/>
			
			<input type="submit" value="Enviar" />
		</form>
		</div>
	</body>
</html>

