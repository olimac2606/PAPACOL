<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPAPA</title>
    <link rel="icon" href="../img/copapa.png" type="image/png">
    <link rel="stylesheet" href="/PAPACOL/src/output.css">
</head>
<body class="bg-beigeCustom">
    <?php include 'header.php'; ?> <!-- Incluye el menú de encabezado -->
    <div class="mt-[3rem] flex flex-col items-center justify-center" id="contenedor">
        <!-- Script para mostrar notificación de usuario creado exitosamente o intento fallido -->
        <script src="/PAPACOL/js/notificaciones.js"></script>
        <img class="w-44" src="../img/copapa.png" alt="Icono COPAPA">
        <h2 class="text-grisCustom text-2xl">Inicio Sesión</h2>
        <form class="w-[40rem] flex flex-col items-center" action="/PAPACOL/procesos/procesar-inicio-sesion.php" method="POST">
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="documento">Ingrese número de documento:</label>
                <input required name="documento" id="documento" type="number" min="1" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="contrasena">Ingrese contraseña:</label>
                <input required id="contrasena" name="contrasena" type="password" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <input type="hidden" value="<?php echo htmlspecialchars($tipo) ?>" name="tipo-usuario">
            <button class="my-[1rem] w-[12rem] h-[2.2rem] bg-cafeCustom text-white text-lg border-none rounded hover:bg-cafeClaroCustom hover:border-2 hover:border-cafeCustom" type="submit">Iniciar Sesión</button>
            <a href="#" class="hover:underline">¿Olvidaste tu contraseña?</a>
        </form>
        <h2 class="text-grisCustom text-2xl">¿No estás registrado?</h2>
        <form class="w-[40rem] flex flex-col items-center"  action="/PAPACOL/procesos/procesar-registro.php" method="POST">
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="documento-registro">Ingrese número de documento:</label>
                <input required id="documento-registro" name="documento-registro" type="number" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="contrasena-registro">Ingrese contraseña:</label>
                <input required id="contrasena-registro" name="contrasena-registro" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md" type="password">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="nombre-registro">Ingrese nombre:</label>
                <input required id="nombre-registro" name="nombre-registro" type="text" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="apellido-registro">Ingrese apellido:</label>
                <input required id="apellido-registro" name="apellido-registro" type="text" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="correo-registro">Ingrese correo electrónico:</label>
                <input required id="correo-registro" name="correo-registro" type="email" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="telefono-registro">Ingrese número telefónico:</label>
                <input required name="telefono-registro" id="telefono-registro" type="tel" min="1" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="departamento">Departamento:</label>
                <select class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md" name="departamento" id="departamento">
                    <option value="">Seleccione un Departamento</option>
                </select>
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="municipio">Municipio:</label>
                <select class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md" name="municipio" id="municipio">
                    <option value="">Seleccione un Municipio</option>
                </select>
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="direccion-registro">Ingrese dirección:</label>
                <input required id="direccion-registro" name="direccion-registro" type="text" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div> <!-- Envia el tipo de usuario -->
                <?php
                    $tipo = $_GET['tipo'];
                ?>
                <input type="hidden" value="<?php echo htmlspecialchars($tipo) ?>" name="tipo-usuario">
                <input type="hidden" value="<?php echo date('Y-m-d'); ?>" name="fecha-creacion">
            </div>
            <button class="my-[1rem] w-[12rem] h-[2.2rem] bg-cafeCustom text-white text-[1.1rem] border-none rounded hover:bg-cafeClaroCustom hover:border-2 hover:border-cafeCustom" type="submit">Registrarte</button>
        </form>
    </div>
    <?php include 'footer.php'; ?> <!-- Incluye el pie de página -->
    <!-- Script para mostrar los departamentos y municipios de Colombia -->
    <script src="/PAPACOL/js/municipios-departamentos.js"></script>
</body>
</html>