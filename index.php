<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPAPA</title>
    <link rel="icon" href="/PAPACOL/img/copapa.png" type="image/png">
    <link href="/PAPACOL/src/output.css" rel="stylesheet">
</head>
<body class="flex flex-col bg-beigeCustom">
    <?php include 'pages/header.php'; ?> <!-- Incluye el menú de encabezado -->
    <div id="contenedor" class="flex flex-1 flex-col items-center pb-28 mt-[5rem]">
        <script src="js/notificaciones.js"></script>
        <img class="w-44 mb-4" src="/PAPACOL/img/copapa.png" alt="Icono COPAPA">
        <h1 class="text-center text-[2.6rem] text-grisCustom m-0 mb-2">Sistema de Compra y venta de papa</h1>
        <div class="flex gap-[5rem]">
            <div>
                <h2 class="mb-4 text-grisCustom text-[1.8rem] text-center font">¿Eres agricultor?</h2>
                <a href="pages/iniciar-sesion.php?tipo=agricultor"><img class="w-[20rem] border-2 border-grisCustom rounded-full" src="/PAPACOL/img/agricultor.png" alt="Enlace para agricultores"></a>
            </div>
            <div>
                <h2 class="mb-4 text-grisCustom text-[1.8rem] text-center font">¿Eres comprador?</h2>
                <a href="pages/iniciar-sesion.php?tipo=comprador"><img class="w-[20rem] border-2 border-grisCustom rounded-full" src="/PAPACOL/img/comprador.png" alt="Enlace para compradores"></a>
            </div>
        </div>
    </div>
    <?php include 'pages/footer.php';?> <!-- Incluye el pie de página -->
</body>
</html>


