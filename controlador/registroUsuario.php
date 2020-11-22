<?php

    session_start();
    include '../modelo/configServer.php';
    include '../modelo/consulSQL.php';

    $uriActual=$_POST['vista'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $nombreCompleto=$nombre.trim() . " " . $apellido.trim();
    $telefono=$_POST['telefono'];
    $nit=$_POST['nit'];
    $email=$_POST['correo'];
    $password=md5($_POST['password1']);

    error_log ("email: ". $email . PHP_EOL, 0);
    $userResult=ejecutarSQL::consultar("INSERT INTO usuario (correo, contrasenia, fechaIngreso, estado, idRol) ".
        "VALUES('$email', '$password', NOW(), 'activo', (SELECT idRol FROM rol WHERE rol = 'Cliente'))");

    $userResult=ejecutarSQL::consultar("INSERT INTO cliente (NIT, Nombre, NombreCompleto, Apellido, Telefono, idUsuario) ".
        "VALUES('$nit', '$nombre', '$nombreCompleto', '$apellido', '$telefono', (SELECT idUsuario FROM usuario WHERE correo = '$email'))");

    $userResult=ejecutarSQL::consultar("SELECT c.NombreCompleto, r.rol FROM usuario s ".
        "INNER JOIN rol r on s.idRol = r.idRol ".
        "INNER JOIN cliente c on s.idUsuario = c.idUsuario ".
        "where correo='$email' and contrasenia='$password'");

    $records=mysqli_num_rows($userResult);
    if($records > 0){
        $_SESSION['usuario']=$nombreCompleto;
        header("Location:../index.php?u=$usuario");
    } else {
        header("Location: $uriActual?error=1");
    }

?>