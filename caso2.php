<?php
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$DescuentoEspecialAdicional = 0.07;
$DescuentoEspecial = 0.05;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Gaseosas</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="container m-3">
    <h2>Caso 2</h2>
    <h4>Compra de gaseosas</h4>
        <div class="form-group" style="color:white; background-color: darkslategrey;">
            <form name="Formulario" method="post" action="caso2.php" class="m-3">
                <br>
                <div class="form-group">
                    <label for="precio">
                        <h5>Introduce el precio de la gaseosa:</h5>
                    </label>
                    <br>
                    <input type="number" class="col-4" name="precio" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="cantidad">
                        <h5>Introduce la cantidad de gaseosas:</h5>
                    </label>
                    <br>
                    <input type="number" class="col-4" name="cantidad" required>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary col-4">Calcular</button>
            </form>
            <div class="m-3">
            <h4>
                <?php

                $NuevoPrecio = $precio - $precio *$DescuentoEspecial;
                $importeCompra = $NuevoPrecio * $cantidad;
                $DescuentoTotal = $NuevoPrecio * $DescuentoEspecialAdicional ;
                $importePagar = $importeCompra - $DescuentoTotal;
                $caramelosregalo = $cantidad * 2;

                echo 'Nuevo precio de gaseosa: '.$NuevoPrecio.'<br>';
                echo 'Importe de la compra: '.$importeCompra.'<br>';
                echo 'Descuento: '.$DescuentoTotal.'<br>';
                echo 'Importe para pagar: '.$importePagar.'<br>';
                echo 'Caramelos de regalo: '.$caramelosregalo;
                ?>
            </h4>
            </div>
            <br>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </div>
    </body>

</html>