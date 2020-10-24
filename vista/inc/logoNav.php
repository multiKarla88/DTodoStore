<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container">
    <!--Logo-->
    <a href="index.php" title="DTodo" class="navbar-brand">
      <img src="img/logo Dtodo.png" class="store-image" alt="De Todo Logo" />
    </a>

    <!--Boton que sera visible en dispositivos mobiles-->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarContainer" aria-controls="navbarContainer" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!--Contenido del nav-->
    <div class="collapse navbar-collapse justify-content-end" id="navbarContainer">

      <!--Formulario de busqueda en dispositivos mobiles-->
      <form id="search_mini_form" class="d-lg-none d-md-block" method="get" action="/mx/search">
        <div class="input-group mb-3">
          <input type="text" value="" name="q" class="form-control form-control-sm" onFocus="javascript:this.value=''" placeholder="Buscar productos" />
          <button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
        </div>
      </form>

      <!--Items de menus para dispositivos mobiles. En este no iran los submenus-->
      <ul id="navbarContainerMobile" class="navbar-nav d-lg-none">

            <!--Inicio-->
            <li class="nav-item  ">
              <a href="#"  title="Inicio" class="level-1 trsn nav-link" >Inicio</a>
            </li>
            
            <!--Moda + icono svg de boostrap-->
            <li class="nav-item">
              <a href="#" class="level-1 trsn nav-link" title="Moda">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-handbag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 1a2 2 0 0 0-2 2v2H5V3a3 3 0 0 1 6 0v2h-1V3a2 2 0 0 0-2-2zM5 5H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11v1.5a.5.5 0 0 1-1 0V5H6v1.5a.5.5 0 0 1-1 0V5z"/>
                </svg> Moda
              </a>
            </li>
            
            <!--Muebles + icono svg de boostrap-->
            <li class="nav-item">
              <a href="#" class="level-1 trsn nav-link" title="Muebles">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                </svg> Muebles
              </a>
            </li>
            
            <!--Hogar + icono svg de boostrap-->
            <li class="nav-item">
              <a href="#" class="level-1 trsn nav-link" title="Hogar">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                </svg> Hogar
              </a>
            </li>
            
            <!--Linea blanca + icono svg de boostrap-->
            <li class="nav-item">
              <a href="#" class="level-1 trsn nav-link" title="Linea blanca">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar2-event" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                </svg> Linea blanca
              </a>
            </li>

            <!--Electrodomesticos + icono svg de boostrap-->
            <li class="nav-item">
              <a href="#" class="level-1 trsn nav-link" title="Electrodomesticos">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-battery-charging" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.5 9.5a1.5 1.5 0 0 0 0-3v3z"/>
                  <path fill-rule="evenodd" d="M9.585 2.568a.5.5 0 0 1 .226.58L8.677 6.832h1.99a.5.5 0 0 1 .364.843l-5.334 5.667a.5.5 0 0 1-.842-.49L5.99 9.167H4a.5.5 0 0 1-.364-.843l5.333-5.667a.5.5 0 0 1 .616-.09z"/>
                  <path fill-rule="evenodd" d="M6.332 4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h2.072l.307-1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h3.391l.941-1zM4.45 6H2v4h1.313a1.5 1.5 0 0 1-.405-2.361L4.45 6zm.976 5l-.308 1H6.96l.21-.224h.001l.73-.776H6.53l-.085.09.028-.09H5.426zm1.354-1H5.733l.257-.833H4a.5.5 0 0 1-.364-.843l.793-.843L5.823 6h1.373L5.157 8.167h1.51a.5.5 0 0 1 .478.647L6.78 10zm.69 0h1.374l1.394-1.482.793-.842a.5.5 0 0 0-.364-.843h-1.99L8.933 6H7.887l-.166.54-.199.646A.5.5 0 0 0 8 7.833h1.51L7.47 10zm.725-5H9.24l.308-1H7.706l-.942 1h1.374l.085-.09-.028.09zm2.4-1l-.308 1H12a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H9.276l-.942 1H12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.405zm-.378 6H12V8.02a1.499 1.499 0 0 1-.241.341L10.217 10zM12 6.646V6h-.646a1.5 1.5 0 0 1 .646.646z"/>
                </svg> Electrodomesticos
              </a>
            </li>

            <!--Tecnologia + icono svg de boostrap-->
            <li class="nav-item">
              <a href="#" class="tlevel-1 trsn nav-link" title="Tecnologia">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
                  <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
                </svg> Tecnologia
              </a>
            </li>

            <!--Belleza + icono svg de boostrap-->
            <li class="nav-item">
              <a href="#" class="trsn nav-link" title="Belleza">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-screwdriver" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
                </svg> Belleza
              </a>
            </li>

            <!--Juguetes + icono svg de boostrap-->
            <li class="nav-item">
              <a href="#" class="trsn nav-link" title="Juguetes">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bicycle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443l-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057L9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
                </svg> Juguetes
              </a>
            </li>
      </ul> 

      <!--Formulario de busqueda para pantallas amplias-->
      <form id="search_mini_form" class="navbar-form float-right form-inline d-none d-lg-flex" method="get" action="/mx/search">
        <input type="text" value="" name="q" class="form-control form-control-sm" onFocus="javascript:this.value=''" placeholder="Buscar productos" />
        <button type="submit" class="btn btn-secondary btn-sm"><i class="fas fa-search"></i></button>
      </form>

      <!--Icono Envios a todo el pais-->
      <ul class="nav navbar-nav float-right nav-top">
        <li >
            <svg width="5em" height="2em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
            <span id="nav-bar-cart"> Envios en todo el pais</span>
        </li>
      </ul>

    </div>
  </div>

</nav>