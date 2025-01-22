<?php
include $_SERVER["DOCUMENT_ROOT"] . "/PAPACOL/config/db.php";

//Obtener datos del POST
$publicacionId = (int)$_POST["publicacionId"];
$foto = $_POST["foto"];

//Traer los datos de la publicacion de la base de datos
//Consulta preparada para evitar inyecciones SQL (trabaja con PDO)
$sql = "SELECT * FROM publicaciones WHERE publicacionId = :publicacionId";

//Prepara la consulta
$stmt = $pdo->prepare($sql);

//Cambio :publicacionId por $publicacionId
$stmt->bindParam("publicacionId", $publicacionId, PDO::PARAM_INT);

//Ejecución
$stmt->execute();

//Fetch para traer los datos
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

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
    <link rel="icon" href="../img/copapa.png" type="image/png">
    <link href="/PAPACOL/src/output.css" rel="stylesheet">
</head>
<body class="bg-beigeCustom">
    <a class="mt-[1rem] mr-[2rem] float-right w-[5rem] overflow-hidden" href="panel-agricultor.php"><img class="max-w-full h-auto block" src="../img/flecha-izquierda.png" alt="Flecha para retroceder"></a>
    <div id="contenedor" class="flex flex-col items-center">
        <img class="w-[13rem]" src="../img/copapa.png" alt="Icono COPAPA">
        <h2 class="text-[3rem] text-center">Actualizar Publicación</h2>
        <form class="m-auto w-[45%] flex flex-col items-center" method="POST" enctype="multipart/form-data" action="/PAPACOL/procesos/procesar-actualizacion-publicacion.php">
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="cepa">Ingrese Nombre de la Cepa Aquí:</label>
                <input name="cepa" class="w-[50%] h-[1.7rem] border-2 border-cafeCustom rounded" required type="text" value="<?php echo $resultado["cepa"]; ?>">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="precio">Ingrese Precio por Kilogramo Aquí:</label>
                <input class="w-[50%] h-[1.7rem] border-2 border-cafeCustom rounded" required id="precio" name="precio" type="number" min="1" value="<?php echo (int)$resultado["precio"]; ?>">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="cantidad">Ingrese Cantidad Disponible en Kilogramos Aquí:</label>
                <input name="cantidad" class="w-[50%] h-[1.7rem] border-2 border-cafeCustom rounded" required id="cantidad" type="number" min="1" value="<?php echo (int)$resultado["cantidad"]; ?>" >
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="departamento">Departamento:</label>
                <select class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md" name="departamento" id="departamento">
                    <option class="opcion-actualizar-departamento" value="<?php echo $resultado["departamento"]; ?>"><?php echo $resultado["departamento"]; ?></option>
                </select>
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="municipio">Municipio:</label>
                <select class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md" name="municipio" id="municipio">
                    <option class="opcion-actualizar-municipio" value="<?php echo $resultado["municipio"]; ?>"><?php echo $resultado["municipio"]; ?></option>
                </select>
            </div>
            <div class="flex justify-between items-center w-full px-[2rem] py-[0.4rem]">
                <label for="direccion">Ingrese dirección:</label>
                <input required id="direccion" name="direccion" type="text" class="w-1/2 h-[1.7rem] border-[2px] border-cafeCustom rounded-md" value="<?php echo $resultado["direccion"]; ?>">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="responsable">Ingrese Responsable del Cultivo Aquí:</label>
                <input name="responsable" class="w-[50%] h-[1.7rem] border-2 border-cafeCustom rounded" required id="responsable" type="text" value="<?php echo $resultado["responsable"]; ?>">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="telefono">Ingrese Número de Teléfono Aquí:</label>
                <input name="telefono" class="w-[50%] h-[1.7rem] border-2 border-cafeCustom rounded" required id="telefono" type="number" value="<?php echo (int)$resultado["telefono"]; ?>">
            </div>
            <div class="flex justify-between items-center w-full py-[0.4rem] px-[2rem]">
                <label for="foto">Cargue Foto Aquí:</label>
                <input name="foto" id="foto" type="file" accept="image/jpeg, image/png, image/gif">
            </div>
            <div>
                <input name="publicacionId" type="hidden" value="<?php echo $publicacionId ?>">
            </div>
            <button class="my-[1rem] w-[20rem] h-[2.8rem] bg-cafeCustom text-white text-[1.1rem] border-none rounded hover:cursor-pointer hover:bg-cafeClaroCustom hover:border-2 hover:border-cafeCustom" type="submit">Actualizar Publicación</button>
        </form>
    </div>
    <!-- Script para mostrar los departamentos y municipios de Colombia -->
    <script src="/PAPACOL/js/municipios-departamentos.js"></script>
</body>
</html>