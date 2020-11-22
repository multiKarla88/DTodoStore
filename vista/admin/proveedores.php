
<?php
include '../../modelo/configServer.php';
include '../../modelo/consulSQL.php';
    include './controlador/securityPanel.php';
     include '../inc/link.php'; 
   
?>

    <body>
    <section class="container">
            <div class="row">
                <h2>Proveedores   <a href="../../controlador/admin/agregarProveedor.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Agregar</a></h1>
                <table class="table">
                  <thead>
                    <tr>
                    <th>NIT</th>
                      <th>Nombre</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th>Pagina Web</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                
                      <?php
                       
                        
                        $proveedores=  ejecutarSQL::consultar("select * from proveedor");
                        while($item=mysqli_fetch_array($proveedores)){
                        
                            echo '<tr>';
                            echo '<td>'. $item['NITProveedor'] . '</td>';
                            echo '<td>'. $item['NombreProveedor'] . '</td>';
                            echo '<td>'. $item['Direccion'] . '</td>';
                            echo '<td>'. $item['Telefono'] . '</td>';
                            echo '<td>'. $item['PaginaWeb'] . '</td>';
                            echo '<td width=300>';
                            echo '<a class="btn btn-default" href="../../controlador/admin/ver.php?id='.$item['idProveedor'].'"><span class="glyphicon glyphicon-eye-open"></span> Ver</a>';
                            echo ' ';
                            echo '<a class="btn btn-primary" href="../../controlador/admin/modificarProveedor.php?id='.$item['idProveedor'].'"><span class="glyphicon glyphicon-pencil"></span> Modificar</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="../../controlador/admin/borrarProveedor.php?id='.$item['idProveedor'].'"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                       
                      ?>
                  </tbody>
                </table>

            </div>
        </div>
		</section>
    </body>
</html>
