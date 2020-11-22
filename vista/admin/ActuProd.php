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



             <!--tabla de Actualisar producto   -->

             <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar datos de producto</h3></div>
                          <div class="table-responsive">
                              <table class="table table-sm table-dark">
                                  <thead class="">
                                      <tr>
                                          <th scope="col">Código</th>
                                          <th scope="col">Nombre</th>
                                          <th scope="col">Categoría</th>
                                          <th scope="col">Precio</th>
                                          <th scope="col">Modelo</th>
                                          <th scope="col">Marca</th>
                                          <th scope="col">Unidades</th>
                                          <th scope="col">Proveedor</th>
                                          
                                          <th scope="col">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $productos=  ejecutarSQL::consultar("select * from producto");
                                        $upr=1;
                                        while($prod=mysqli_fetch_array($productos)){
                                            echo '
                                                <div id="update-product">
                                                  <form method="post" action="../../controlador/admin/updateProduct.php" id="res-update-product-'.$upr.'">
                                                    <tr>
                                                        <td>
                                                          <input class="form-control" type="hidden" name="code-old-prod" required="" value="'.$prod['CodigoProd'].'">
                                                          <input class="form-control" type="text" name="code-prod" maxlength="30" required="" value="'.$prod['CodigoProd'].'">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="prod-name" maxlength="30" required="" value="'.$prod['NombreProd'].'"></td>
                                                        <td>';
                                                            $categoriac3=  ejecutarSQL::consultar("select * from categoria where idCategoria='".$prod['idCategoria']."'");
                                                            while($catec3=mysqli_fetch_array($categoriac3)){
                                                                $codeCat=$catec3['idCategoria'];
                                                                $nameCat=$catec3['Nombre'];
                                                            }
                                                      echo '<select class="form-control" name="prod-category">';
                                                                echo '<option value="'.$codeCat.'">'.$nameCat.'</option>';
                                                                $categoriac2=  ejecutarSQL::consultar("select * from categoria");
                                                                while($catec2=mysqli_fetch_array($categoriac2)){
                                                                    if($catec2['idCategoria']==$codeCat){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$catec2['idCategoria'].'">'.$catec2['Nombre'].'</option>';  
                                                                    }
                                                                    
                                                                }
                                                      echo '</select>
                                                        </td>
                                                        <td><input class="form-control" type="text-area" name="price-prod" required="" value="'.$prod['Precio'].'"></td>
                                                        <td><input class="form-control" type="tel" name="model-prod" required="" maxlength="20" value="'.$prod['Modelo'].'"></td>
                                                        
                                                        



                                                        <td>';
                                                        $marcac3=  ejecutarSQL::consultar("select * from marca where idMarca='".$prod['idMarca']."'");
                                                        while($provc3=mysqli_fetch_array($marcac3)){
                                                                 $nombre=$provc3['marca'];
                                                                 $idM=$provc3['idMarca'];
                                                         }
                                                    echo '<select class="form-control" name="marc-prod">';
                                                             echo '<option value="'.$idM.'">'.$nombre.'</option>';
                                                             $marcac2=  ejecutarSQL::consultar("select * from marca");
                                                             while($provc2=mysqli_fetch_array($marca2)){
                                                                 if($provc2['idMarca']==$idM){
                                                                     
                                                                 }else{
                                                                   echo '<option value="'.$provc2['idMarca'].'">'.$provc2['marca'].'</option>';
                                                                 }  
                                                             }  
                                                    echo '</select>
                                                     </td>




                                                        <td><input class="form-control" type="text-area" name="stock-prod" maxlength="30" required="" value="'.$prod['Stock'].'"></td>
                                                        <td>';
                                                           $proveedoresc3=  ejecutarSQL::consultar("select * from proveedor where idProveedor='".$prod['idProveedor']."'");
                                                           while($provc3=mysqli_fetch_array($proveedoresc3)){
                                                                    $nombreP=$provc3['NombreProveedor'];
                                                                    $nitP=$provc3['idProveedor'];
                                                            }
                                                       echo '<select class="form-control" name="prod-Prove">';
                                                                echo '<option value="'.$nitP.'">'.$nombreP.'</option>';
                                                                $proveedoresc2=  ejecutarSQL::consultar("select * from proveedor");
                                                                while($provc2=mysqli_fetch_array($proveedoresc2)){
                                                                    if($provc2['idProveedor']==$nitP){
                                                                        
                                                                    }else{
                                                                      echo '<option value="'.$provc2['idProveedor'].'">'.$provc2['NombreProveedor'].'</option>';
                                                                    }  
                                                                }  
                                                       echo '</select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-'.$upr.'">Actualizar</button>
                                                            <div id="res-update-product-'.$upr.'" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                    </tr>
                                                  </form>
                                                </div>
                                                ';
                                            $upr=$upr+1;
                                        }
                                      ?>
                                  </tbody>
                              </table>
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