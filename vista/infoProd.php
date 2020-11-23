
<?php
include '../modelo/configServer.php';
include '../modelo/consulSQL.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <?php include './inc/link.php' ?>

   <!--====================================
nota.linck para la configuracion de vista del producto
el bootstrap utilisado en los linck lo desconfigura


<link rel="stylesheet" href="css/bootstrap.min.css">
=======================================-->


</head>
<body id="container-page-product">
<?php include './inc/header.php'; ?>
    <section id="infoproduct">
        <div class="container">
            <div class="row">
                <?php 
                    $CodigoProducto=$_GET['CodigoProd'];
                    $productoinfo=  ejecutarSQL::consultar("select * from producto where CodigoProd='".$CodigoProducto."'");
                    while($fila=mysqli_fetch_array($productoinfo)){

                        $marcac3=  ejecutarSQL::consultar("select * from marca where idMarca='".$file['idMarca']."'");
                        while($provc3=mysqli_fetch_array($marcac3)){
                            $nombre=$provc3['marca'];   
                            
                         }


     // mi recordatorio;--- canbiar el <div class="col-xs-12 col-sm-6 " > por otrao diseño
                        echo '
                        
                            <div class="col-xs-12 col-sm-6 " >
                                <h3>Información de producto</h3>
                                <br><br>
                                <h6><strong>Nombre: </strong>'.$fila['NombreProd'].'</h6><br>
                                <h6><strong>Modelo: </strong>'.$fila['Modelo'].'</h6><br>
                                
                                <h6><strong>Precio: </strong>$'.$fila['Precio'].'</h6><br>
                                <p><strong>Descripcion: </strong>'.$fila['descripcion'].'</p>
                            </div>
                            <div class="col-md-3 col-6 product-block">
                                
                                <img class="text-cen" src="img/img-products/'.$fila['Imagen'].'">
                            </div>
                            
                            <div class="col-xs-12">
                                <a href="index.php" class="btn btn-lg btn-primary"><i class="fa fa-mail-reply"></i>&nbsp;&nbsp;Regresar a la tienda</a> &nbsp;&nbsp;&nbsp; 
                                <button value="'.$fila['CodigoProd'].'" class="btn btn-lg btn-success botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Añadir al carrito</button>
                            </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>