<?php
  session_start();
  $currentView = "carrito.php"
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
          <h2 class="page-header">Proceder al Pago</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 links wrapper">
          <div class="page-header " >Direccion</div>
          <?php
include '../modelo/configServer.php';
include '../modelo/consulSQL.php';
    include './controlador/securityPanel.php';
     include './inc/link.php'; 
    $depto=@$_REQUEST['departamento'];

    $muni=$SESSION['muni2']=@$_REQUEST['municipio'];

?>
<form name="selectdin">
<label>Direccion:</label>
<input class="form-control" name="direccion" placeholder="Ingrese su direccion"></input>
 <br>
 <label>Pais</label>
 <select class="form-control" name="pais" >
        <?php 
             $pais=  ejecutarSQL::consultar("select * from pais");
                while($paisr=mysqli_fetch_array($pais)){
                echo '<option value="'.$paisr['idPais'].'">'.$paisr['pais'].'</option>';
                $paisnumero=$paisr['idPais'];
                }
        ?>
</select>

<label>Departamento</label>
 <select class="form-control" name="departamento" onchange="this.form.submit()">
        <?php 

             if($paisnumero==1){
                
                if(empty(@$_REQUEST['departamento'])){
                $departamento=  ejecutarSQL::consultar("select * from departamento");
                while($depto=mysqli_fetch_array($departamento)){
                echo '<option value="'.$depto['idDepto'].'">'.$depto['departamento'].'</option>';

                }
               
                }

                else{
                    $departamento=  ejecutarSQL::consultar("select * from departamento where iddepto=".@$_REQUEST['departamento']."");
                    while($depto=mysqli_fetch_array($departamento)){
                    echo '<option value="'.$depto['idDepto'].'">'.$depto['departamento'].'</option>';
      
                }}
                
            }
        ?>
</select>
<label>Municipio</label>
 <select class="form-control" name="municipio">
        <?php 
            

             $municipio=  ejecutarSQL::consultar("select * from municipio where iddepto=".@$_REQUEST['departamento']."");
                while($municpo=mysqli_fetch_array($municipio)){
                echo '<option value="'.$municpo['idMunicipio'].'">'.$municpo['municipio'].'</option>';
                }
            
        ?>
</select>
<button  onclick="window.location.href='#'" class="btn btn-primary">Guardar</button>
</form>

          </div>

          <div class="col-md-6 links wrapper">
          <div class="page-header " >Cuenta</div>
               <ul>
                  <li>Articulos</li>
                  <li>Envio</li>
                  <li>Descuento</li>
                  <li class="page-header " ></li>
                  <li >Total a pagar:</li>
               </ul>

          <button  onclick="window.location.href='./pagar.php'" class="btn btn-primary btn-lg btn-block">Pagar</button>
        
          </div>
      </div>
    </section>

    <!--****** Footer ******-->
    <?php include './inc/footer.php'; ?>

  </body>
</html>