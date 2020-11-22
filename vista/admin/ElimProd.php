<?php
include '../../modelo/configServer.php';
include '../../modelo/consulSQL.php';

?>
<!DOCTYPE html>
<html class="no-js" lang="es-sv"> 

  <!-- ***** Head ******-->
  <head>
    <title>DTodo Online</title>
    
    <!--Se define codificado utf-8 y se especifica la escala para dispositivos mobiles-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php include '../inc/link.php'; ?>
    <link rel="stylesheet" href="../css/estilo.css">
  </head>

  <body>

    <!-- ***** Navegacion / Nav ******-->
    <?php include '../inc/admin/headerAdmin.php'; ?>

    <!-- Contenido de la pagina -->
    <section class="container">
      <div class="row">
        <div class="col-12">

          <div class="user-wrapper">

            <div class="user-content">
                               <!--form de eliminar producto   -->
                               <div id="del-prod-form">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un producto</h2>
                             <form action="../../controlador/admin/delprod.php" method="post" role="form">
                                 <div class="form-group">
                                     <label>Productos</label>
                                     <select class="form-control" name="prod-code">
                                         <?php 
                                             $productoc=  ejecutarSQL::consultar("select * from producto");
                                             while($prodc=mysqli_fetch_array($productoc)){
                                                 echo '<option value="'.$prodc['CodigoProd'].'  ">'.$prodc['idMarca'].'-'.$prodc['NombreProd'].'-'.$prodc['Modelo'].'</option>';
                                             }
                                         ?>
                                     </select>
                                 </div>
                                 <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar</button></p>
                                 <br>
                                 <div id="res-form-del-prod" style="width: 100%; text-align: center; margin: 0;"></div>
                             </form>
                         </div>
                      <!--FIN   ----form de eliminar producto   -->
                      </div>
                      </div>
                      </div>
                      </div>
                      </section>
      


    
    <!--****** Footer ******-->
    <?php include '../inc/admin/footerAdmin.php'; ?>

  </body>
</html>