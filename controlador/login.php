<?php

    session_start();
    include '../modelo/configServer.php';
    include '../modelo/consulSQL.php';

    $uriActual=$_POST['vista'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    try {
        $userResult=ejecutarSQL::consultar("SELECT c.NombreCompleto, r.rol FROM usuario s ".
            "INNER JOIN rol r on s.idRol = r.idRol ".
            "INNER JOIN cliente c on s.idUsuario = c.idUsuario ".
            "where correo='$email' and contrasenia='$password'");

        $records=mysqli_num_rows($userResult);
        error_log ("records: " . $records . PHP_EOL, 0);
        if($records > 0){
            while($fila = mysqli_fetch_array($userResult)) {
                $usuario = $fila['NombreCompleto'];
                $rol = $fila['rol'];
                error_log ("NombreCompleto: " . $usuario . PHP_EOL, 0);
                error_log ("Rol: " . $rol . PHP_EOL, 0);
            }
            $_SESSION['usuario']=$usuario;
            if ($rol === 'Admin') {
                $uriActual = '/vista/admin/index.php';
            }
            header("Location: $uriActual?u=$usuario");
        } else {
            header("Location: $uriActual?error=1");
        }
    } catch (Throwable $e) {
        error_log ("Captured Throwable: " . $e->getMessage() . PHP_EOL, 0);
    }

?>