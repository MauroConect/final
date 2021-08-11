<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    

    <title>Hello, world!</title>
  </head>
  <body>
      <!--Nav-->
      <?php
    include ('includes/nav.php');
    ?>
     <!--Fin Nav-->


    

 
<!--Contenedor para la seccion de mostrar servicios-->

<div class="container">
  <div class="row">
    <div class="lugar" class="col-9"  align="center">¿Que tenemos para Ofrecer?</div>
    <div class="col-4">
    <div class="container">
      <div class="card" style="width: 18rem;">
  <img src="img/guamini.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Viaje a la ciudad de Guamini</h5>
    <p class="card-text">Si no conoces el balneario de lago del monte esta es una exelente oportunidad. </p>
    <br>
    <a href="tienda.php" class="btn btn-primary">Contratar servicio</a>
  </div>
</div>
      </div>
    </div>
    <div class="col-6">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/guamini.jpg" class="d-block w-70" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Visita La laguna de Guamini</h5>
        <p>Disfruta un dia de tranquilidad y mucha paz</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/cochico.jpg" class="d-block w-70" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Visita La laguna Cochico</h5>
        <p>Disfruta de una tarde de mates y los mejores lugares de la zona</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/guamini2.jpg" class="d-block w-70" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Disfruta de lugares turisticos</h5>
        <p>Te esperan los mejoers Lugares Historicos de nuestro Pueblo</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
  </div>
</div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <?php
    include ('includes/footer.php');
    ?>
  </body>
</html>