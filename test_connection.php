<?php
include("config/db.php");

try {
    $stmt = $pdo->query("SELECT * FROM agricultor");
    $agricultores = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "Conexión exitosa. La tabla 'Agricultor ' contiene los siguientes";
    foreach($agricultores as $agricultor) {
        echo "- Email: " . $agricultor["email_agri"] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error; " . $e->getMessage();
}
?>