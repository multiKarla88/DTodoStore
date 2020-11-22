<html>
    <head>
        <title>Eliminado</title>
      <meta charset="UTF-8">
        <meta http-equiv="Refresh" content="3;url=../../vista/admin/ActuProd.php">

        <?php include '../inc/link.php'; ?>


    </head>
    <body>
    <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
<?php
include '../../modelo/configServer.php';
include '../../modelo/consulSQL.php';

sleep(5);

$codeOldProdUp=$_POST['code-old-prod'];
$codeProdUp=$_POST['code-prod'];
$nameProdUp=$_POST['prod-name'];
$catProdUp=$_POST['prod-category'];
$priceProdUp=$_POST['price-prod'];
$modelProdUp=$_POST['model-prod'];
$marcaProdUp=$_POST['marc-prod'];
$stockProdUp=$_POST['stock-prod'];
$proveProdUp=$_POST['prod-Prove'];

if(consultasSQL::UpdateSQL("producto", "CodigoProd='$codeProdUp',NombreProd='$nameProdUp',idCategoria='$catProdUp',Precio='$priceProdUp',Modelo='$modelProdUp',idMarca='$marcaProdUp',Stock='$stockProdUp',idProveedor='$proveProdUp'", "CodigoProd='$codeOldProdUp'")){
    echo '
    <br>
    <img class="center-all-contens" src="../../vista/img/Check.png">
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 3 segundos
    </p>

 ';
}else{
    echo '
    <br>
    <img class="center-all-contens" src="../../vista/img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 3 segundos
    </p>

 ';
}

?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>