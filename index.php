<html>

<head>
</head>

<body>
    <!--Codigo nav-->
    <?php
    include ('includes/nav.php');
    ?>

<!--codigo carrousel-->

<div class="container-lg" id="caja">
<?php
include 'includes/carrousel.php';
    ?>
</div>
<!--fin codigo carrousel-->

    <!--Inicio de contenedor de formulario-->
    <div class="container" id="forma">
        <!--codigo de formulario-->
        <form class="row g-3 needs-validation" novalidate action="registro.php" method="POST">
            <div class="col-md-4" >
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre"
                    required="">
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Ingrese su Apellido"
                    required="">
                <div class="valid-feedback">
                    Looks good!
            </div>
                </div>

                <div class="col-md-4">
                <label for="nacimiento" class="form-label">Nacimiento</label>
                <input type="date" class="form-control" name="nacimiento" placeholder="Ingrese su fecha de naciemiento"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-4">
                <label for="ciudad" class="form-label">Provincia</label>
                <select class="form-select" name="ciudad" required>
                    <option selected disabled value="">Seleccione</option>
                    <option>Buenos Aires</option>
                    <option>Catamarca</option>
                    <option>Chaco</option>
                    <option>Chubut</option>
                    <option>Córdoba</option>
                    <option>Corrientes</option>
                    <option>Entre Ríos</option>
                    <option>Formosa</option>
                    <option>Jujuy</option>
                    <option>La Pampa</option>
                    <option>La Rioja</option>
                    <option>Mendoza</option>
                    <option>Misiones</option>
                    <option>Neuquén</option>
                    <option>Río Negro</option>
                    <option>Salta</option>
                    <option>San Juan</option>
                    <option>San Luis</option>
                    <option>Santa Cruz</option>
                    <option>Santa Fe</option>
                    <option>Santiago del Estero</option>
                    <option>Tierra del Fuego</option>
                    <option>Tucumán</option>

                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            
            <div class="col-md-4">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario"
                    required>
                <div class="valid-feedback">
                    Looks good!
            </div>
                </div>
            <!--Contraseña 1-->
            <div class="col-md-4">
                <label for="pass1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass1" placeholder="Ingrese su Apellido"
                    required>
                <div class="valid-feedback">
                    Looks good!
            </div>
                </div>
            <!--Contraseña 2-->
            <div class="col-md-4">
                <label for="pass2" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass2" placeholder="Repita su contraseña"
                    required>
                <div class="valid-feedback">
                    Looks good!
            </div>
                </div>

                <!--estado civil-->
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Estado civil</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Soltero
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Casado
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Viudo
                    </label>
                  </div>
                                  <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>

            <!--Genero-->
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Genero</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Masculino
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Femenino
                    </label>
                  </div>
                                  <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
           
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>

            <div>
                <p>Ya tienes cuenta? <a a href ="login.php">inicia sesion</a></p>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Registrarse</button>
            </div>
        </form>
    </div>
    <!--Fin de contenedor de formulario-->

    <div>
        <?php
        include('includes/footer.php');
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>