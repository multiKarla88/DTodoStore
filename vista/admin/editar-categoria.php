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
              <h2 class="page-header">Editar categoria</h2>

              <!-- CARD DE BOOTSTRAP -->
              <div class="card" style="width: 70rem;">
                <div class="card-body">
                  <!-- FORM DE BOOTSTRAP -->
                  <form action="#" method="post">
                    <div class="form-group row">
                      <label for="correo" class="col-sm-2 col-form-label">Código*</label>
                      <div class="col-sm-10">
                        <!-- Aquí traera la el correo del usuario para cambiarla -->
                        <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" value="<?php echo "1001" ?>" disabled>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="nombre" class="col-sm-2 col-form-label">Nombre*</label>
                      <div class="col-sm-10"  style="padding-bottom:25px;">
                        <!-- Aquí traera la el nombre del usuario para cambiarla -->
                        <input type="text" class="form-control" id="nombre" value="<?php echo "Moda" ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nombre" class="col-sm-2 col-form-label">Descrición*</label>
                      <div class="col-sm-10"  style="padding-bottom:25px;">
                        <!-- Aquí traera la el nombre del usuario para cambiarla -->
                        <input type="text" class="form-control" id="nombre" value="<?php echo "Categoria de ropa para dama hombre" ?>">
                      </div>
                    </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1">Activo</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Inactivo</label>
                    </div>
                    <a href="#" class="btn btn-primary" style="float:right;">Actualizar categoria</a>
                  </form>
                </div>
              </div>

            </div>

          </div>  
        </div>
      </div>


    </section>

    <!--****** Footer ******-->
    <?php include '../inc/admin/footerAdmin.php'; ?>

  </body>
</html>