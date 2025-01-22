<?php
    include $_SERVER["DOCUMENT_ROOT"] . "/PAPACOL/config/db.php";
    //obtiene la ruta de la foto
    $foto = $_SERVER["DOCUMENT_ROOT"] . $_POST["foto"];

    //Obtiene el id de la publicación para eliminar
    $publicacionId = (int)$_POST["publicacionId"];

    //Consulta preparada
    $sql = "SELECT * FROM publicaciones WHERE publicacionId = :publicacionId";

    //prepara la consulta
    $stmt = $pdo->prepare($sql);

    //Cambia el :publicacionId por el dato que se pasa por el metodo POST para evitar inyecciones sql
    $stmt->bindParam(":publicacionId", $publicacionId, PDO::PARAM_INT);

    //Ejecuta la consulta
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($foto);

    if($resultado){
        //Consulta preparada
        $sql2 = "DELETE FROM publicaciones where publicacionId = :publicacionId";

        //prepara la consulta
        $stmt2 = $pdo->prepare($sql2);

        //Cambia el :publicacionId por el dato que se pasa por el metodo POST para evitar inyecciones sql
        $stmt2->bindParam(":publicacionId", $publicacionId, PDO::PARAM_INT);

        //Ejecuta la consulta
        $stmt2->execute();

        //Eliminar la foto del servidor
        unlink($foto);

        header("Location: /PAPACOL/pages/panel-agricultor.php?color=bg-verdeClaroCustom&mensaje=Publicación eliminada correctamente.");
        exit();
    }else{
        header("Location: /PAPACOL/pages/panel-agricultor.php?color=bg-rojoClaroCustom&mensaje=Ocurrió un error al eliminar la publicación por favor intente de nuevo o más tarde.");
        exit();
    }
?>