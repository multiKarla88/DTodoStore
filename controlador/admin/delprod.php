<html>
    <head>
        <title>Eliminado</title>
      <meta charset="UTF-8">
        <meta http-equiv="Refresh" content="5;url=../../vista/admin/ElimProd.php">




    </head>
    <body>

<?php
include '../../modelo/configServer.php';
include '../../modelo/consulSQL.php';

 sleep(4);
 
 $codeProd= $_POST['prod-code'];
 $cons=  ejecutarSQL::consultar("select * from producto where CodigoProd='$codeProd'");
 $totalproductos = mysqli_num_rows($cons);
 $tmp=  mysqli_fetch_array($cons);
 $imagen=$tmp['Imagen'];
 if($totalproductos>0){
    if(consultasSQL::DeleteSQL('producto', "CodigoProd='".$codeProd."'")){
        $carpeta='../../vista/img/img-products/';
        $directorio=$carpeta.$imagen;
        chmod($directorio, 0777);
        unlink($directorio);
        echo '<h1>El producto se elimino de la tienda con éxito</h1>';
    }else{
        echo '<h1 >Ha ocurrido un error.<br>Por favor intente nuevamente</h1>'; 
    }
 }else{
     echo '<h1>El código del producto no existe</h1>';
 }


 ?>

 </body>
 </html>