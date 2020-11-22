<?php
include '../../modelo/configServer.php';
include '../../modelo/consulSQL.php';
    include './controlador/securityPanel.php';
     include '../inc/link.php'; 
   
?>
<?php
   
   $nitError =$nombreError = $direccionError= $telefonoError  = $webError = $nit = $nombre = $direccion = $telefono= $web = "";

    
   if(!empty($_GET['id'])) 
   {
       $id = checkInput($_GET['id']);
     

    if(!empty($_POST)) 
    {
        $id = checkInput($_POST['id']);

       
        $nit               = checkInput($_POST['NITProveedor']);
        $nombre               = checkInput($_POST['NombreProveedor']);
        $direccion        = checkInput($_POST['Direccion']);
        $telefono             = checkInput($_POST['Telefono']);
        $web           = checkInput($_POST['PaginaWeb']); 
        
        $isSuccess          = true;
       
        
        if(empty($nit)) 
        {
            $nitError = 'Este campo no puede estar vacío';
            $isSuccess = false;
        }
        if(empty($nombre)) 
        {
            $nombreError = 'Este campo no puede estar vacío';
            $isSuccess = false;
        }
        if(empty($direccion)) 
        {
            $direccionError = 'Este campo no puede estar vacío';
            $isSuccess = false;
        } 
        if(empty($telefono)) 
        {
            $telefonoError = 'Este campo no puede estar vacío';
            $isSuccess = false;
        } 
        if(empty($web)) 
        {
            $webError = 'Este campo no puede estar vacío';
            $isSuccess = false;
        }
       
        
        if($isSuccess) 
        {
            
            $db = Database::connect();
            

                $statement = $db->prepare("UPDATE proveedor  set NITProveedor = ?, NombreProveedor = ?, Direccion = ?, Telefono = ?, PaginaWeb = ? WHERE idProveedor = ?");
                $statement->execute(array($nit,$nombre, $direccion,$telefono,$web,$id));
            
            Database::disconnect();
            header("Location: ../../vista/admin/proveedores.php");
        }
       
    }
    
     else{

        $db = Database::connect();
        $statement = $db->prepare("SELECT * FROM proveedor where idproveedor = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        //$idprov         =$item['idproveedor']
        $nit           = $item['NITProveedor'];
        $nombre    = $item['NombreProveedor'];
        $direccion          = $item['Direccion'];
        $telefono      = $item['Telefono'];
        $web          = $item['PaginaWeb'];
        Database::disconnect();
   }
     }  
    

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>



<!DOCTYPE html>
<html>
    <head>
        
    </head>
    
    <body>
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Modificar Proveedor <span class="glyphicon glyphicon-cutlery"></span></h1>
         <div class="container admin">
            <div class="row">
                <br>
                <form class="form" action="<?php echo '../../controlador/admin/modificarProveedor.php?id='.$id;?>" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="nit">NIT:</label>
                        <input type="text" class="form-control" id="NITProveedor" name="NITProveedor" placeholder="NIT" value="<?php echo $nit;?>">
                        <span class="help-inline"><?php echo $nombreError;?></span>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="NombreProveedor" name="NombreProveedor" placeholder="Nombre" value="<?php echo $nombre;?>">
                        <span class="help-inline"><?php echo $nombreError;?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Direccion</label>
                        <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Dirección" value="<?php echo $direccion;?>">
                        <span class="help-inline"><?php echo $direccionError;?></span>
                    </div>
                    <div class="form-group">
                      <label for="web">Telefono:</label>
                        <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono" value="<?php echo $telefono;?>">
                        <span class="help-inline"><?php echo $webError;?></span>
                    </div>
                    <div class="form-group">
                      <label for="web">Pagina Web:</label>
                        <input type="text" class="form-control" id="PaginaWeb" name="PaginaWeb" placeholder="Pagina web" value="<?php echo $web;?>">
                        <span class="help-inline"><?php echo $webError;?></span>
                    </div>
                    <br>
                    <div class="form-actions">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Modificar</button>
                            <a class="btn btn-primary" href="../../vista/admin/proveedores.php"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
                       </div>
                    </form>
                </div>
               
                </div>
            </div>
        </div> 
        


    </body>
</html>
