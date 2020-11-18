<?php
include '../modelo/configServer.php';
include '../modelo/consulSQL.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>busqueda</title>
    <?php include './inc/link.php'; ?>



  
</head>
<body id="container-page-configAdmin">

    <?php include './inc/header.php'; ?>




    <section class="container">

<div class="row">
        <?php
        

        
     

        $busprod= $_GET['busprod'];
        


        $consulta=  ejecutarSQL::consultar("select * from producto where NombreProd='".$busprod."' and Stock > 0");
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
            echo '<h2>No hay productos para '.$busprod.'</h2>';
        } 


        ?>
 
        </div>
    

        <section>



















    <?php include './inc/footer.php'; ?>
</body>
</html>