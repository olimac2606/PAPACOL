<?php
session_start();
if (!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] !== true && $_SESSION["tipo"] !== "agricultor") {
    header("Location: /PAPACOL/pages/iniciar-sesion.php?tipo=agricultor");
    exit();   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPAPA</title>
    <link rel="stylesheet" href="/COPAPA/src/output.css">
    <link rel="icon" href="../img/copapa.png" type="image/png">
    <link href="/PAPACOL/src/output.css" rel="stylesheet">
</head>
<body class="bg-beigeCustom">
    <nav class="mb-5 mt-2 mr-2">
        <ul class="list-none flex gap-[3rem] justify-end">
            <li>
                <a href="nueva-publicacion.php" class="bg-cafeCustom border-none w-[20rem] h-[3rem] rounded cursor-pointer text-[1.3rem] text-white no-underline flex items-center justify-center hover:bg-cafeClaroCustom hover:border-2 hover:border-cafeCustom">
                    Nueva Publicación
                </a>
            </li>
            <li>
                <a href="actualizar-cuenta.php" class="bg-cafeCustom border-none w-[20rem] h-[3rem] rounded cursor-pointer text-[1.3rem] text-white no-underline flex items-center justify-center hover:bg-cafeClaroCustom hover:border-2 hover:border-cafeCustom">
                    Actualizar Cuenta
                </a>
            </li>
            <li>
                <form action="/PAPACOL/procesos/cerrar-sesion.php" method="post">
                    <button type="submit" class="bg-rojoCustom border-none w-[20rem] h-[3rem] rounded cursor-pointer text-[1.3rem] text-white hover:bg-rojoClaroCustom hover:border-2 hover:border-rojoCustom">
                        Cerrar Sesión
                    </button>
                </form>
            </li>
        </ul>
    </nav>
    <div class="flex justify-center items-center" id="contenedor">
        <!-- Script para mostrar notificación de usuario creado exitosamente o intento fallido -->
        <script src="/PAPACOL/js/notificaciones.js"></script>
    </div>
    <div class="w-[50%] m-auto">
        <img class="w-[13rem] m-auto" src="../img/copapa.png" alt="Icono COPAPA">
        <h2 class="mb-4 text-[2rem] text-center">Panel de control públicaciones</h2>
        <?php
        include $_SERVER["DOCUMENT_ROOT"] . "/PAPACOL/procesos/mostrar-publicaciones-agricultor.php";
        ?>
    </div>
</body>
</html>