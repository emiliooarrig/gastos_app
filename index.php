<?php
session_start();
$_SESSION['nombre'] = "Emilio";
include 'config/db.php';

$sql = "SELECT * FROM gastos";
$gastos = $pdo->prepare($sql);
$gastos->execute();
$gastos_array = $gastos->fetchAll(PDO::FETCH_ASSOC);

$suma_gastos = $pdo->prepare("SELECT SUM(monto) AS total FROM gastos;");
$suma_gastos->execute();
$resultado = $suma_gastos->fetch(PDO::FETCH_ASSOC);

$suma = (int) $resultado['total'];  


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard/dashboard.css">
    <title> Dashboard </title>
</head>

<body>

    <div class="contenedor">
        <div class="inside">
            <h1 class="titulo"> Bienvenido @<?php echo $_SESSION['nombre']; ?> </h1>

            <div class="botones">
                <a href="dashboard/agregar/agregar.php" class="btn btn-agregar"> Agregar gasto </a>
            </div>

            <table class="tabla">
                <thead>
                    <th class="titulo__tabla"> Gasto </th>
                    <th class="titulo__tabla"> Monto </th>
                    <th class="titulo__tabla"> Fecha </th>
                    <th class="titulo__tabla"> Acciones </th>
                </thead>

                <tbody>

                    <?php foreach ($gastos_array as $row): ?>
                        <tr>
                            <td class="fila__tabla"> <?php echo $row["gasto"]; ?></td>
                            <td class="fila__tabla"> <?php echo $row["monto"]; ?></td>
                            <td class="fila__tabla"> <?php echo $row["fecha"]; ?></td>
                            <td class="fila__tabla"> <a href=""> Borrar </a></td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>
            <h1> Total de gastos: $<?php echo $suma; ?> </h1>
        </div>
    </div>
</body>

</html>