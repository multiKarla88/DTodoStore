<?php
  session_start();
  $currentView = "../registrate.php"
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
    <link rel="stylesheet" href="css/estilosUsuario.css">
  </head>

  <body>

    <!-- ***** Navegacion / Nav ******-->
    <?php include './inc/header.php'; ?>

    <!-- Contenido de la pagina -->
    <section class="container">
      <div class="row">
        <div class="col-12">

          <div class="user-wrapper">
            
              <!-- Incluimos el Sidebar de la vista usuario -->
              <?php include 'inc/usuarioSidebar.php'?>

            <div class="user-content">
              <h2 class="page-header">Lista de deseos</h2>

              <!-- CARD DE BOOTSTRAP -->
              <div class="card mb-3" style="width: 50rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="..." class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <!-- BOTONES DEL CARD -->
                      <div style="float:right;">
                        <button type="button" class="btn btn-link"><i class="fas fa-cart-plus" style="font-size:30px"></i></button>
                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt" style="font-size:30px"></i></button>
                      </div>
                      <!-- DETALLES DE LA LISTA DE DESEOS -->
                      <h5 class="card-title"><?php  echo "Titulo del producto" ?></h5>
                      <p class="card-text"><?php  echo "Descripcion..." ?></p>
                      <p class="card-text" style="font-weight:700;"><?php echo "$499" ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- FIN DEL CARD -->


              <!-- CARD DE BOOTSTRAP -->
              <div class="card mb-3" style="width: 50rem;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="..." class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <!-- BOTONES DEL CARD -->
                      <div style="float:right;">
                        <button type="button" class="btn btn-link"><i class="fas fa-cart-plus" style="font-size:30px"></i></button>
                        <button type="button" class="btn btn-link"><i class="far fa-trash-alt" style="font-size:30px"></i></button>
                        <!-- <button type="button" class="btn btn-light"><i class="fas fa-cart-plus" style="font-size:30px"></i></button> -->
                      </div>
                      <!-- DETALLES DE LA LISTA DE DESEOS -->
                      <h5 class="card-title"><?php  echo "Titulo del producto" ?></h5>
                      <p class="card-text"><?php  echo "Descripcion..." ?></p>
                      <p class="card-text" style="font-weight:700;"><?php echo "$499" ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- FIN DEL CARD -->


              
            </div>

          </div>  
        </div>
      </div>


    </section>

    <!--****** Footer ******-->
    <?php include './inc/footer.php'; ?>

  </body>
</html>