<?php
include_once "funciones.php";
include ('includes/nav.php');
if (!isset($_POST["date"])) {
    exit("no selecciono un dia valido");
}
$dia = $_POST ['date'];
?>
<h1 class="ok">Usted Puede viajar el dia : <?php echo($dia) ?></h1>
<?php
echo "<br>";
echo "<br>";

?>

<?php
include_once "funciones.php";

$adultos = $_POST['cantidad1'];
$niños = $_POST['cantidad2'];



$productos = obtenerProductosEnCarrito();?>
<p class="ok">Usted está autorizado para recorrer los siguientes el siguiente destino<?php echo '<pre>'; print_r($productos); echo '</pre>'; ?></p>
<?php



?>




<br>
<br>
<?php
$total = 0;

foreach ($productos as $producto) {

    $total += $producto->precio;}
    echo "usted selecciono un viaje de : $$total";
    echo "<br>";
    echo "<br>";
    echo "<hr>";
    echo "recargo total en tickets de adultos $";
    echo "<br>";
    echo number_format($totaladultos=$producto->precio*$adultos, 2);
    echo "<br>";
    echo "<hr>";
    echo "recargo total en tickets de niños";
    echo "<br>";
    
    

    $operacion = $total*$niños;
    $porcentaje = $total*$niños*0.25; 
    $final = $operacion-$porcentaje;
    echo "$final";
    echo "<br>";
    echo "<br>";

    $resultadofinal=$final+$totaladultos;

    echo "el monto total a pagar en tickets es igual a $ $resultadofinal";


    echo "<br>";
    echo "<br>";


echo "cantidad de tickets para adulto y niño";
echo "<br>";
echo "$adultos de adultos <br> $niños de niño";
echo "<br>";


calcularDia();


?>
<?php
$day = date("l");
if ($day=="Tuesday"){
$totalfinal=$resultadofinal*0.15;
$totaltotal=$resultadofinal-$totalfinal;
echo "  $totaltotal";    
}

?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


