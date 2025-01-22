<?php
include $_SERVER["DOCUMENT_ROOT"] . "/PAPACOL/config/db.php";
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    //Consulta preparada
    $sql = "SELECT * FROM usuarios WHERE usuarioId = :usuarioId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":usuarioId", $_SESSION["userId"], PDO::PARAM_INT);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
}else{
    header("Location: /PAPACOL/index.php");
    exit();
}
?>
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
        <!-- Script para mostrar notificación de usuario creado exitosamente o intento fallido -->
        <script src="/PAPACOL/js/notificaciones.js"></script>
        <img class="max-w-full h-auto block w-[13rem]" src="../img/copapa.png" alt="Icono COPAPA">
        <h2 class="text-5xl text-center mb-8">Actualizar Cuenta</h2>
        <form class="w-[40rem] flex flex-col items-center"  action="/PAPACOL/procesos/procesar-actualizacion-cuenta.php" method="POST">
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="nombre-registro">Ingrese nombre:</label>
                <input value="<?php echo $resultado["nombre"] ?>" required id="nombre-registro" name="nombre-registro" type="text" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="apellido-registro">Ingrese apellido:</label>
                <input value="<?php echo $resultado["apellido"] ?>" required id="apellido-registro" name="apellido-registro" type="text" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="correo-registro">Ingrese correo electrónico:</label>
                <input value="<?php echo $resultado["correoElectronico"] ?>" required id="correo-registro" name="correo-registro" type="email" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="telefono-registro">Ingrese número telefónico:</label>
                <input value="<?php echo $resultado["numeroTelefono"] ?>" required name="telefono-registro" id="telefono-registro" type="tel" min="1" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="departamento">Departamento:</label>
                <select class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md" name="departamento" id="departamento">
                    <option class="opcion-actualizar-departamento" value="<?php echo $resultado["departamento"] ?>"><?php echo $resultado["departamento"] ?></option>
                </select>
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="municipio">Municipio:</label>
                <select class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md" name="municipio" id="municipio">
                    <option class="opcion-actualizar-municipio" value="<?php echo $resultado["municipio"] ?>"><?php echo $resultado["municipio"] ?></option>
                </select>
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="direccion-registro">Ingrese dirección:</label>
                <input value="<?php echo $resultado["direccion"] ?>" required id="direccion-registro" name="direccion-registro" type="text" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md">
            </div>
            <button class="my-[1rem] w-[12rem] h-[2.2rem] bg-cafeCustom text-white text-[1.1rem] border-none rounded hover:bg-cafeClaroCustom hover:border-2 hover:border-cafeCustom" type="submit">Actualizar cuenta</button>
        </form>
    </div>
    <!-- Script para mostrar los departamentos y municipios de Colombia -->
    <script src="/PAPACOL/js/municipios-departamentos.js"></script>
</body>
</html>