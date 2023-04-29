<?php

$importe = $_POST['importe'];
$hijos = $_POST['hijos'];
$base = 600;
$bonus = 50;
$comision = 7.5;
$desc = 11;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Calcula tu sueldo neto</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="container m-3">
    <h2>Caso 1</h2>
    <h4>Calcula tu sueldo neto</h4>
        <div class="form-group" style="color:white; background-color: darkslategrey;">
            <form name="Formulario" method="post" action="caso1.php" class="m-3">
                <br>
                <div class="form-group">
                    <label for="importe">
                        <h5>Ingresa el importe total vendido del mes:</h5>
                    </label>
                    <br>
                    <input type="number" class="col-4" name="importe" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="hijos">
                        <h5>Ingresa el número de hijos en edad escolar:</h5>
                    </label>
                    <br>
                    <input type="number" class="col-4" name="hijos" required>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary col-4">Calcular</button>
            </form>
            <div class="m-3">
            <h4>
                <?php

                $bonusFinal = $bonus * $hijos;
                $comisionFinal = ($comision / 100) * $importe;
                $bruto = $base + $bonusFinal + $comisionFinal;
                $descuento = $bruto * ($desc / 100);
                $neto = $bruto - $descuento;

                echo 'Bonificación final: ' . $bonusFinal . '<br>';
                echo 'Comisión final: ' . $comisionFinal . '<br>';
                echo 'Sueldo bruto: ' . $bruto . '<br>';
                echo 'Descuento: ' . $descuento . '<br>';
                echo 'Sueldo neto: ' . $neto;

                ?>
            </h4>
            </div>
            <br>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </div>
    </body>

</html>