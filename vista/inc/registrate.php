<?php include '../inc/link.php'; ?>
<section class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">Registro de Cliente</h2>
          <form action="#" method=post oninput='up2.setCustomValidity(up2.value != up.value ? "Contraseñas no coinside." : "")'>
            <div class="form-group row">
              <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
              </div>
            </div>
            <div class="form-group row">
              <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
              </div>
            </div>
            <div class="form-group row">
              <label for="nit" class="col-sm-2 col-form-label">NIT</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nit" placeholder="Ingrese su NIT">
                <script type="text/javascript">
                  $("#nit").mask("0000-000000-000-0");
                </script>
              </div>
            </div>
            <div class="form-group row">
              <label for="correo" class="col-sm-2 col-form-label">Correo</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Ingrese su correo">
              </div>
            </div>
            <div class="form-group row">
              <label for="password1" class="col-sm-2 col-form-label">Contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password1" placeholder="Ingrese una contraseña">
              </div>
            </div>
            <div class="form-group row">
              <label for="password2" class="col-sm-2 col-form-label">Confirmar contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password2" placeholder="Confirme la contraseña">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
        </div>
      </div>
    </section>