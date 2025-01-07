<?php
    //Traer la conexión a la base de datos
    include $_SERVER['DOCUMENT_ROOT'] . '/PAPACOL/config/db.php';
    try {
        //Obtener los datos por medio del metodo POST
        $documento = $_POST['documento-registro'];
        $contrasena = password_hash($_POST['contrasena-registro'], PASSWORD_DEFAULT);
        $nombre = $_POST['nombre-registro'];
        $apellido = $_POST['apellido-registro'];
        $correo = $_POST['correo-registro'];
        $telefono = $_POST['telefono-registro'];
        $direccion = $_POST['direccion-registro'];
        $tipoUsuario = $_POST['tipo-usuario'];
        $fechaCreacion = $_POST['fecha-creacion'];
        
        //valida si es un correo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            die("Correo electrónico no válido.");
        }
        
        //valida si es un telefono
        if (!ctype_digit($telefono)) {
            die("El número de teléfono debe contener solo dígitos.");
        }

        //Consulta a la base de datos para traer si existe el documento ingresado
        $sqlDocumento = "SELECT * FROM usuarios WHERE numeroDocumento = :documento";
        $stmtDocumento = $pdo->prepare($sqlDocumento);
        $stmtDocumento->bindParam(":documento", $documento, PDO::PARAM_INT);
        $stmtDocumento->execute();
        $resultadoDocumento = $stmtDocumento->fetchAll(PDO::FETCH_ASSOC);
        //valida si el numero de documento ya fue creado anteriormente
        if(!array_column($resultadoDocumento, "numeroDocumento") == $documento){
            //Consulta preparada para evitar inyecciones sql (trabaja con PDO)
            //Consulta sql
            $sql = "INSERT INTO usuarios (numeroDocumento, contrasena, nombre, apellido, correoElectronico, numeroTelefono, direccion, tipo, fechaCreacion) VALUES (:numeroDocumento, :contrasena, :nombre, :apellido, :correoElectronico, :numeroTelefono, :direccion, :tipo, :fechaCreacion)";
            //Prepara la consulta
            $stmt = $pdo->prepare($sql);
            //Enlaza los valores
            $stmt->execute([
                ":numeroDocumento" => $documento,
                ":contrasena" => $contrasena,
                ":nombre" => $nombre,
                ":apellido" => $apellido,
                ":correoElectronico" => $correo,
                ":numeroTelefono" => $telefono,
                ":direccion" => $direccion,
                ":tipo" => $tipoUsuario,
                ":fechaCreacion" => $fechaCreacion,
            ]);
            header("location: /PAPACOL/pages/iniciar-sesion.php?tipo=$tipoUsuario&registro=exitoso");
            exit();
        }else{
            header("location: /PAPACOL/pages/iniciar-sesion.php?tipo=$tipoUsuario&registro=duplicado");
            exit();
        }
    } catch (PDOException $e) {
        error_log("Error al insertar usuario: " . $e->getMessage());
        header("location: /PAPACOL/pages/iniciar-sesion.php?tipo=$tipoUsuario&registro=fallido");
        exit();
    }
    

?>