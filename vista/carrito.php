<?php
  session_start();
  $currentView = "carrito.php"
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
          <h2 class="page-header">Carrito de Compras</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 links wrapper">
          <div class="page-header " >Productos</div>
        
          </div>

          <div class="col-md-6 links wrapper">
          <div class="page-header " >Cuenta</div>
               <ul>
                  <li>Articulos</li>
                  <li>Envio</li>
                  <li>Descuento</li>
                  <li class="page-header " ></li>
                  <li >Total a pagar:</li>
               </ul>

          <button  onclick="window.location.href='./procederPago.php'" class="btn btn-primary btn-lg btn-block">Proceder a pagar</button>
        
          </div>
      </div>
    </section>

    <!--****** Footer ******-->
    <?php include './inc/footer.php'; ?>

  </body>
</html>