<?php
  session_start();
  $currentView = "../admin/ordenes.php"
?>
<!DOCTYPE html>
<html class="no-js" lang="es-sv"> 

  <!-- ***** Head ******-->
  <head>
    <title>DTodo Online</title>
    
    <!--Se define codificado utf-8 y se especifica la escala para dispositivos mobiles-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php include '../inc/link.php'; ?>
    <link rel="stylesheet" href="../css/estilo.css">

    <script type="text/javascript">
      cargarDatos = function(){
        $.ajax({ url: "../../controlador/admin/ordenes.php",
          context: document.body,
          success: function(data) {
            let dataTable = "<tr><td>No hay datos</td></tr>";
            if (data) {
              dataTable = "";
              let dd = JSON.parse(data);
              dataTable = dd.map(function(row) {
                let dataRow = "<tr>";
                dataRow += "<td>" + row.idOrden + "</td>";
                dataRow += "<td>" + row.NombreCompleto + "</td>";
                dataRow += "<td>" + row.monto + "</td>";
                dataRow += "<td>" + row.fechaOrden + "</td>";

                let estado = "<td><form action='' method='post'>";
                estado += "<select class='changeStatus' name='changeStatus' onchange='actualzarEstado(this, " + row.idOrden + ");'>";
                estado += "<option value='pendiente' ";
                estado += (row.estadoOrden === "pendiente") ? "selected>pendiente</option>" : ">pendiente</option>";
                estado += "<option value='enviado' ";
                estado += (row.estadoOrden === "enviado") ? "selected >enviado</option>" : ">enviado</option>";
                estado += "<option value='entregado' ";
                estado += (row.estadoOrden === "entregado") ? "selected >entregado</option>" : ">entregado</option>";
                estado += "</select>";
                estado += "</form></td>";

                dataRow += estado;
                dataRow += "<td>Acciones</td>";
                dataRow += "</tr>";
                return dataRow;
              });
            }
            $('#ordenes').html(dataTable);
          }});
      }

      actualzarEstado = function(elemento, idOrden){
        $.ajax({
          type: 'POST',
          url: '../../controlador/admin/ordenActualizarEstado.php',
          data: {'estado':  elemento.selectedOptions[0].value, 'idOrden': idOrden},
          dataType: 'html',
          success: cargarDatos
        });
      }
      
      $(document).ready(function(){
        cargarDatos();
      });
    </script>
  </head>

  <body>

    <!-- ***** Navegacion / Nav ******-->
    <?php include '../inc/admin/headerAdmin.php'; ?>

    <!-- Contenido de la pagina -->
    <section class="container">
      <div class="row">
        <div class="col-12">

          <div class="user-wrapper">

            <!--Contenido del usuario-->
            <div class="user-content">
              <h2 class="page-header">Ordenes</h2>

              <!-- TABLA DE BOOTSTRAP -->
              <table class="table">
                <thead class="table-primary">
                    <tr>
                    <th scope="col">Id de Orden</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody id="ordenes"></tbody>
              </table>


            </div>

          </div>  
        </div>
      </div>


    </section>

    <!--****** Footer ******-->
    <?php include '../inc/admin/footerAdmin.php'; ?>

  </body>
</html>