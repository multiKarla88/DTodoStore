<html>
    <head>
        <title>Eliminado</title>
      <meta charset="UTF-8">
        <meta http-equiv="Refresh" content="3;url=../../vista/admin/ElimProd.php">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include '../inc/link.php'; ?>
    </head>
    <body>
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">

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
        echo '<img src="../../vista/img/correctofull.png" class="center-all-contens">
        <h1>El producto se elimino de la tienda con éxito</h1>';
    }else{
        echo '<img src="../../vista/img/incorrectofull.png" class="center-all-contens">
        <h1 >Ha ocurrido un error.<br>Por favor intente nuevamente</h1>'; 
    }
 }else{
     echo '<img src="../../vista/img/incorrectofull.png" class="center-all-contens">
     <h1>El código del producto no existe</h1>';
 }


 ?>
                </div>
            </div>
        </div>
    </section>
 </body>
 </html>