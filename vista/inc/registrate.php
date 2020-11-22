<section class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">Registro de Cliente</h2>
          <form action="../controlador/registroUsuario.php" method="POST" oninput='up2.setCustomValidity(up2.value != up.value ? "Contraseñas no coinside." : "")'>
            <input type="hidden" name="vista" value="<?php echo $currentView ?>">;
            <div class="form-group row">
              <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
              </div>
            </div>
            <div class="form-group row">
              <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido">
              </div>
            </div>
            <div class="form-group row">
              <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su telefono">
                <script type="text/javascript">
                  $("#telefono").mask("0000-0000");
                </script>
              </div>
            </div>
            <div class="form-group row">
              <label for="nit" class="col-sm-2 col-form-label">NIT</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nit" name="nit" placeholder="Ingrese su NIT">
                <script type="text/javascript">
                  $("#nit").mask("0000-000000-000-0");
                </script>
              </div>
            </div>
            <div class="form-group row">
              <label for="correo" class="col-sm-2 col-form-label">Correo</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingrese su correo">
              </div>
            </div>
            <div class="form-group row">
              <label for="password1" class="col-sm-2 col-form-label">Contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password1" name="password1" placeholder="Ingrese una contraseña">
              </div>
            </div>
            <div class="form-group row">
              <label for="password2" class="col-sm-2 col-form-label">Confirmar contraseña</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirme la contraseña">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
        </div>
      </div>
    </section>