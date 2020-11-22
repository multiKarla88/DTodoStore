<?php
include '../modelo/configServer.php';
include '../modelo/consulSQL.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
  
    <?php include './inc/link.php' ?>

</head>
 <body id="container-page-configAdmin">

<?php include './inc/header.php'; ?>



<section class="container">

<div class="row">
    <?php
    

    
 //variable enviada desde el menu simulasion del metodo GET
 //el idcategoria de la categoria correspondiente 
 /* Ejemplo linea 111 menuMav moda para dama<li><a href="./product.php?Catprod=5" class="trsn nav-link" title="Dama">Dama</a></li> */

    $Catprod= $_GET['Catprod'];
    


    $consulta=  ejecutarSQL::consultar("select * from producto where CodigoCat='".$Catprod."' and Stock > 0");
    $totalproductos = mysqli_num_rows($consulta);
    if($totalproductos>0){
        while($fila=mysqli_fetch_array($consulta)){
            echo '
           
           <div class="card" style="width: 18rem;">
                  <img class="img-fluid img-portfolio img-hover mb-3" src="img/img-products/'.$fila['Imagen'].'">
                  
                  <div class="card-body">
                    <p class="card-text">'.$fila['NombreProd'].'</p>
                    <div class="price-mob">$'.$fila['Precio'].'</div>
                    </div>
                    <div class="card-body">
                        <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                        <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                    </div>
            </div>
                  
                
                
            ';
        }   
    }else{
        echo '<h2>Categoria '.$Catprod.' sin productos</h2>';
    } 


    ?>

</div>
    <section>






<br><br>


<?php include './inc/footer.php'; ?>
</body>
</html>