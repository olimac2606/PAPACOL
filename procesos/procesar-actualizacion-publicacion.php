<?php
include $_SERVER["DOCUMENT_ROOT"] . "/PAPACOL/config/db.php";

try {
    //Obtener los datos de la publicación por medio de POST
    $cepa = $_POST["cepa"];
    $precio = (int)$_POST["precio"];
    $cantidad = (int)$_POST["cantidad"];
    $departamento = $_POST["departamento"];
    $municipio = $_POST["municipio"];
    $direccion = $_POST["direccion"];
    $responsable = $_POST["responsable"];
    $telefono = (int)$_POST["telefono"];
    $publicacionId = $_POST["publicacionId"];
    $foto = $_FILES["foto"];
    if($foto["error"] === 4){
        //Consulta preparada
        $sql = "UPDATE publicaciones SET 
        cepa = :cepa,
        precio = :precio,
        cantidad = :cantidad,
        departamento = :departamento,
        municipio = :municipio,
        direccion = :direccion,
        responsable = :responsable,
        telefono = :telefono
        WHERE publicacionId = :publicacionId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":cepa" => $cepa,
            ":precio" => $precio,
            ":cantidad" => $cantidad,
            ":departamento" => $departamento,
            ":municipio" => $municipio,
            ":direccion" => $direccion,
            ":responsable" => $responsable,
            ":telefono" => $telefono,
            ":publicacionId" => $publicacionId
        ]);
    }else if ($foto["error"] === 0) {
        //Eliminar la imagen local y actualizar la dirección en la base de datos
        //Buscar la imagen con la dirección de la base de datos
        $sql = "SELECT foto FROM publicaciones where publicacionId = :publicacionId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":publicacionId", $publicacionId, PDO::PARAM_INT);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        //Eliminar la foto local
        $url = $_SERVER["DOCUMENT_ROOT"] . $resultado["foto"];
        unlink($url);

        //Carpeta para almacenar imagenes
        $carpeta = $_SERVER["DOCUMENT_ROOT"] . "/PAPACOL/uploads/";
        if(!is_dir($carpeta)){
            mkdir($carpeta, 0755, true);//Crea el directorio si no existe
        }

        //valida si se recibió un archivo
        if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["foto"])){
            $archivo = $_FILES["foto"];

            //valida errores de subida
            if ($archivo["error"] !== UPLOAD_ERR_OK) {
                die("Error al subir el archivo");
            }

            //Insertar la imagen nueva en local
            //validar tipo MIME permitido
            $tiposPermitidos = ["image/jpeg", "image/png", "image/gif"];
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($finfo, $foto["tmp_name"]);
            finfo_close($finfo);

            if(!in_array($mimeType, $tiposPermitidos)){
                die("El archivo no es un formato de imagen válido");
            }

            //validar tamaño máximo (2mb)
            $tamañoMaximo = 2 * 1024 * 1024;
            if($foto["size"] > $tamañoMaximo){
                die("El archivo supera el tamaño máximo permitido de 2 MB.");
            }

            //Genera un nombre único para la imagen
            $extension = pathinfo($foto["name"], PATHINFO_EXTENSION);
            $fileName = uniqid("img_", true) . "." . $extension;
            $filePath = $carpeta . $fileName;

            $rutaRelativa = "/PAPACOL/uploads/" . $fileName; // Ruta relativa para la base de datos

            //mover el archivo al directorio de destino
            if(move_uploaded_file($foto["tmp_name"], $filePath)){
                echo "Archivo subido exitosamente: " . htmlspecialchars($fileName);
            }else{
                die("Error al guardar el archivo");
            }
            //actualizar la url en la base de datos
            $sqlFoto = "UPDATE publicaciones SET foto = :foto WHERE publicacionId = :publicacionId";
            $stmtFoto = $pdo->prepare($sqlFoto);
            $stmtFoto->execute([
                ":foto" => $rutaRelativa,
                ":publicacionId" => $publicacionId
            ]);
        }
    }
    // Redirigir al usuario y mostrar la notificación de exito.
    header("Location: /PAPACOL/pages/panel-agricultor.php?color=bg-verdeClaroCustom&mensaje=Publicación actualizada correctamente.");
    exit();
} catch (PDOException $e) {
    error_log("Error al actualizar publicación: " . $e->getMessage());
    header("Location: /PAPACOL/pages/panel-agricultor.php?color=bg-rojoClaroCustom&mensaje=Error al actualizar publicación por favor intente de nuevo o mas tarde.");
    exit();
}
?>