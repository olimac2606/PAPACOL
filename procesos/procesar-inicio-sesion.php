<?php
    // Iniciar la sesión
    session_start();

    //Conexión a la base de datos
    include $_SERVER['DOCUMENT_ROOT'] . '/PAPACOL/config/db.php';

    try {
        //Obtener datos del formulario por metodo POST
        $documento = $_POST["documento"];
        $contrasena = $_POST["contrasena"];
        $tipoUsuario = $_POST['tipo-usuario'];

        //Consulta preparada
        $sql = "SELECT * FROM usuarios where numeroDocumento = :documento";
        $stmt = $pdo->prepare($sql);

        //Reemplazar :documento con el valor real
        $stmt->bindParam(":documento", $documento, PDO::PARAM_INT);

        //Exucutar la consulta
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if($resultado && password_verify($contrasena, $resultado["contrasena"])){
            //Almacenar datos en SESSION
            $_SESSION["userId"] = $resultado["usuarioId"];
            $_SESSION["logged_in"] = true;

            //Validar que tipo de usuario es para enviarlo a un panel que corresponde.
            if($resultado["tipo"] == "agricultor"){
                header("Location: /PAPACOL/pages/panel-agricultor.php?tipo=agricultor");
                exit();
            }else if($resultado["tipo"] == "comprador"){
                header("Location: /PAPACOL/pages/panel-comprador?tipo=comprador.php");
                exit();
            }
        }else{
            header("Location: /PAPACOL/pages/iniciar-sesion.php?tipo=&color=bg-rojoClaroCustom&mensaje=Contraseña o usuario incorrectos, por favor intente de nuevo.");
            exit();
        }
    } catch (PDOException $e) {
        echo "Error en la conexión o consulta" . $e->getMessage(); 
    }
    
?>