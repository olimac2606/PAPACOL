<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPAPA</title>
    <link rel="stylesheet" href="../css/actualizar-cuenta.css">
    <link rel="icon" href="../img/copapa.png" type="image/png">
</head>
<body>
    <a href="panel-agricultor.html"><img src="../img/flecha-izquierda.png" alt="Flecha para retroceder"></a>
    <div class="contenido">
        <img class="icono" src="../img/copapa.png" alt="Icono COPAPA">
        <h2>Actualizar Cuenta</h2>
        <form class="formularios" action="">
            <div class="contenedor-inputs">
                <label for="documento-registro">Ingrese número de documento:</label>
                <input value="1075319149" required id="documento-registro" name="documento-registro" type="number">
            </div>
            <div class="contenedor-inputs">
                <label for="nombre-registro">Ingrese nombre:</label>
                <input value="Fred Camilo" required id="nombre-registro" name="nombre-registro" type="text">
            </div>
            <div class="contenedor-inputs">
                <label for="apellido-registro">Ingrese apellido:</label>
                <input value="Polania Montero" required id="apellido-registro" name="apellido-registro" type="text">
            </div>
            <div class="contenedor-inputs">
                <label for="correo-registro">Ingrese correo electrónico:</label>
                <input value="fredcamilo9926@outlook.com" required id="correo-registro" name="correo-registro" type="email">
            </div>
            <div class="contenedor-inputs">
                <label for="telefono-registro">Ingrese número telefónico:</label>
                <input value="3234171295" required name="telefono-registro" id="telefono-registro" type="tel" min="1">
            </div>
            <div class="contenedor-inputs">
                <label for="direccion-registro">Ingrese dirección:</label>
                <input value="calle 40#7w-52" required id="direccion-registro" name="direccion-registro" type="text">
            </div>
            <button type="submit">Guardar Información</button>
        </form>
    </div>
</body>
</html>