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

            <!--Contenido del usuario-->
            <div class="user-content">
              <h2 class="page-header">Ordenes</h2>

              <!-- TABLA DE BOOTSTRAP -->
              <table class="table">
                <thead class="table-primary">
                    <tr>
                    <th scope="col">ID DE ORDEN</th>
                    <th scope="col">MONTO</th>
                    <th scope="col">FECHA DE ORDEN</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">ACCION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo "1" ?></th>
                    <td><?php echo "$504" ?></td>
                    <td><?php echo "9/12/2020" ?></td>
                    <td><?php echo "Pendiente de envío" ?></td>
                    <td><button type="button" class="btn btn-primary">Ver detalle</button></td>
                    </tr>
                </tbody>
                </table>


            </div>

          </div>  
        </div>
      </div>


    </section>

    <!--****** Footer ******-->
    <?php include './inc/footer.php'; ?>

  </body>
</html>