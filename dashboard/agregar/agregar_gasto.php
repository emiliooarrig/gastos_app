<?php 

include '../../config/db.php';

if($_SERVER["REQUEST_METHOD"] === 'post'){

    $gasto = $_POST["gasto"];
    $monto = $_POST["monto"];

    $sql = "INSERT INTO gastos (gasto, monto) VALUES(?,?)";
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute([$gasto, $monto]);
    header("Location: ../dashboard.php");
    
}else{
    echo "no se recibe una peticion valida";
}


?>