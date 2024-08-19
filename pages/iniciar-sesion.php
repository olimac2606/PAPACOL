<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPAPA</title>
    <link rel="stylesheet" href="../css/iniciar-sesion.css">
    <link rel="icon" href="../img/copapa.png" type="image/png">
    <link rel="stylesheet" href="../css/header.css"> <!-- Estilo para el menú de encabezado -->
    <link rel="stylesheet" href="../css/footer.css"> <!-- Estilo para el pie de página -->
    <?php include 'header.php'; ?> <!-- Incluye el menú de encabezado -->
</head>
<body>
    <div class="contenedor">
        <img class="icono" src="../img/copapa.png" alt="Icono COPAPA">
        <h2>Inicio Sesión</h2>
        <form class="formulario-inicio formularios" action="">
            <div class="contenedor-inputs">
                <label for="documento">Ingrese número de documento:</label>
                <input required name="documento" id="documento" type="number" min="1">
            </div>
            <div class="contenedor-inputs">
                <label for="contraseña">Ingrese contraseña:</label>
                <input required id="contraseña" name="contraseña" type="password">
            </div>
            <button type="submit">Iniciar Sesión</button>
            <a href="#">¿Olvidaste tu contraseña?</a>
        </form>
        <h2>¿No estás registrado?</h2>
        <form class="formularios"  action="procesar_registro.php" method="post">
            <div class="contenedor-inputs">
                <label for="documento-registro">Ingrese número de documento:</label>
                <input required id="documento-registro" name="documento-registro" type="number">
            </div>
            <div class="contenedor-inputs">
                <label for="contraseña-registro">Ingrese contraseña:</label>
                <input required id="contraseña-registro" name="contraseña-registro" type="password">
            </div>
            <div class="contenedor-inputs">
                <label for="nombre-registro">Ingrese nombre:</label>
                <input required id="nombre-registro" name="nombre-registro" type="text">
            </div>
            <div class="contenedor-inputs">
                <label for="apellido-registro">Ingrese apellido:</label>
                <input required id="apellido-registro" name="apellido-registro" type="text">
            </div>
            <div class="contenedor-inputs">
                <label for="correo-registro">Ingrese correo electrónico:</label>
                <input required id="correo-registro" name="correo-registro" type="email">
            </div>
            <div class="contenedor-inputs">
                <label for="telefono-registro">Ingrese número telefónico:</label>
                <input required name="telefono-registro" id="telefono-registro" type="tel" min="1">
            </div>
            <div class="contenedor-inputs">
                <label for="direccion-registro">Ingrese dirección:</label>
                <input required id="direccion-registro" name="direccion-registro" type="text">
            </div>
            <button type="submit">Registrarte</button>
        </form>
    </div>
    <?php include 'footer.php'; ?> <!-- Incluye el pie de página -->
</body>
</html>