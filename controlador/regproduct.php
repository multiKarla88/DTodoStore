<html>
    <head>
        <title>Admin</title>
      <meta charset="UTF-8">
        <meta http-equiv="Refresh" content="12;url=./configAdmin.php">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/media.css">
        <link rel="Shortcut Icon" type="image/x-icon" href="./img/icons/logo.ico" />
        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/autohidingnavbar.min.js"></script> 
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
        <?php
        session_start();
        include '../modelo/configServer.php';
        include '../modelo/consulSQL.php';
        
        $codeProd= $_POST['prod-codigo'];//codigo
        $nameProd= $_POST['prod-name'];//nombre
        $desProd= $_POST['prod-des'];//descripcion
        $priceProd= $_POST['prod-price'];//precio
        $modelProd= $_POST['prod-model'];//modelo
        $marcaProd= $_POST['prod-marca'];//idmarca
        $estadoProd= $_POST['prod-estado'];//estado
        $stockProd= $_POST['prod-stock'];//stock
        $codePProd= $_POST['prod-codigoP'];//idproveedor
        $catProd= $_POST['prod-categoria'];//idcategoria
        //$adminProd= $_POST['admin-name'];

        if(!$codeProd=="" && !$nameProd=="" && !$desProd=="" && !$priceProd=="" && !$modelProd==""  && !$stockProd=="" && !$_FILES['img']['name']=="" && !$estadoProd=="" && !$codePProd==""&& !$marcaProd==""&& !$catProd==""){
            $verificar=  ejecutarSQL::consultar("select * from producto where CodigoProd='".$codeProd."'");
            $verificaltotal = mysqli_num_rows($verificar);
            if($verificaltotal<=0){
                if(move_uploaded_file($_FILES['img']['tmp_name'],"../vista/img/img-products/".$_FILES['img']['name'])){
                    if(consultasSQL::InsertSQL("producto", "CodigoProd, NombreProd, descripcion, Precio, Modelo, Stock, Imagen, estado, idProveedor, idMarca, idCategoria", "'$codeProd','$nameProd','$desProd','$priceProd', '$modelProd','$stockProd','".$_FILES['img']['name']."','$estadoProd','$codePProd','$marcaProd','$catProd'")){
                       echo '
                            <img src="../vista/img/correctofull.png" class="center-all-contens">
                            <br>
                            <h3>El producto se añadio a la tienda con éxito</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../vista/configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                            </p>';
                   }else{
                      echo '
                            <img src="../vista/img/incorrectofull.png" class="center-all-contens">
                            <br>
                            <h3>Ha ocurrido un error. Por favor intente nuevamente</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../vista/configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                            </p>';
                   }   
                }else{
                    echo ' 
                        <img src="../vista/img/incorrectofull.png" class="center-all-contens">
                         <br>
                         <h3>Ha ocurrido un error al cargar la imagen</h3>
                         <p class="lead text-cente">
                             La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                             <a href="../vista/configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                         </p>';
                }
            }else{
                echo '
                    <img src="../vista/img/incorrectofull.png" class="center-all-contens">
                    <br>
                    <h3>El Código de producto ya esta registrado.<br>Por favor ingrese otro código de producto</h3>
                    <p class="lead text-cente">
                        La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                        <a href="../vista/configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                    </p>';
            }
        }else {
            echo '
                <img src="../vista/img/incorrectofull.png" class="center-all-contens">
                <br>
                <h3>Error los campos no deben de estar vacíos</h3>
                <p class="lead text-cente">
                    La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                    <a href="../vista/configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                </p>';
        }
        ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>