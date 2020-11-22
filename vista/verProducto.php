<?php
  session_start();
  $currentView = "nombreArchivoActual.php"
?>
<?php
include '../modelo/configServer.php';
include '../modelo/consulSQL.php';
    include './controlador/securityPanel.php';
  
   
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
          <h4 class="page-header">Producto</h4>
            <?php 
            $id='1';
            $db = Database::connect();
            $statement = $db->prepare("SELECT * FROM producto where idproducto = ?");
            $statement->execute(array($id));
            $item = $statement->fetch();
            
            $nombreProd    = $item['NombreProd'];
            $descripcion          = $item['descripcion'];
            $precio      = $item['Precio'];
            $modelo          = $item['Modelo'];
            $imagen          = $item['Imagen'];
            Database::disconnect();
            
            ?>
                  <div class="form-group">
                  <table class="table">
                    <tr >
                      <td>               
                      <img class="img-thumbnail" src="<?php echo $imagen;?>" width="200" height="200">
                      </td>
                      <td>
                        <p><?php echo $nombreProd;?><br><?php echo $precio;?><br><?php echo $modelo;?> </p> 
                      </td>
                    </tr>
                    </table>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion:</label>
                        <br><?php echo $descripcion;?>
                    </div>

                    <form>
                        <label for="cantidad">Cantidad:</label>
                        <input class="col-1 col-form-label" type="number" id="cantidad" name="cantidad" min="1" max="25" step="1" value="1">
                        <input type="submit" value="Agregar al carrito" class="btn btn-primary">
                        <input type="submit" value=" &nbsp " class="btn btn-primary"><span class='glyphicon glyphicon-heart'></span></input>
                    </form> 

        </div>
      </div>
    </section>

    <!--****** Footer ******-->
    <?php include './inc/footer.php'; ?>

  </body>
</html>