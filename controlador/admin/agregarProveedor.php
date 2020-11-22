<?php
include '../../modelo/configServer.php';
include '../../modelo/consulSQL.php';
    include './controlador/securityPanel.php';
     include '../inc/link.php'; 
   
?>
<?php
   
   $nitError =$nombreError = $direccionError= $telefonoError  = $webError = $nit = $nombre = $direccion = $telefono= $web = "";

    if(!empty($_POST)) 
    {
        $nit               = checkInput($_POST['NITProveedor']);
        $nombre               = checkInput($_POST['NombreProveedor']);
        $direccion        = checkInput($_POST['Direccion']);
        $telefono             = checkInput($_POST['Telefono']);
        $web           = checkInput($_POST['PaginaWeb']); 
        
        $isSuccess          = true;
        $isUploadSuccess    = false;
        
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
            $statement = $db->prepare("INSERT INTO `proveedor` (`NITProveedor`, `NombreProveedor`, `Direccion`, `Telefono`, `PaginaWeb`) VALUES (?, ?, ?, ?, ?)");
            $statement->execute(array($nit,$nombre,$direccion,$telefono,$web));
            Database::disconnect();
            header("Location: ../../vista/admin/proveedores.php");
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
       <?php include("head.php")?>
    </head>
    
    <body>
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Agregar Proveedor <span class="glyphicon glyphicon-cutlery"></span></h1>
         <div class="container admin">
            <div class="row">
                <br>
                <form class="form" action="../../controlador/admin/agregarProveedor.php" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="name">NIT:</label>
                        <input type="text" class="form-control" id="NITProveedor" name="NITProveedor" placeholder="NIT" value="<?php echo $nombre;?>">
                        <span class="help-inline"><?php echo $nombreError;?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre:</label>
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
                        <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono" value="<?php echo $direccion;?>">
                        <span class="help-inline"><?php echo $webError;?></span>
                    </div>
                    <div class="form-group">
                      <label for="web">Pagina Web:</label>
                        <input type="text" class="form-control" id="PaginaWeb" name="PaginaWeb" placeholder="Pagina web" value="<?php echo $direccion;?>">
                        <span class="help-inline"><?php echo $webError;?></span>
                    </div>
                    <br>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Agregar</button>
                        <a class="btn btn-primary" href="../../vista/admin/proveedores.php"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
                   </div>
                </form>
            </div>
        </div>   
    </body>
</html>