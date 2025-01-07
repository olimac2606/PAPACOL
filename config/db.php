<?php
// Variables de conexión
$host = "localhost";
$dbname = "copapa";
$username = "root";
$password = ""; // Cambia según sea necesario

try {
    // Crear conexión usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configurar atributos para manejar errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Manejo de errores
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>