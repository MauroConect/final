<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos/estilos.css">   
</head>
<body>
<?php
//carga de funciones
include 'includes/db.php';
include 'includes/nav2.php';
//conexion a la base de datos
//captura de datos mediante POST
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$nacimiento = $_POST ['nacimiento'];
$usuario = $_POST ['usuario'];
$ciudad = $_POST ['ciudad'];
$numero1 = $_POST ['pass1'];
$numero2 = $_POST ['pass2'];
//comprobar conexion a la base de datos
//if ($conex){
//    echo "todo piolita la base de datos funca papa";
//}




//comprobar que las claves sean iguales y campos  crear sesion

if ($numero1===$numero2 && !empty($_POST['nombre']) && !empty($_POST['apellido']) && 
!empty($_POST['nacimiento']) && !empty($_POST['usuario']) && !empty($_POST['ciudad'] ) && !empty($_POST['pass1'])&& !empty($_POST['pass2']) ) {

    //echo "sus claves son iguales se a creado su usuario con exit";

    $consulta= "INSERT INTO usuarios(nombre, apellido, nacimiento, provincia, usuario, password) VALUES ('$nombre','$apellido','$nacimiento','$ciudad','$usuario','$numero1')";
$resultado= mysqli_query($conex,$consulta);

if ($resultado){
?>
<h3 class="ok">¡Te has inscripto correctamente!</h3>

<?php
include_once "login.php";
}

}

else {
    
    echo "<h3 class=bad >no se puede crear su usuario las claves no coinciden o tiene campos sin completar, intente nuevamente</h3>";
    include_once "index.php";
}
//var_dump ($nombre,$numero1,$numero2,$nacimiento,$usuario,$ciudad,$estado);




?>
</body>
</html>