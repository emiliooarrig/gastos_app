<?php
include '../../config/db.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    if (isset($_POST["gasto"], $_POST["monto"])) {
        $gasto = $_POST["gasto"];
        $monto = $_POST["monto"];

        $sql = "INSERT INTO gastos (monto, gasto) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$monto, $gasto]);

        header("Location: ../../index.php");
        exit;
    } else {
        echo "Faltan datos en el formulario.";
    }

} else {
    echo "No se recibe una petición válida.";
}
