<?php
include '../../modelo/configServer.php';
include '../../modelo/consulSQL.php';

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



                         <!--form de insertar producto   -->
                         <div id="add-product">
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un producto nuevo</h2>
                            <form role="form" action="../../controlador/admin/regproduct.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Código de producto</label>
                                <input type="text" class="form-control"  placeholder="Código" required maxlength="30" name="prod-codigo">
                              </div>
                              <div class="form-group">
                                <label>Nombre de producto</label>
                                <input type="text" class="form-control"  placeholder="Nombre" required maxlength="30" name="prod-name">
                              </div>
                              <div class="form-group">
                                <label>Descripcion de producto</label>
                                <input type="text" class="form-control"  placeholder="Descripcion" required maxlength="100" name="prod-des">
                              </div>
                              <div class="form-group">
                                <label>Precio</label>
                                <input type="text" class="form-control"  placeholder="Precio" required maxlength="20" pattern="[0-9]{1,20}" name="prod-price">
                              </div>

                              <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" class="form-control"  placeholder="Modelo" required maxlength="30" name="prod-model">
                              </div>

                              <div class="form-group">
                                <label>Unidades disponibles</label>
                                <input type="text" class="form-control"  placeholder="Unidades" required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock">
                              </div>

                              <div class="form-group">
                                <label>Estado</label>
                                <input type="text" class="form-control"  placeholder="Estado" required maxlength="30" name="prod-estado">
                              </div>
                              <div class="form-group">


                              
                                <label>Proveedor</label>
                                <select class="form-control" name="prod-codigoP">
                                    <?php 
                                        $proveedoresc=  ejecutarSQL::consultar("select * from proveedor");
                                        while($provc=mysqli_fetch_array($proveedoresc)){
                                            echo '<option value="'.$provc['idProveedor'].'">'.$provc['NombreProveedor'].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Marca</label>
                                <select class="form-control" name="prod-marca">
                                    <?php 
                                      
                                        $categoriac=  ejecutarSQL::consultar("select * from marca");
                                        while($catec=mysqli_fetch_array($categoriac)){
                                            echo '<option value="'.$catec['idMarca'].'">'.$catec['marca'].'</option>';
                                        }
                                       

                                    ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Categoria</label>
                                <select class="form-control" name="prod-categoria">
                                    <?php 
                                      
                                        $categoriac=  ejecutarSQL::consultar("select * from categoria");
                                        while($catec=mysqli_fetch_array($categoriac)){
                                            echo '<option value="'.$catec['idCategoria'].'">'.$catec['Nombre'].'</option>';
                                        }
                                       

                                    ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Imagen de producto</label>
                                <input type="file" name="img">
                                <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                              </div>
                               

                              <p class="text-center"><button type="submit" class="btn btn-primary">Agregar a la tienda</button></p>
                              <div id="res-form-add" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                  <!--FIM form de insertar producto   -->




                      </div>
                      </div>
                      </div>
                      </div>
                      </section>
      


    
    <!--****** Footer ******-->
    <?php include '../inc/admin/footerAdmin.php'; ?>

  </body>
</html>