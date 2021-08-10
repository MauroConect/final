<?php
include_once "funciones.php";
include ('includes/nav.php');
if (!isset($_POST["date"])) {
    exit("no selecciono un dia valido");
}
$dia = $_POST ['date'];

echo '<p>su certificado esta disponible hasta el dia</p>';
echo ($dia);

?>

<?php
include_once "funciones.php";

$adultos = $_POST['cantidad1'];
$niños = $_POST['cantidad2'];



$productos = obtenerProductosEnCarrito();?>
<p>Usted está autorizado para recorrer los siguientes con las siguientes actividades</p>
<?php
$total=$productos;

var_dump($total);



?>
<br>
<br>
<?php

                 

var_dump ($adultos,$niños);


?>


<?php
echo "<p>recuerde que tiene un 25% de descuento los dias lunes y martes</p>";
calcularExtra($dia);

?>

