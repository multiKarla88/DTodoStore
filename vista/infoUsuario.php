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
              <h2 class="page-header">Información personal</h2>

              <!-- CARD DE BOOTSTRAP -->
              <div class="card" style="width: 50rem;">
                <div class="card-body">
                  <!-- FORM DE BOOTSTRAP -->
                  <form action="#" method="post">
                    <div class="form-group row">
                      <label for="correo" class="col-sm-2 col-form-label">Correo*</label>
                      <div class="col-sm-10">
                        <!-- Aquí traera la el correo del usuario para cambiarla -->
                        <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" value="<?php echo 'fatimah@gmail.com'?>" >
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="nombre" class="col-sm-2 col-form-label">Nombre*</label>
                      <div class="col-sm-10"  style="padding-bottom:25px;">
                        <!-- Aquí traera la el nombre del usuario para cambiarla -->
                        <input type="text" class="form-control" id="nombre" value="<?php echo 'Fatima'?>">
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary" style="float:right;">Guardar</a>
                  </form>
                </div>
              </div>

            </div>

          </div>  
        </div>
      </div>


    </section>

    <!--****** Footer ******-->
    <?php include './inc/footer.php'; ?>

  </body>
</html>