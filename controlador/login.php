<?php

    session_start();
    include '../modelo/configServer.php';
    include '../modelo/consulSQL.php';

    $uriActual=$_POST['vista'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $userResult=ejecutarSQL::consultar("select * from cliente where Email='$email' and Clave='$password'");

    $records=mysqli_num_rows($userResult);
    if($records > 0){
        while($fila = mysqli_fetch_array($userResult)) {
            $usuario = $fila['NombreCompleto'];
        }
        $_SESSION['usuario']=$usuario;
        header("Location: $uriActual?u=$usuario");
    } else {
        header("Location: $uriActual?error=1");
    }

?>