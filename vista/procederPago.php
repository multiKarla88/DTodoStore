<?php
  session_start();
  $currentView = "procederPago.php"
?>
<!DOCTYPE html>
<html class="no-js" lang="es-sv"> 

  <!-- ***** Head ******-->
  <head>
    <title>DTodo Online</title>
    
    <!--Se define codificado utf-8 y se especifica la escala para dispositivos mobiles-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php include './inc/link.php'; ?>
  </head>

  <body>

    <!-- ***** Navegacion / Nav ******-->
    <?php include './inc/header.php'; ?>

    <!-- Contenido de la pagina -->
    <section class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">Informacion Personal</h2>
        
          <div class="container">
          <ul class="nav nav-pills">
          <li class="active"><a href="#">Registrate</a></li>
          <li><a href="./ingresar.php">Ingresar</a></li>
          </ul> 
      
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="./inc/registrate.php" allowfullscreen></iframe>
        </div>
    </div>   
        
    </section>

    
    <!--****** Footer ******-->
    <?php include './inc/footer.php'; ?>

  </body>
</html>