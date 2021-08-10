<html>
<body>
<head>
<link rel="stylesheet" type="text/css" href="css/estilos.css">   
</head>
<h1 class="titulo">Calculo</h1>

<h2 class="resultado">Resultado</h2>
<?php
$numero1 = $_POST ['lado1'];
$numero2 = $_POST ['lado2'];


function triangulo($numero1, $numero2){
    $area = ($numero1*$numero2)/2; 
    echo "<h1>la superficie que indico es: $area</h2>";
   }
   

triangulo ($numero1,$numero2);
?>

</body>
</html>