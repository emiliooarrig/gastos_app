<?php
// Configuración de la conexión
$host = "localhost";      // o la IP/hostname de tu servidor
$dbname = "control_gastos";      // nombre de tu base de datos
$username = "root"; // usuario de la base de datos
$password = ""; // contraseña del usuario

try {
    // Crear instancia de PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    // Configurar modo de errores para excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
