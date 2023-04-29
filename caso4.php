<?php
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>CDs</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="container m-3">
    <h2>Caso 4</h2>
    <h4>Tienda de CDs</h4>
        <div class="form-group" style="color:white; background-color: darkslategrey;">
            <form name="Formulario" method="post" action="caso4.php" class="m-3">
                <br>
                <div class="form-group">
                    <label for="precio">
                        <h5>Introduce el precio del cono:</h5>
                    </label>
                    <br>
                    <input type="number" class="col-4" name="precio" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="cantidad">
                        <h5>Introduce la cantidad de conos:</h5>
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

                $bruto = $precio * $cantidad;
                $desc1 = $bruto * 0.05;
                $desc2 = ($bruto - $desc1) * 0.05;
                $descTotal = $desc1 + $desc2;
                $neto = $bruto * $descTotal;

                echo 'Importe de compra: '.$bruto.'<br>';
                echo 'Descuento total: '.$descTotal.'<br>';
                echo 'Total a pagar: '.$neto;

                ?>
            </h4>
            </div>
            <br>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </div>
    </body>

</html>