<?php
include '../../modelo/configServer.php';
include '../../modelo/consulSQL.php';
    include './controlador/securityPanel.php';
     include '../inc/link.php'; 
   
?>
<?php
    
 
    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }

    if(!empty($_POST)) 
    {
        $id = checkInput($_POST['id']);
        $db = Database::connect();
        $statement = $db->prepare("DELETE FROM proveedor WHERE idProveedor = ?");
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: ../../vista/admin/proveedores.php"); 
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
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Borrar proveedor <span class="glyphicon glyphicon-cutlery"></span></h1>
         <div class="container admin">
            <div class="row">
                
                <br>
                <form class="form" action="../../controlador/admin/borrarProveedor.php" role="form" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
                    <p class="alert alert-warning">Estas seguro que deseas eliminar este elemento?</p>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-warning">Aceptar</button>
                      <a class="btn btn-default" href="index.php">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>   
    </body>
</html>
