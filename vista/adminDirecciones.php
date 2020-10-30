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
              <h2 class="page-header">Ver y administrar la dirección de envío</h2>
                
              <!-- CARD DE BOOTSTRAP -->
                <div class="card w-80" style="margin-bottom:25px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Dirección" ?></h5>
                        <p class="card-text">Residencial San Marcos # 40 4ta Avenida Norte, San Marcos, San Salvador, El Salvador</p>
                        <!-- BOTONES DEL CARD -->
                        <div>
                            <button type="button" class="btn btn-link"><i class="fas fa-edit" style="font-size:30px"></i></button>
                            <button type="button" class="btn btn-link"><i class="far fa-trash-alt" style="font-size:30px"></i></button>
                            <!-- <button type="button" class="btn btn-light"><i class="fas fa-cart-plus" style="font-size:30px"></i></button> -->
                        </div>
                    </div>
                </div>  
              <!-- FIN DEL CARD -->

                <!-- CARD DE BOOTSTRAP -->
                <div class="card w-80">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Dirección" ?></h5>
                        <p class="card-text">Residencial San Marcos # 40 4ta Avenida Norte, San Marcos, San Salvador, El Salvador</p>
                        <!-- BOTONES DEL CARD -->
                        <div>
                            <button type="button" class="btn btn-link"><i class="fas fa-edit" style="font-size:30px"></i></button>
                            <button type="button" class="btn btn-link"><i class="far fa-trash-alt" style="font-size:30px"></i></button>
                            <!-- <button type="button" class="btn btn-light"><i class="fas fa-cart-plus" style="font-size:30px"></i></button> -->
                        </div>
                    </div>
                </div>  
                <!-- FIN DEL CARD -->
                <br>
                <button type="button" class="btn btn-primary" style="float: right;">Agregar Dirección</button>
            </div>
          </div>  
        </div>
      </div>


    </section>

    <!--****** Footer ******-->
    <?php include './inc/footer.php'; ?>

  </body>
</html>