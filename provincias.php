<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="estilos/estilos.css" rel="stylesheet">

    <title>Certificado de circulacion</title>
  </head>
  <body>
    <?php

    
    

	  include 'includes/db.php';
    include ('includes/nav.php');
    include_once "funciones.php";
    //$usuario="SELECT*From usuarios where usuario ='$usuario'";
	  //$_SESSION['usuario']=$usuario;
    //echo "$usuario";
    ?>
    
      <?php
	    

      $productos = obtenerProductos();
      ?>
    
    

<!--Columnas-->
<div class="container">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="img/buenosaires.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Buenos Aires</h5>
    <p class="card-text">Certificado para viajar a la principal ciudad de argentina, podes pagar en 12 cuotas sin interes.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Buenos Aires</li>
    <li class="list-group-item">Ticket para niño y adulto</li>
    <li class="list-group-item">Certificado exclusivo</li>
  </ul>
  <div class="card-body">
    <a href="buenosaires.php" class="card-link">Ver mas</a>
  </div>
</div>
    </div>
    <div class="col order-5">
    <div class="card" style="width: 18rem;">
  <img src="img/guamini.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Guamini</h5>
    <p class="card-text">Certificado para viajar a la principal ciudad de argentina, podes pagar en 12 cuotas sin interes</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Paseo por lago del monte</li>
    <li class="list-group-item">visita lugares historicos</li>
    <li class="list-group-item">mucha paz y tranquilidad</li>
  </ul>
  <div class="card-body">
    <a href="guamini.php" class="card-link">Ver mas</a>
  </div>
</div>
    </div>
    <div class="col order-1">
    <div class="card" style="width: 18rem;">
  <img src="img/cordoba.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cordoba</h5>
    <p class="card-text">Certificado para viajar a la principal ciudad de argentina, podes pagar en 12 cuotas sin interes</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Los mejores restaurantes</li>
    <li class="list-group-item">La mejor comida</li>
    <li class="list-group-item">Lugares unicos</li>
  </ul>
  <div class="card-body">
    <a href="cordoba.php" class="card-link">Ver mas</a>
  </div>
</div>
    </div>
  </div>
</div>
<!--Provincias--->


<!--Provincias--->





<!--footer-->
<?php
    include 'includes/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>