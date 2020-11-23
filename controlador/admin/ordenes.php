<?php

    session_start();
    include '../../modelo/configServer.php';
    include '../../modelo/consulSQL.php';

    $uriActual=$_POST['vista'];

    $result=ejecutarSQL::consultar("SELECT o.*, c.NombreCompleto FROM orden o ".
        "INNER JOIN cliente c ON c.idCliente = o.idCliente ORDER BY idOrden DESC");

    $records=json_encode(mysqli_fetch_array($result));
    echo $records;

?>