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
    <a class="mr-[2rem] mt-[0.5rem] float-right w-[5rem] overflow-hidden" href="panel-agricultor.html"><img class="max-w-full h-auto block" src="../img/flecha-izquierda.png" alt="Flecha para retroceder"></a>
    <div class="flex flex-col items-center">
        <img class="max-w-full h-auto block w-[13rem]" src="../img/copapa.png" alt="Icono COPAPA">
        <h2 class="text-5xl text-center mb-8">Actualizar Cuenta</h2>
        <form class="m-auto w-[45%] flex flex-col items-center" action="">
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="documento-registro">Ingrese número de documento:</label>
                <input class="w-1/2 h-[1.7rem] border-2 border-cafeCustom rounded-md appearance-none" value="1075319149" required id="documento-registro" name="documento-registro" type="number">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="nombre-registro">Ingrese nombre:</label>
                <input class="w-1/2 h-[1.7rem] border-2 border-cafeCustom rounded-md" value="Fred Camilo" required id="nombre-registro" name="nombre-registro" type="text">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="apellido-registro">Ingrese apellido:</label>
                <input class="w-1/2 h-[1.7rem] border-2 border-cafeCustom rounded-md" value="Polania Montero" required id="apellido-registro" name="apellido-registro" type="text">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="correo-registro">Ingrese correo electrónico:</label>
                <input class="w-1/2 h-[1.7rem] border-2 border-cafeCustom rounded-md" value="fredcamilo9926@outlook.com" required id="correo-registro" name="correo-registro" type="email">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="telefono-registro">Ingrese número telefónico:</label>
                <input class="w-1/2 h-[1.7rem] border-2 border-cafeCustom rounded-md" value="3234171295" required name="telefono-registro" id="telefono-registro" type="tel" min="1">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="direccion-registro">Ingrese dirección:</label>
                <input class="w-1/2 h-[1.7rem] border-2 border-cafeCustom rounded-md" value="calle 40#7w-52" required id="direccion-registro" name="direccion-registro" type="text">
            </div>
            <button class="mt-6 my-[1rem] w-[12rem] h-[2.2rem] bg-cafeCustom text-white text-[1.1rem] border-none rounded hover:cursor-pointer hover:bg-cafeClaroCustom hover:border-2 hover:border-cafeCustom" type="submit">Guardar Información</button>
        </form>
    </div>
</body>
</html>