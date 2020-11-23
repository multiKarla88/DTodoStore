<?php
  session_start();
  $currentView = "../index.php"
?>
<?php
include '../modelo/configServer.php';
include '../modelo/consulSQL.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="es-sv"> 

  <!-- ***** Head ******-->
  <head>
    <title>DTodo Online</title>
    
    <!--Se define codificado utf-8 y se especifica la escala para dispositivos mobiles-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include './inc/link.php' ?>
  </head>

  <body>

    <!-- ***** Navegacion / Nav ******-->
    <?php include './inc/header.php' ?>

    <!-- Contenido Principal. Este se pudiera generar dinamicamente-->

    <!-- Carousel -->
    <section id="carousel-home">

      <!-- Agrega sliders al carousel -->
      <div class="home_slider owl-carousel">

        <!-- Item 1 -->
        <div class="item" style="background-image:url('https://assets.jumpseller.com/store/bootstrap/themes/299408/slider-demo.jpg?1596826367')">
          <a href="#">
          <div class="layer"></div>
          <div class="carousel-info">
            <div class="carousel-info-inner">
              <h2>Bienvenido a D-Todo Almacenes</h2>
              <a href="#" class="btn btn-primary" title="Mas informacion">Mas informacion</a>
            </div>
          </div>
          </a>
        </div>

        <!-- Item 2 -->
        <div class="item" style="background-image:url('https://assets.jumpseller.com/store/bootstrap/themes/299408/slider-demo-2.jpg?1596826367')">
          <a href="#">
          <div class="layer"></div>
          <div class="carousel-info">
            <div class="carousel-info-inner">
              <h2>Bienvenido a D-Todo Almacenes</h2>
              <a href="#" class="btn btn-primary" title="Mas informacion">Mas informacion</a>
            </div>
          </div>
          </a>
        </div>

        <!-- Pueden incluirse tantos items como se deseen-->

      </div>
    </section>

    <!-- Script para agregar y manipular el Carousel usando JQuery. Se pueden cambiar los tiempos y mas-->
    <script src="js/agregarcarousel.js"></script>

    <!-- Contenido de la pagina -->
    <section id="prove-product-cat-config">
        <div class="container">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="nav-item"><a class="nav-link" href="#Oferta" role="tab" data-toggle="tab">Productos en Ofertas</a></li>
              <li role="presentation" class="nav-item"><a class="nav-link" href="#Nuevo" role="tab" data-toggle="tab">Productos Nuevos</a></li>
              <li role="presentation" class="nav-item"><a class="nav-link" href="#Destacados" role="tab" data-toggle="tab">Productos Destacados</a></li>
            </ul>
            <div class="tab-content">
                <!--==============================Panel ofertas===============================-->
                <div role="tabpanel" class="tab-pane fade in active" id="Oferta">
               
               

               <div class="row">

    <?php
    
    $consulta=  ejecutarSQL::consultar("select * from producto where estado='Oferta' and Stock > 0");
    $totalproductos = mysqli_num_rows($consulta);
    if($totalproductos>0){
        while($fila=mysqli_fetch_array($consulta)){
            echo '
           
           <div class="card" style="width: 18rem;">
                  <img class="img-fluid img-portfolio img-hover mb-3" src="img/img-products/'.$fila['Imagen'].'">
                  
                  <div class="card-body">
                    <p class="card-text">'.$fila['NombreProd'].'</p>
                    <div class="price-mob">$'.$fila['Precio'].'</div>
                    </div>
                    <div class="card-body">
                        <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                        <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                    </div>
            </div>
                  
                
                
            ';
        }   
    }else{
        echo '<h2>Categoria sin productos</h2>';
    } 

        ?>

           </div>
    

                </div><!--fin-->

                <!--==============================Panel nuevos===============================-->
                <div role="tabpanel" class="tab-pane fade in active" id="Nuevo">

                <div class="row">

<?php

$consulta=  ejecutarSQL::consultar("select * from producto where estado='Nuevo' and Stock > 0");
$totalproductos = mysqli_num_rows($consulta);
if($totalproductos>0){
    while($fila=mysqli_fetch_array($consulta)){
        echo '
       
       <div class="card" style="width: 18rem;">
              <img class="img-fluid img-portfolio img-hover mb-3" src="img/img-products/'.$fila['Imagen'].'">
              
              <div class="card-body">
                <p class="card-text">'.$fila['NombreProd'].'</p>
                <div class="price-mob">$'.$fila['Precio'].'</div>
                </div>
                <div class="card-body">
                    <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                    <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                </div>
        </div>
              
            
            
        ';
    }   
}else{
    echo '<h2>Categoria sin productos</h2>';
} 

    ?>

       </div>

                </div><!--fin-->

                <!--==============================Panel Destacados===============================-->
                <div role="tabpanel" class="tab-pane fade in active" id="Destacados">

                <div class="row">

<?php

$consulta=  ejecutarSQL::consultar("select * from producto where estado='Destacado' and Stock > 0");
$totalproductos = mysqli_num_rows($consulta);
if($totalproductos>0){
    while($fila=mysqli_fetch_array($consulta)){
        echo '
       
       <div class="card" style="width: 18rem;">
              <img class="img-fluid img-portfolio img-hover mb-3" src="img/img-products/'.$fila['Imagen'].'">
              
              <div class="card-body">
                <p class="card-text">'.$fila['NombreProd'].'</p>
                <div class="price-mob">$'.$fila['Precio'].'</div>
                </div>
                <div class="card-body">
                    <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                    <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                </div>
        </div>
              
            
            
        ';
    }   
}else{
    echo '<h2>Categoria sin productos</h2>';
} 

    ?>

       </div>

                </div><!--fin-->


                </div>
                </div>
    </section>














    <!--****** Footer ******-->
    <?php include './inc/footer.php' ?>

  </body>

</html>