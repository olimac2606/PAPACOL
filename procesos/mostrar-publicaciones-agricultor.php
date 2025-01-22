<?php
include $_SERVER["DOCUMENT_ROOT"] . "/PAPACOL/config/db.php";
$usuario = $_SESSION["userId"];

//Traer las publicaciones en la base de datos del usuario loggeado
//Consulta preparada
$sql = "SELECT * FROM publicaciones WHERE usuarioId = :usuarioId" ;

//Prepara la consulta
$stmt = $pdo->prepare($sql);

//Reemplaza :usuarioId por $usuario
$stmt->bindParam(":usuarioId", $usuario, PDO::PARAM_INT);

//Ejecuta la consulta
$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultado as $publicacion) {
    echo '
    <div class="flex flex-col items-center mb-[4rem] border-2 border-cafeCustom gap-[1rem]">
        <div class="informacion">
            <p class="text-[1.5rem]">Cepa: <span class="text-cafeCustom font-bold">' . $publicacion["cepa"] . '</span></p>
            <p class="text-[1.5rem]">Precio: <span class="text-cafeCustom font-bold">' . $publicacion["precio"] . '$ x kg</span></p>
            <p class="text-[1.5rem]">Departamento: <span class="text-cafeCustom font-bold">' . $publicacion["departamento"] . '</span></p>
            <p class="text-[1.5rem]">Municipio: <span class="text-cafeCustom font-bold">' . $publicacion["municipio"] . '</span></p>
            <p class="text-[1.5rem]">Dirección: <span class="text-cafeCustom font-bold">' . $publicacion["direccion"] . '</span></p>
            <p class="text-[1.5rem]">Cantidad Disponible: <span class="text-cafeCustom font-bold">' . $publicacion["cantidad"] . 'kg</span></p>
            <p class="text-[1.5rem]">Responsable: <span class="text-cafeCustom font-bold">' . $publicacion["responsable"] . '</span></p>
            <p class="text-[1.5rem]">Número de teléfono: <span class="text-cafeCustom font-bold">' . $publicacion["telefono"] . '</span></p>
        </div>
        <div class="rounded-[2%] overflow-hidden"><img class="w-[14rem] h-auto block" src="' . $publicacion["foto"] . '" alt="Foto de papa en venta"></div>
        <div class="flex gap-[5rem] mt-[1rem] mb-[2rem]">
            <form action="/PAPACOL/pages/actualizar-publicacion.php" method="POST">
                <input name="publicacionId" type="hidden" value="' . $publicacion["publicacionId"] . '">
                <input name="foto" type="hidden" value="' . $publicacion["foto"] . '">
                <button class="rounded border-none h-[3rem] w-[12rem] text-[1rem] cursor-pointer text-white bg-verdeCustom hover:bg-verdeClaroCustom hover:border-2 hover:border-verdeCustom">Actualizar información</button>
            </form>
            <form action="/PAPACOL/procesos/eliminar-publicacion.php" method="POST">
                <input name="publicacionId" type="hidden" value="' . $publicacion["publicacionId"] . '">
                <input name="foto" type="hidden" value="' . $publicacion["foto"] . '">
                <button class="rounded border-none h-[3rem] w-[12rem] text-[1rem] cursor-pointer text-white bg-rojoCustom hover:bg-rojoClaroCustom hover:border-2 hover:border-rojoCustom" >Eliminar Publicación</button>
            </form>
        </div>
    </div>
    ';
}
?>