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
              <h2 class="page-header">Agregar categoria</h2>

              <!-- CARD DE BOOTSTRAP -->
              <div class="card" style="width: 70rem;">
                <div class="card-body">


                <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                  <?= $_SESSION['message']?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php session_unset(); } ?>

                  <!-- FORM DE BOOTSTRAP -->
                  <!-- ../../controlador/agregarCategoria.php -->
                  <form action="../../../controlador/admin/agregarCategoria.php" method="post">
                    <div class="form-group row">
                      <label for="correo" class="col-sm-2 col-form-label">Código*</label>
                      <div class="col-sm-10">
                        <!-- Aquí traera la el correo del usuario para cambiarla -->
                        <input type="text" name="codigo" class="form-control" id="correo" aria-describedby="emailHelp" value="" >
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="nombre" class="col-sm-2 col-form-label">Nombre*</label>
                      <div class="col-sm-10"  style="padding-bottom:25px;">
                        <!-- Aquí traera la el nombre del usuario para cambiarla -->
                        <input type="text" name="nombre" class="form-control" id="nombre" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nombre" class="col-sm-2 col-form-label">Descrición*</label>
                      <div class="col-sm-10"  style="padding-bottom:25px;">
                        <!-- Aquí traera la el nombre del usuario para cambiarla -->
                        <input type="text" name="descripcion" class="form-control" id="nombre" value="">
                      </div>
                    </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" name="" for="inlineRadio1">Activo</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" name="" for="inlineRadio2">Inactivo</label>
                    </div>
                    <button type="submit" name="agregarCategoria" class="btn btn-primary" style="float:right;">Agregar categoria</button>
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
