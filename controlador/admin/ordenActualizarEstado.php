<?php

    session_start();
    include '../../modelo/configServer.php';
    include '../../modelo/consulSQL.php';
    try {
        $estado=$_POST['estado'];
        $idOrden=$_POST['idOrden'];
    
        $result=ejecutarSQL::consultar("UPDATE orden SET estadoOrden = '$estado' WHERE idOrden = $idOrden");
    } catch (Throwable $th) {
        die("Error: " + $th->getMessage());
    }

?>