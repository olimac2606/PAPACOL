<?php
    //Iniciar la sesión para obtener el usuario id
    session_start();

    //Conexión a la base de datos
    include $_SERVER['DOCUMENT_ROOT'] . '/PAPACOL/config/db.php';

    try {
        //Carpeta para almacenar imagenes
        $carpeta = "uploads/";
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

            //validar tipo MIME permitido
            $tiposPermitidos = ["image/jpeg", "image/png", "image/gif"];
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($finfo, $archivo["tmp_name"]);
            finfo_close($finfo);

            if(!in_array($mimeType, $tiposPermitidos)){
                die("El archivo no es un formato de imagen válido");
            }

            //validar tamaño máximo (2mb)
            $tamañoMaximo = 2 * 1024 * 1024;
            if($archivo["size"] > $tamañoMaximo){
                die("El archivo supera el tamaño máximo permitido de 2 MB.");
            }

            //Genera un nombre único para la imagen
            $extension = pathinfo($archivo["name"], PATHINFO_EXTENSION);
            $fileName = uniqid("img_", true) . "." . $extension;
            $filePath = $carpeta . $fileName;

            $rutaRelativa = "/uploads/" . $fileName; // Ruta relativa para la base de datos

            //mover el archivo al directorio de destino
            if(move_uploaded_file($archivo["tmp_name"], $filePath)){
                echo "Archivo subido exitosamente: " . htmlspecialchars($fileName);
            }else{
                die("Error al guardar el archivo");
            }
        }else {
            die("No se recibió ningún archivo");
        }

        //Obtener los datos del formulario
        $cepa = $_POST["cepa"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];
        $departamento = $_POST["departamento"];
        $municipio = $_POST["municipio"];
        $direccion = $_POST["direccion"];
        $responsable = $_POST["responsable"];
        $telefono = $_POST["telefono"];
        $usuarioId = $_SESSION['userId'];

        //valida si es un telefono
        if (!ctype_digit($telefono)) {
            die("El número de teléfono debe contener solo dígitos.");
        }

        //Consulta preparada para evitar inyecciones SQL (trabaja con PDO)
        $sql = "INSERT INTO publicaciones 
        (cepa, precio, departamento, municipio, direccion, cantidad, responsable, telefono, usuarioId, foto) 
        VALUES 
        (:cepa, :precio, :departamento, :municipio, :direccion, :cantidad, :responsable, :telefono, :usuarioId, :foto)";

        //Prepara la consulta
        $stmt = $pdo->prepare($sql);

        //Ejecuta la consulta
        $stmt->execute([
            ":cepa" => $cepa,
            ":precio" => $precio,
            ":departamento" => $departamento,
            ":municipio" => $municipio,
            ":direccion" => $direccion,
            ":cantidad" => $cantidad,
            ":responsable" => $responsable,
            ":telefono" => $telefono,
            ":usuarioId" => $usuarioId,
            ":foto" => $rutaRelativa,
        ]);

        //Redirigir al usuario y mostrar la notificación de exito.
        header("Location: /PAPACOL/pages/panel-agricultor.php?tipo=agricultor&color=bg-verdeClaroCustom&mensaje=Nueva publicación creada con éxito.");
            exit();
    } catch (PDOException $e) {
        error_log("Error al insertar publicación: " . $e->getMessage());
        header("Location: /PAPACOL/pages/panel-agricultor.php?tipo=agricultor&color=bg-rojoClaroCustom&mensaje=Error al crear nueva publicación por favor intente de nuevo o mas tarde.");
        exit();
    }
?>