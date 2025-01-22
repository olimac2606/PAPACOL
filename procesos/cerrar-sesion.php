<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión por completo
session_destroy();

// Redirigir al usuario a la página de inicio o login
header("Location: /PAPACOL/index.php?color=bg-verdeClaroCustom&mensaje=Cierre de sesión exitoso.");
exit();
?>