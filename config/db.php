<?php
require_once __DIR__ . '/../loadenv.php';
loadEnv(__DIR__ . '/../.env');

$host = getenv('DB_HOST');      
$dbname = "control_gastos";     
$username = "root"; 
$password = "root"; 

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
