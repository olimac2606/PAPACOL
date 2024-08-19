<?php
session_start(); // Inicia la sesión si aún no está iniciada

// Verifica si el usuario está logueado (esto es solo un ejemplo)
// $is_logged_in = isset($_SESSION['user_id']);
// ?>

<div class="header">
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contactanos.php">Contáctanos</a></li>
        <li><a href="preguntas_frecuentes.php">Preguntas Frecuentes</a></li>
        <!-- <?php if ($is_logged_in): ?>
            <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
        <?php endif; ?> -->
    </ul>
</div>
</html>