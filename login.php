<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>bienvenidos</title>
	</head>
	<body>
		<?php
		include 'includes/nav2.php';
		?>
		
		<!--Nav para pagina de inicio-->

		<!DOCTYPE html>
<html lang="es">

<head>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final Upso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <!--Link de CDN Bootstrap-->
    <!--Link de CSS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>

</head>

<body>

<nav class="navbar is-warning" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                TusVacaciones
            </a>

        </div>
        
                    <div class="buttons">
                        <a rel="noreferrer" href="login.php" class="button is-primary">
                            <strong>Login</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


		<!--fin nav para pagina de inicio-->
		
		
		<div align="center" class="formulario">
		<h1 class="titulo">Ingresar</h1>
		<form method="POST" action="procesar_formulario.php">
	
			
			<label for="email">Usario</label><br/>
			<input type="text" name="usuario" required="required"><br/>
			
			<label for="pass">Contraseña</label><br/>
			<input type="password" name="pass" required="required" minlength="5"><br/>
			
			<input type="submit" value="Enviar" />
		</form>
		</div>

		<div>
        <?php
        include('includes/footer.php');
        ?>
    </div>
	</body>
</html>

