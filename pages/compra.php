<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPAPA</title>
    <link rel="icon" href="../img/copapa.png" type="image/png">
    <link href="/PAPACOL/src/output.css" rel="stylesheet">
</head>
<body class="bg-beigeCustom">
    <div>
        <a class="mt-[0.5rem] mr-[2rem] float-right w-[5rem] overflow-hidden" href="panel-cliente.html"><img class="max-w-full h-auto block" src="../img/flecha-izquierda.png" alt="Icono para retroceder a la página anterior"></a>
        <div class="flex flex-col items-center ml-[8%]">
            <img class="w-[11rem] mb-[1rem]" src="../img/copapa.png" alt="Icono copapa">
            <h2 class="text-3xl mb-4">Carrito de Compras</h2>
        </div>
        <table class="m-auto border-[0.3rem] border-cafeCustom p-[3rem]">
            <thead class="mb-[2rem]">
                <tr>
                    <th>Cepa</th>
                    <th>Foto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-[1.5rem]">Papa Pastusa</td>
                    <td class="px-[1.5rem]"><img src="../img/papa-pastusa.jpeg" alt=""></td>
                    <td class="px-[1.5rem]">6.000$</td>
                    <td class="px-[1.5rem]">500kg</td>
                    <td class="px-[1.5rem]">1.800.000$</td>
                    <td class="px-[1.5rem]"><img class="w-[3.5rem] cursor-pointer" src="../img/cancelar.png" alt="Botón de cancelar"></td>
                </tr>
                <tr>
                    <td class="px-[1.5rem]">Papa Pastusa</td>
                    <td class="px-[1.5rem]"><img src="../img/papa-pastusa.jpeg" alt=""></td>
                    <td class="px-[1.5rem]">6.000$</td>
                    <td class="px-[1.5rem]">500kg</td>
                    <td class="px-[1.5rem]">1.800.000$</td>
                    <td class="px-[1.5rem]"><img class="w-[3.5rem] cursor-pointer" src="../img/cancelar.png" alt="Botón de cancelar"></td>
                </tr>
                <tr>
                    <td class="px-[1.5rem]">Papa Pastusa</td>
                    <td class="px-[1.5rem]"><img src="../img/papa-pastusa.jpeg" alt=""></td>
                    <td class="px-[1.5rem]">6.000$</td>
                    <td class="px-[1.5rem]">500kg</td>
                    <td class="px-[1.5rem]">1.800.000$</td>
                    <td class="px-[1.5rem]"><img class="w-[3.5rem] cursor-pointer" src="../img/cancelar.png" alt="Botón de cancelar"></td>
                </tr>
            </tbody>
        </table>
        <div class="flex flex-col items-center gap-[0.5rem]">
            <p class="mt-[1rem]">Sub Total <span class="text-cafeCustom font-bold ml-[2rem]">5.400.000</span></p>
            <p class="mt-[1rem]">Total con Impuestos <span class="text-cafeCustom font-bold ml-[2rem]">5.670.000</span></p>
            <button class="w-[15rem] h-[2.5rem] border-none bg-cafeCustom rounded text-white font-bold uppercase cursor-pointer hover:bg-cafeClaroCustom hover:border-2 border-cafeCustom ">Proceder con el Pago</button>
        </div>
    </div>
</body>
</html>