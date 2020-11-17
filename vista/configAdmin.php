<?php
include '../modelo/configServer.php';
include '../modelo/consulSQL.php';
    include './controlador/securityPanel.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Admin</title>
    <?php include './inc/link.php'; ?>

    
<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->

    <script type="text/javascript" src="./js/admin.js"></script>
</head>
<body id="container-page-configAdmin">

    <?php include './inc/header.php'; ?>
    <section id="prove-product-cat-config">
        <div class="container">
            <div class="page-header">
              <h1>Panel de administración</h1>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="nav-item"><a class="nav-link" href="#Productos" role="tab" data-toggle="tab">Administrar Productos</a></li>
              <li role="presentation" class="nav-item"><a class="nav-link" href="#" role="tab" data-toggle="tab">Administrar clientes</a></li>
            </ul>
            <div class="tab-content">
                <!--==============================Panel productos===============================-->
                <div role="tabpanel" class="tab-pane fade in active" id="Productos">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <br><br>

                         <!--form de insertar producto   -->
                        <div id="add-product">
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un producto nuevo</h2>
                            <form role="form" action="./regproduct.php" method="post" enctype="multipart/form-data">
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
                                <label>estado</label>
                                <input type="text" class="form-control"  placeholder="Modelo" required maxlength="30" name="prod-estado">
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
                                <!--<input type="hidden"  name="admin-name" value="<?php //echo $_SESSION['nombreAdmin'] ?>"-->

                              <p class="text-center"><button type="submit" class="btn btn-primary">Agregar a la tienda</button></p>
                              <div id="res-form-add" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                  <!--FIM form de insertar producto   -->

                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br><br>


                             <!--form de eliminar producto   -->
                        <div id="del-prod-form">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un producto</h2>
                             <form action="../controlador/delprod.php" method="post" role="form">
                                 <div class="form-group">
                                     <label>Productos</label>
                                     <select class="form-control" name="prod-code">
                                         <?php 
                                             $productoc=  ejecutarSQL::consultar("select * from producto");
                                             while($prodc=mysqli_fetch_array($productoc)){
                                                 echo '<option value="'.$prodc['CodigoProd'].'  ">'.$prodc['idMarca'].'-'.$prodc['NombreProd'].'-'.$prodc['Modelo'].'</option>';
                                             }
                                         ?>
                                     </select>
                                 </div>
                                 <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar</button></p>
                                 <br>
                                 <div id="res-form-del-prod" style="width: 100%; text-align: center; margin: 0;"></div>
                             </form>
                         </div>
                      <!--FIN   ----form de eliminar producto   -->



                    </div>
                    <div class="col-xs-12">
                        <br><br>
                        <div class="panel panel-info">


                          <!--tabla de Actualisar producto   -->

                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar datos de producto</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          <th class="text-center">Código</th>
                                          <th class="text-center">Nombre</th>
                                          <th class="text-center">Categoría</th>
                                          <th class="text-center">Precio</th>
                                          <th class="text-center">Modelo</th>
                                          <th class="text-center">Marca</th>
                                          <th class="text-center">Unidades</th>
                                          <th class="text-center">Proveedor</th>
                                          
                                          <th class="text-center">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $productos=  ejecutarSQL::consultar("select * from producto");
                                        $upr=1;
                                        while($prod=mysqli_fetch_array($productos)){
                                            echo '
                                                <div id="update-product">
                                                  <form method="post" action="../controlador/updateProduct.php" id="res-update-product-'.$upr.'">
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

                           <!--FIN   tabla de Actualisar producto   -->
                        </div>
                    </div>
                </div>
                </div>
               
    </section>









    
    <?php include './inc/footer.php'; ?>
</body>
</html>