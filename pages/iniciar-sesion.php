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
    <div class="h-screen flex flex-col items-center justify-center pb-20" id="contenedor">
    <!-- Script para mostrar notificación de usuario creado exitosamente o intento fallido -->
    <script>
        //Caja para mostrar notificación fallida
        const contenedorFallido = document.createElement("DIV");
        contenedorFallido.classList.add("mt-[1rem]", "p-[1.5rem]", "w-[28rem]", "h-[6rem]", "bg-rojoClaroCustom", "rounded", "flex", "justify-center", "items-center");
        const mensajeFallido = document.createElement("H2");
        mensajeFallido.classList.add("text-white", "uppercase", "font-bold", "text-center");
        contenedorFallido.appendChild(mensajeFallido);

        //Caja para mostrar notificación exitosa
        const contenedorExitoso = document.createElement("DIV");
        contenedorExitoso.classList.add("p-[0.5rem]", "w-[20rem]", "h-[5rem]", "bg-verdeClaroCustom", "rounded", "flex", "justify-center", "items-center");
        const mensajeExitoso = document.createElement("H2");
        mensajeExitoso.innerText = "Usuario creado exitosamente, por favor inicie sesión.";
        mensajeExitoso.classList.add("text-white", "uppercase", "font-bold", "text-center");
        contenedorExitoso.appendChild(mensajeExitoso);

        // Obtener la cadena de consulta (todo lo que viene después de ? en la URL)
        const queryString = window.location.search;

        // Usar URLSearchParams para trabajar con los parámetros de la URL
        const urlParams = new URLSearchParams(queryString);
        
        //Obtiene el dato por medio de la url
        const registro = urlParams.get("registro");

        if(registro == "exitoso"){
            //Selecciono el contenedor principal
            const contenedor = document.querySelector("#contenedor");
            contenedor.appendChild(contenedorExitoso);
            
            //Tiempo para mostrar la notificación
            setTimeout(() => {
                contenedor.removeChild(contenedorExitoso);
            }, 5000);
        }else if(registro == "fallido"){
            //Creo el texto
            mensajeFallido.innerText = "Ha ocurrido un error, el usuario no fue creado exitosamente, por favor intente de nuevo.";
            //Selecciono el contenedor principal
            const contenedor = document.querySelector("#contenedor");
            contenedor.appendChild(contenedorFallido);
            
            //Tiempo para mostrar la notificación
            setTimeout(() => {
                contenedor.removeChild(contenedorFallido);
            }, 5000);
        }else if(registro == "duplicado"){
            //Creo el texto
            mensajeFallido.innerText = "El documento ingresado ya fue registrado.";
            //Selecciono el contenedor principal
            const contenedor = document.querySelector("#contenedor");
            contenedor.appendChild(contenedorFallido);
            
            //Tiempo para mostrar la notificación
            setTimeout(() => {
                contenedor.removeChild(contenedorFallido);
            }, 5000);
        }
    </script>
        <img class="w-44" src="../img/copapa.png" alt="Icono COPAPA">
        <h2 class="text-grisCustom text-2xl">Inicio Sesión</h2>
        <form class="w-[40rem] flex flex-col items-center" action="/PAPACOL/procesos/procesar-inicioSesion.php" method="POST">
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="documento">Ingrese número de documento:</label>
                <input required name="documento" id="documento" type="number" min="1" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md appearance-none">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="contrasena">Ingrese contraseña:</label>
                <input required id="contrasena" name="contrasena" type="password" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <button class="my-[1rem] w-[12rem] h-[2.2rem] bg-cafeCustom text-white text-lg border-none rounded hover:bg-cafeClaroCustom hover:border-2 hover:border-cafeCustom" type="submit">Iniciar Sesión</button>
            <a href="#">¿Olvidaste tu contraseña?</a>
        </form>
        <h2 class="text-grisCustom text-2xl">¿No estás registrado?</h2>
        <form class="w-[40rem] flex flex-col items-center"  action="/PAPACOL/procesos/procesar-registro.php" method="POST">
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="documento-registro">Ingrese número de documento:</label>
                <input required id="documento-registro" name="documento-registro" type="number" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md appearance-none">
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
</body>
</html>