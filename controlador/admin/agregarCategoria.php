<?php

include('../modelo/categoriasModel.php');

if(isset($_POST['agregarCategoria'])){
    $cod = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    

    $_SESSION['message'] = 'Categoria agregada exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: ../../vista/admin/categorias.php');

}



?>
