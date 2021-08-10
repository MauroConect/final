<?php

	//toma de datos y carga de base de datos
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	session_start();
	$_SESSION['usuario']=$usuario;
	include 'includes/db.php';

	//ejecuto consulta
	$consulta="SELECT*From usuarios where usuario ='$usuario' and password='$pass'";
	$resultado=mysqli_query($conex,$consulta);
	

	$filas=mysqli_num_rows($resultado);

	if($filas)
	{
		header("location:provincias.php");
	}

	else {
		
		include("login.php");
		?>
		<div class="bad">
		<h3 >NO INGRESO DATOS VALIDOS</h3>
	</div>
		<?php
	}
	
	mysqli_free_result($resultado);
	mysqli_close($conex);
	?>