<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <!--Los posiciona en la parte derecha del nav-->
  <div class="container">

    <!--Los posiciona en linea horizontal-->
    <div class="collapse navbar-collapse justify-content-end" id="navbarContainer">

      <!--Items-->
      <ul class="nav navbar-nav float-right nav-top">

        <!--Login-->
        <?php 
        if(isset($_SESSION['usuario'])) {
        ?>

        <li>
          <a class="navbar-text">
            <i class="fas fa-user"> </i>
            <span class="customer-name"><?php echo $_SESSION['usuario'] ?></span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="navbar-text" href="../../controlador/logout.php">Salir</a>
        </li>

        <?php 
        }
        ?>

      </ul>
    </div>
  </div>
</nav>
