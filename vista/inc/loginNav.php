<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <!--Los posiciona en la parte derecha del nav-->
  <div class="container">

    <!--Los posiciona en linea horizontal-->
    <div class="collapse navbar-collapse justify-content-end" id="navbarContainer">
      
      <?php 
      if(isset($_SESSION['usuario'])) {
      ?>

      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Lista de deseos (0)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mi cuenta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../controlador/logout.php">Salir</a>
        </li>
      </ul>

      <?php 
      }
      ?>

      <!--Items-->
      <ul class="nav navbar-nav float-right nav-top">

        <!--Carrito-->
        <li >
          <a id="cart-link" href="./carrito.php" class="trsn nav-link" title="Ver/Editar Carro">
            <i class="fas fa-shopping-cart"></i>
            <span id="nav-bar-cart"><span class="cart-size">0</span> Producto(s) | $0</span>
          </a>
        </li>

        <!--Login-->
        <li >
          <?php 
          if(!isset($_SESSION['usuario'])) {
          ?>

          <a id="login-link" class="trsn nav-link" title="Ingresar" href="#login-modal" data-toggle="modal" data-target="#login-modal">
            <i class="fas fa-user"></i>&nbsp;
            <span class="customer-name">Ingresar</span>
          </a>

          <?php 
          } else {
          ?>

          <a class="navbar-text">
            <i class="fas fa-user"> </i>
            <span class="customer-name"><?php echo $_SESSION['usuario'] ?></span>
          </a>

          <?php 
          }
          ?>
        </li>

      </ul>
    </div>
  </div>
</nav>
