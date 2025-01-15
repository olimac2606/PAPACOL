<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPAPA</title>
    <link href="/PAPACOL/src/output.css" rel="stylesheet">
    <link rel="icon" href="../img/copapa.png" type="image/png">
    <script>
        function cerrarSesion(){
            window.location.href = "index.html";
        }
    </script>
</head>
<body class="bg-beigeCustom">
    <nav>
        <ul class="mr-[2rem] list-none flex gap-[3rem] justify-end">
            <li><button class="bg-cafeCustom border-none w-[20rem] h-[3rem] rounded cursor-pointer text-[1.3rem] hover:bg-cafeClaroCustom hover:border-2 hover:border-cafeCustom"><a class="no-underline text-white" href="actualizar-cuenta.html">Actualizar Cuenta</a></button></li>
            <li><button class="bg-rojoCustom border-none w-[20rem] h-[3rem] rounded cursor-pointer text-[1.3rem] hover:bg-rojoClaroCustom hover:border-2 hover:border-rojoCustom text-white" onclick="cerrarSesion()">Cerrar Sesión</button></li>
            <li><a class="no-underline text-white" href="compra.html"><img class="max-w-full h-auto block" src="../img/carrito-de-compras.png" alt="Icono de carrito de compras"></a></li>
        </ul>
    </nav>
    <div class="w-[50%] m-auto">
        <img src="../img/copapa.png" class="w-[13rem] m-auto" alt="Icono COPAPA">
        <h2 class="text-[2rem] text-center">Publicaciones Disponibles</h2>
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
            <div class="flex gap-[5rem] mt-[1rem] mb-[2rem] items-center">
                <div class="flex flex-col gap-[0.5rem]">
                    <label for="cantidad">Ingrese cantidad a comprar aquí:</label>
                    <input class="border-2 border-cafeCustom rounded m-auto w-[8rem] h-[1.7rem] appearance-none" id="cantidad" name="cantidad" type="number" min="50">
                </div>
                <button class="border-none h-[3rem] w-[12rem] text-[1rem]cursor-pointer text-white bg-verdeCustom hover:bg-verdeClaroCustom hover:border-2 hover:border-verdeCustom">Agregar al Carrito</button>
            </div>
        </div>
</body>
</html>