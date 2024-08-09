<?php
//Variables
$host = "localhost";
$dbname = "copapa";
$username = "root";
$password = "root";

try {
    $pdo = new PDO("mysql:host=$host;
    dbname=$dbname;
    charset=utf8", 
    $username, 
    $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos; " . $e->getMessage());
}
?>