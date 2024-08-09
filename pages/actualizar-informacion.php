<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPAPA</title>
    <link rel="stylesheet" href="../css/nueva-publicacion.css">
    <link rel="icon" href="../img/copapa.png" type="image/png">
</head>
<body>
    <a href="panel-agricultor.html"><img src="../img/flecha-izquierda.png" alt="Flecha para retroceder"></a>
    <div class="contenido">
        <img class="icono" src="../img/copapa.png" alt="Icono COPAPA">
        <h2>Actualizar Información</h2>
        <form action="">
            <div class="casilla">
                <label for="cepa">Ingrese Nombre de la Cepa Aquí:</label>
                <input value="Papa Pastusa" required type="text">
            </div>
            <div class="casilla">
                <label for="precio">Ingrese Precio por Kilogramo Aquí:</label>
                <input value="6000" required id="precio" name="precio" type="number" min="1">
            </div>
            <div class="casilla">
                <label for="ubicacion">Ingrese Ubicación de Cultivo Aquí:</label>
                <input value="Pasto-Nariño" required id="ubicacion" name="ubicacion" type="text">
            </div>
            <div class="casilla">
                <label for="cantidad">Ingrese Cantidad Disponible en Kilogramos Aquí:</label>
                <input value="80000" required name="cantidad" id="cantidad" type="number" min="1">
            </div>
            <div class="casilla">
                <label for="responsable">Ingrese Responsable del Cultivo Aquí:</label>
                <input value="Fred Camilo Polania Montero" required name="responsable" id="responsable" type="text">
            </div>
            <div class="casilla">
                <label for="telefono">Ingrese Número de Teléfono Aquí:</label>
                <input value="3234171295" required name="telefono" id="name" type="number">
            </div>
            <div class="casilla">
                <label for="foto">Ingrese Número de Teléfono Aquí:</label>
                <input required name="foto" id="foto" type="file">
            </div>
            <button type="submit">Guardar Información</button>
        </form>
    </div>
</body>
</html>