<?php
  session_start();
  $currentView = "../categorias.php"
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
            

            <!--Contenido del usuario-->
            <div class="user-content">
              <h2 class="page-header">Categorias</h2>

              <!-- TABLA DE BOOTSTRAP -->
              <table class="table">
                <thead class="table-primary">
                    <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo "1001" ?></th>
                    <td><?php echo "Moda" ?></td>
                    <td><?php echo "Categoria de ropa para dama hombre" ?></td>
                    <td><?php echo "Activo" ?></td>
                    <td>
                        <button type="button" class="btn btn-link"><i class="fas fa-edit" style="font-size:30px"></i></button>
                        <button type="button" class="btn btn-link"><i class="far fa-eye" style="font-size:30px"></i></button>
                    </td>
                    </tr>
                </tbody>
                </table>


            </div>

          </div>  
        </div>
      </div>


    </section>

    <!--****** Footer ******-->
    <?php include '../inc/admin/footerAdmin.php'; ?>

  </body>
</html>