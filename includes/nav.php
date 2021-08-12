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
        <div class="navbar-item">
            <div class="navbar-start">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="provincias.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lugares
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="guamini.php">Guamini</a></li>
            <li><a class="dropdown-item" href="buenosaires.php">Buenos Aires</a></li>
            <li><a class="dropdown-item" href="cordoba.php">Cordoba</a></li>
            
          </ul>
        </li>
                <a class="navbar-item" href="tienda.php">Servicios</a>
            </div>
            
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="ver_carrito.php" class="button is-success">
                            <strong>Ver carrito <?php
                                                include_once "funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>


                <div class="navbar-item">
                    <!---->

     <style>
            #circle{
            width: 10px;
            height:10px;
            border-radius:50%;
            background:#2ded04;
            }
    </style>
                

                <li class="text-light d-flex my-auto">
                    <div id="circle" class="mt-2 mr-2" class="buttons"></div>
                    <?php echo ucwords($_SESSION['usuario']);?>
                </li>
                <li class="nav-item" >
                    <a class="buttons" href="cerrar.php"> salir</a>
                </li>
                <!---->
                    <!--<div class="buttons">
                        <a rel="noreferrer" href="login.php" class="button is-primary">
                            <strong>Login</strong>
                        </a>-->
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">


