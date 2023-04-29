<?php
$tarifa = $_POST['tarifa'];
$dias = $_POST['dias'];
$descuento = 0.15;
$lapiceros = 3;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Alquiler</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="container m-3">
    <h2>Caso 3</h2>
    <h4>Alquiler de automóviles</h4>
        <div class="form-group" style="color:white; background-color: darkslategrey;">
            <form name="Formulario" method="post" action="caso3.php" class="m-3">
                <br>
                <div class="form-group">
                    <label for="tarifa">
                        <h5>Introduce la tarifa:</h5>
                    </label>
                    <br>
                    <input type="number" class="col-4" name="tarifa" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="dias">
                        <h5>Introduce los dias de alquiler:</h5>
                    </label>
                    <br>
                    <input type="number" class="col-4" name="dias" required>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary col-4">Calcular</button>
            </form>
            <div class="m-3">
            <h4>
                <?php

                $bruto = $tarifa * $dias;
                $neto = $bruto * $descuento;
                $importeDescuento = $NuevoPrecio * $DescuentoEspecialAdicional ;
                $importePagar = $importeCompra - $importeDescuento;
                $lapicerosTotal = $lapiceros* $dias;

                echo 'Importe total: '.$bruto.'<br>';
                echo 'Descuento: '.$descuento.'<br>';
                echo 'Importe neto: '.$neto.'<br>';
                echo 'Total de lapiceros: '.$lapicerosTotal;

                ?>
            </h4>
            </div>
            <br>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </div>
    </body>

</html>