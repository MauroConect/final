
<?php include ('includes/nav.php');?>
<head>
<link rel="stylesheet" type="text/css" href="estilos/estilos.css" media="screen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
</head>
<html>
<body>
<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
if (count($productos) <= 0) {
?>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Todavía no hay productos
                </h1>
                <h2 class="subtitle">
                    Visita la tienda para agregar productos a tu carrito
                </h2>
                <a href="tienda.php" class="button is-warning">Ver tienda</a>
            </div>
        </div>
    </section>
<?php } else { ?>
    <div class="columns">
        <div class="column">
            <h2 class="is-size-2">Mi carrito de compras</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Quitar</th>
                        <th>cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->precio;
                    ?>
                        <tr>
                            <td><?php echo $producto->nombre ?></td>
                            <td><?php echo $producto->descripcion ?></td>
                            <td>$<?php echo number_format($producto->precio, 2) ?></td>
                            <td>
                    
                                <form action="eliminar_del_carrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                                
                            </td>
                            <td><input action="guardarfecha.php" method="post" type="number" name="cantidad" id="compra"></td>
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                        
                    </tr>
>

                </tfoot>
            </table>
            
        </div>
    </div>
<?php } ?>
<?php
calcularExtra();

?>
<p>seleccione un dia para obtener su certificado</p>
<div class="container-fluid px-1 px-sm-5 mx-auto">
    <div class="row d-flex justify-content-sm-center px-2">
        <form autocomplete="off" action="guardarfecha.php" method="post">
            <div class="form-group row"> <input type="text" id="dp1" class="datepicker mr-2" placeholder="Ingrese la fecha que va a usar el certificado" name="date"><br> <button type="submit" class="btn btn-success">Guardar certificado y finalizar compra</button> </div>
        </form>
    </div>
</div>
</body>
<script>
    $(document).ready(function(){

$('.datepicker').datepicker({
format: 'dd-mm-yyyy',
todayHighlight: true,
toggleActive: true
});

});
</script>
</html>
<?php include_once "includes/footer.php" ?>