<?php
// Variables
$host = "localhost";
$dbname = "copapa";
$username = "root";
$password = ""; // Cambia según sea necesario

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root"; //
$password = ""; // 
$dbname = "copapa";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>