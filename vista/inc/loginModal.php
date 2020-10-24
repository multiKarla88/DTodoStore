<!-- Login Modal-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="../controlador/login.php" method="post" role="form" data-form="login" class="needs-validation" novalidate>
        <input type="hidden" name="vista" value="<?php echo $currentView ?>">;
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Ingresar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="d-flex flex-column text-center">
            <div class="form-group">
              <input id="email" type="email" name="email" class="form-control" placeholder="Correo Electrónico..." aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback text-left">Ingresar correo electrónico</div>
            </div>
            <div class="form-group">
              <input id="password" type="password" name="password" class="form-control" placeholder="Contraseña..." aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback text-left">Ingresar contraseña</div>
            </div>
          </div>
          <div>
            <a href="recuperar.php" class="text-info">Recuperar Contraseña</a>
          </div>
          <div>
            <span>
              ¿Aún no estás registrado?
              <a href="registrate.php" class="text-info"> Regístrate</a>.
            </span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info">Ingresar</button>
        </div>
      </div>
    </form>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
        })();
    </script>
  </div>
</div>