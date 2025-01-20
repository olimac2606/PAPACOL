<?php
    session_start();
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        
    }else{
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
    <div class="m-auto" id="contenedor">
        <!-- Script para mostrar notificación de usuario creado exitosamente o intento fallido -->
        <script src="/PAPACOL/js/notificaciones.js"></script>
    </div>
    <div class="w-[50%] m-auto">
        <img class="w-[13rem] m-auto" src="../img/copapa.png" alt="Icono COPAPA">
        <h2 class="mb-4 text-[2rem] text-center">Panel de control públicaciones</h2>
        <div class="flex flex-col items-center mb-[4rem] border-2 border-cafeCustom gap-[1rem]">
            <div class="informacion">
                <p class="text-[1.5rem]">Cepa: <span class="text-cafeCustom font-bold">Papa Pastusa</span></p>
                <p class="text-[1.5rem]">Precio: <span class="text-cafeCustom font-bold">6.000$ x kg</span></p>
                <p class="text-[1.5rem]">Ubicación: <span class="text-cafeCustom font-bold">Pasto-Nariño</span></p>
                <p class="text-[1.5rem]">Cantidad Disponible: <span class="text-cafeCustom font-bold">80000kg</span></p>
                <p class="text-[1.5rem]">Responsable: <span class="text-cafeCustom font-bold">Fred Camilo Polania Montero</span></p>
                <p class="text-[1.5rem]">Número de teléfono: <span class="text-cafeCustom font-bold">3234171295</span></p>
            </div>
            <div class="rounded-[2%] overflow-hidden"><img class="max-w-full h-auto block" src="../img/papa-pastusa.jpeg" alt="Foto de papa en venta"></div>
            <div class="flex gap-[5rem] mt-[1rem] mb-[2rem]">
                <button class="rounded border-none h-[3rem] w-[12rem] text-[1rem] cursor-pointer text-white bg-verdeCustom hover:bg-verdeClaroCustom hover:border-2 hover:border-verdeCustom">Actualizar información</button>
                <button class="rounded border-none h-[3rem] w-[12rem] text-[1rem] cursor-pointer text-white bg-rojoCustom hover:bg-rojoClaroCustom hover:border-2 hover:border-rojoCustom" >Eliminar Publicación</button>
            </div>
        </div>
        <div class="flex flex-col items-center mb-[4rem] border-2 border-cafeCustom gap-[1rem]">
            <div class="informacion">
                <p class="text-[1.5rem]">Cepa: <span class="text-cafeCustom font-bold">Papa Pastusa</span></p>
                <p class="text-[1.5rem]">Precio: <span class="text-cafeCustom font-bold">6.000$ x kg</span></p>
                <p class="text-[1.5rem]">Ubicación: <span class="text-cafeCustom font-bold">Pasto-Nariño</span></p>
                <p class="text-[1.5rem]">Cantidad Disponible: <span class="text-cafeCustom font-bold">80000kg</span></p>
                <p class="text-[1.5rem]">Responsable: <span class="text-cafeCustom font-bold">Fred Camilo Polania Montero</span></p>
                <p class="text-[1.5rem]">Número de teléfono: <span class="text-cafeCustom font-bold">3234171295</span></p>
            </div>
            <div class="rounded-[2%] overflow-hidden"><img class="max-w-full h-auto block" src="../img/papa-pastusa.jpeg" alt="Foto de papa en venta"></div>
            <div class="flex gap-[5rem] mt-[1rem] mb-[2rem]">
                <button class="rounded border-none h-[3rem] w-[12rem] text-[1rem] cursor-pointer text-white bg-verdeCustom hover:bg-verdeClaroCustom hover:border-2 hover:border-verdeCustom">Actualizar información</button>
                <button class="rounded border-none h-[3rem] w-[12rem] text-[1rem] cursor-pointer text-white bg-rojoCustom hover:bg-rojoClaroCustom hover:border-2 hover:border-rojoCustom" >Eliminar Publicación</button>
            </div>
        </div>
        <div class="flex flex-col items-center mb-[4rem] border-2 border-cafeCustom gap-[1rem]">
            <div class="informacion">
                <p class="text-[1.5rem]">Cepa: <span class="text-cafeCustom font-bold">Papa Pastusa</span></p>
                <p class="text-[1.5rem]">Precio: <span class="text-cafeCustom font-bold">6.000$ x kg</span></p>
                <p class="text-[1.5rem]">Ubicación: <span class="text-cafeCustom font-bold">Pasto-Nariño</span></p>
                <p class="text-[1.5rem]">Cantidad Disponible: <span class="text-cafeCustom font-bold">80000kg</span></p>
                <p class="text-[1.5rem]">Responsable: <span class="text-cafeCustom font-bold">Fred Camilo Polania Montero</span></p>
                <p class="text-[1.5rem]">Número de teléfono: <span class="text-cafeCustom font-bold">3234171295</span></p>
            </div>
            <div class="rounded-[2%] overflow-hidden"><img class="max-w-full h-auto block" src="../img/papa-pastusa.jpeg" alt="Foto de papa en venta"></div>
            <div class="flex gap-[5rem] mt-[1rem] mb-[2rem]">
                <button class="rounded border-none h-[3rem] w-[12rem] text-[1rem] cursor-pointer text-white bg-verdeCustom hover:bg-verdeClaroCustom hover:border-2 hover:border-verdeCustom">Actualizar información</button>
                <button class="rounded border-none h-[3rem] w-[12rem] text-[1rem] cursor-pointer text-white bg-rojoCustom hover:bg-rojoClaroCustom hover:border-2 hover:border-rojoCustom">Eliminar Publicación</button>
            </div>
        </div>
    </div>

</body>
</html>