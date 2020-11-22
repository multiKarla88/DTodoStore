<?php
  session_start();
  $currentView = "../index.php"
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
    <section class="container">
  
      <!-- Seccion de productos -->
      <div class="row">

        <div class="col-12">
          <h2 class="page-header">Productos Destacados</h2>
        </div>

        <!-- Productos destacados -->

        <!-- Primer producto -->
        <div class="col-md-3 col-6 product-block">
              
          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1439529365" 
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1439529365 1x, 
                https://cdnx.jumpseller.com/bootstrap/image/429444/resize/510/640?1439529365 2x" 
              alt="Wacom Bamboo Tablet" />
          </a>

          <div class="caption">
            <h3><a href="#">Wacom Bamboo Tablet</a></h3>
            <div class="price-mob">$100.000</div>
            <div class="clearfix"></div>
          </div>

        </div>

        <!-- Segundo producto -->  
        <div class="col-md-3 col-6 product-block">

          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3" 
              src="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548" 
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548 1x,
                https://cdnx.jumpseller.com/bootstrap/image/429445/resize/510/640?1439529548 2x" 
              alt="Smartphone MTK6572 " />
          </a>

          <div class="caption">
            <h3><a href="#">Smartphone MTK6572 </a></h3>
            <div class="price-mob">$500.000</div>
            <div class="clearfix"></div>
          </div>

        </div>

        <div class="col-md-3 col-6 product-block">

          <a href="/mx/imac-desktop-computer">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839 1x,
                https://cdnx.jumpseller.com/bootstrap/image/429446/resize/510/640?1439529839 2x"
              alt="iMac Desktop Computer" />
          </a>

          <div class="caption">
            <h3><a href="#">iMac Desktop Computer</a></h3>
            <div class="price-mob">$1.200.000</div>
            <div class="clearfix"></div>
          </div>

        </div>
        
        <div class="col-md-3 col-6 product-block">

          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709 1x,
                https://cdnx.jumpseller.com/bootstrap/image/429450/resize/510/640?1439530709 2x"
              alt="DualShock Controller for PlayStation 4" />
          </a>

          <div class="caption">
            <h3><a href="#">DualShock Controller for PlayStation 4</a></h3>
            <div class="price-mob">$20.000</div>
            <div class="clearfix"></div>
          </div>

        </div>

      </div><!-- /.row -->

      <!-- Seccion de Productos -->
      <div class="row">

        <div class="col-12">
          <h2 class="page-header">Últimos Productos</h2>
        </div>

        <!-- Featured Products -->
        <div class="col-md-3 col-6 product-block">
          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/6221140/resize/255/320?1564681025"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/6221140/resize/255/320?1564681025 1x,
                https://cdnx.jumpseller.com/bootstrap/image/6221140/resize/510/640?1564681025 2x"
              alt="Camara Nikon Reflex D7200 + Lente 18-140" />
          </a>

          <div class="caption">
            <h3><a href="#">Camara Nikon Reflex D7200 + Lente 18-140</a></h3>
            <div class="price-mob">$1.290.000</div>
            <div class="clearfix"></div>
          </div>

        </div>

        <div class="col-md-3 col-6 product-block">

          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/6221126/resize/255/320?1564681003"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/6221126/resize/255/320?1564681003 1x,
                https://cdnx.jumpseller.com/bootstrap/image/6221126/resize/510/640?1564681003 2x"
              alt="Notebook Asus X507UA Intel Core i3 4GB RAM " />
          </a>

          <div class="caption">
            <h3><a href="#">Notebook Asus X507UA Intel Core i3 4GB RAM </a></h3>
            <div class="price-mob">$900.000</div>
            <div class="clearfix"></div>
          </div>

        </div>

        <div class="col-md-3 col-6 product-block">

          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/429451/resize/255/320?1439530880"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429451/resize/255/320?1439530880 1x,
                https://cdnx.jumpseller.com/bootstrap/image/429451/resize/510/640?1439530880 2x"
              alt="Dualshock Controller for PlayStation 4" />
          </a>

          <div class="caption">
            <h3><a href="#">Dualshock Controller for PlayStation 4</a></h3>
            <div class="price-mob">
              <span class="product-block-not-available">Agotado</span>
            </div>
            <div class="clearfix"></div>
          </div>

        </div>

        <div class="col-md-3 col-6 product-block">

          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/429448/resize/255/320?1439530289"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429448/resize/255/320?1439530289 1x,
                https://cdnx.jumpseller.com/bootstrap/image/429448/resize/510/640?1439530289 2x"
              alt="Asus Transformer Pad Tablet" />
          </a>

          <div class="caption">
            <h3><a href="#">Asus Transformer Pad Tablet</a></h3>
            <div class="price-mob">$200.000</div>
            <div class="clearfix"></div>
          </div>

        </div>

        <div class="col-md-3 col-6 product-block">

          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429450/resize/255/320?1439530709 1x,
                https://cdnx.jumpseller.com/bootstrap/image/429450/resize/510/640?1439530709 2x"
              alt="DualShock Controller for PlayStation 4" />
          </a>

          <div class="caption">
            <h3><a href="#">DualShock Controller for PlayStation 4</a></h3>
            <div class="price-mob">$20.000</div>
            <div class="clearfix"></div>
          </div>

        </div>
  
        <div class="col-md-3 col-6 product-block">

          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429446/resize/255/320?1439529839 1x,
                https://cdnx.jumpseller.com/bootstrap/image/429446/resize/510/640?1439529839 2x"
              alt="iMac Desktop Computer" />
          </a>

          <div class="caption">
            <h3><a href="#">iMac Desktop Computer</a></h3>
            <div class="price-mob">$1.200.000</div>
            <div class="clearfix"></div>
          </div>

        </div>
  
        <div class="col-md-3 col-6 product-block">
          
          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429445/resize/255/320?1439529548 1x,
                https://cdnx.jumpseller.com/bootstrap/image/429445/resize/510/640?1439529548 2x"
              alt="Smartphone MTK6572 " />
          </a>

          <div class="caption">
            <h3><a href="#">Smartphone MTK6572 </a></h3>
            <div class="price-mob">$500.000</div>
            <div class="clearfix"></div>
          </div>

        </div>

        <div class="col-md-3 col-6 product-block">

          <a href="#">
            <img class="img-fluid img-portfolio img-hover mb-3"
              src="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1439529365"
              srcset="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/255/320?1439529365 1x,
                https://cdnx.jumpseller.com/bootstrap/image/429444/resize/510/640?1439529365 2x"
              alt="Wacom Bamboo Tablet" />
          </a>

          <div class="caption">
            <h3><a href="#">Wacom Bamboo Tablet</a></h3>
            <div class="price-mob">$100.000</div>
            <div class="clearfix"></div>
          </div>

        </div>

      </div><!-- /.row -->

    </section>

    <!--****** Footer ******-->
    <?php include './inc/footer.php' ?>

  </body>

</html>