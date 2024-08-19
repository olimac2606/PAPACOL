<?php

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

// Obtener datos del formulario
$documento = $_POST['documento-registro'];
$contraseña = $_POST['contraseña-registro'];
$nombre = $_POST['nombre-registro'];
$apellido = $_POST['apellido-registro'];
$correo = $_POST['correo-registro'];
$telefono = $_POST['telefono-registro'];
$direccion = $_POST['direccion-registro'];

// Asegúrate de escapar los datos para prevenir inyecciones SQL
$documento = $conn->real_escape_string($documento);
$contraseña = password_hash($conn->real_escape_string($contraseña), PASSWORD_BCRYPT); // Hash de la contraseña
$nombre = $conn->real_escape_string($nombre);
$apellido = $conn->real_escape_string($apellido);
$correo = $conn->real_escape_string($correo);
$telefono = $conn->real_escape_string($telefono);
$direccion = $conn->real_escape_string($direccion);

// Preparar y ejecutar la consulta de inserción
$sql = "INSERT INTO agricultor (Agricultor_Id , contrasena_agri, nombre_agri, apellido_agri, email_agri, telefono_agri, direccion_agri)
VALUES ('$documento', '$contraseña', '$nombre', '$apellido', '$correo', '$telefono', '$direccion')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>