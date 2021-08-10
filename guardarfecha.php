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
$productos = obtenerProductosEnCarrito();?>
<p>Usted está autorizado para recorrer los siguientes con las siguientes actividades</p>
<?php var_dump($productos);
?>
<br>
<br>


<?php
echo "<p>recuerde que tiene un 25% mas los dias lunes y martes</p>";
calcularExtra($dia);

?>

