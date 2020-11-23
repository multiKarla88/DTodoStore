<?php

    session_start();
    include '../../modelo/configServer.php';
    include '../../modelo/consulSQL.php';
    $result_array = array();

    $result=ejecutarSQL::consultar("SELECT o.*, c.NombreCompleto FROM orden o ".
        "INNER JOIN cliente c ON c.idCliente = o.idCliente ORDER BY idOrden DESC");

    $records=mysqli_num_rows($result);
    if($records > 0){
        while($fila = mysqli_fetch_array($result)) {
            array_push($result_array, $fila);
        }
    }
    echo json_encode($result_array);

?>