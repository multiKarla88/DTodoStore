<?php
include '../modelo/configServer.php';
include '../modelo/consulSQL.php';

 sleep(4);
 
 $codeProd= $_POST['prod-code'];
 $cons=  ejecutarSQL::consultar("select * from producto where CodigoProd='$codeProd'");
 $totalproductos = mysqli_num_rows($cons);
 $tmp=  mysqli_fetch_array($cons);
 $imagen=$tmp['Imagen'];
 if($totalproductos>0){
    if(consultasSQL::DeleteSQL('producto', "CodigoProd='".$codeProd."'")){
        $carpeta='../vista/img/img-products/';
        $directorio=$carpeta.$imagen;
        chmod($directorio, 0777);
        unlink($directorio);
        echo '<p class="lead text-center">El producto se elimino de la tienda con éxito</p>';
    }else{
        echo '<p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
 }else{
     echo '<p class="lead text-center">El código del producto no existe</p>';
 }