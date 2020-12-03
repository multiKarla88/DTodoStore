<?php 
require('consulSQL.php');


        $query = "INSERT INTO categoria(CodigoCat, Nombre, Descripcion, Estado) VALUES ('$cod', '$nombre', '$descripcion')";
        $result = mysqli_query($con, $query);

        if(!$result) {
            die("Consulta fallida");
          }

?>
