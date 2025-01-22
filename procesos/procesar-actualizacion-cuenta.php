<?php
include $_SERVER["DOCUMENT_ROOT"] . "/PAPACOL/config/db.php";
session_start();
try {
    //Obtener los datos de la publicación por medio de POST
    $nombre = ucwords(strtolower($_POST['nombre-registro']));
    $apellido = ucwords(strtolower($_POST['apellido-registro']));
    $correo = $_POST["correo-registro"];
    $departamento = $_POST["departamento"];
    $municipio = $_POST["municipio"];
    $direccion = $_POST["direccion-registro"];
    $telefono = $_POST["telefono-registro"];
    $usuarioId = $_SESSION["userId"];

     //valida si es un correo
     if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        die("Correo electrónico no válido.");
    }
    
    //valida si es un telefono
    if (!ctype_digit($telefono)) {
        die("El número de teléfono debe contener solo dígitos.");
    }

    //Consulta preparada
    $sql = "UPDATE usuarios SET 
    nombre = :nombre,
    apellido = :apellido,
    correoElectronico = :correo,
    departamento = :departamento,
    municipio = :municipio,
    direccion = :direccion,
    numeroTelefono = :telefono
    WHERE usuarioId = :usuarioId";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":nombre" => $nombre,
        ":apellido" => $apellido,
        ":correo" => $correo,
        ":departamento" => $departamento,
        ":municipio" => $municipio,
        ":direccion" => $direccion,
        ":telefono" => $telefono,
        ":usuarioId" => $usuarioId
    ]);
    // Redirigir al usuario y mostrar la notificación de exito.
    if($_SESSION["tipo"] === "agricultor"){
        header("Location: /PAPACOL/pages/panel-agricultor.php?color=bg-verdeClaroCustom&mensaje=Cuenta actualizada correctamento.");
        exit();
    }else if($_SESSION["tipo"] === "comprador"){
        header("Location: /PAPACOL/pages/panel-comprador.php?color=bg-verdeClaroCustom&mensaje=Cuenta actualizada correctamento.");
        exit();
    }else{
        header("Location: /PAPACOL/index.php");
        exit();
    }
    
} catch (PDOException $e) {
    echo("Error al actualizar publicación: " . $e->getMessage());
    header("Location: /PAPACOL/pages/panel-agricultor.php?color=bg-rojoClaroCustom&mensaje=Error al actualizar cuenta por favor intente de nuevo o mas tarde.");
    exit();
}
?>