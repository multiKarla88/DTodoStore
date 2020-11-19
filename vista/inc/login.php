<?php include '../inc/link.php'; ?>

<!-- Login Modal-->
<section class="container">
          <h2 class="page-header">Ingresar</h2>
          
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
        <div >
          <button type="submit" class="btn btn-primary">Ingresar</button>
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
</section>