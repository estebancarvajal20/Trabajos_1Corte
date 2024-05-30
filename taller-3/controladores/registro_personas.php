<script src="../js/sweetalert2@11.js"></script>
.
<?php
    require "../config/conexion.php";

   
    $nombre = $_POST["dinero"];
    $fecha_nacimiento = $_POST["dinero"];
    $celular = $_POST[""];
    

if($dinero > 0){
  $sql_insertar="INSERT INTO registropersonas (fecha, dinero) VALUES (now(), '".$dinero."')";
    if($dbh->query($sql_insertar)){
          echo "<script>
            Swal.fire({
              title: 'Su gasto fue registrada.',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '../venta_cupcakes.html';
              }
            });
          </script>";
}elseif($dinero <= 0){
    echo "<script>
            Swal.fire({
              title:'ERROR AL REGISTRAR, VERIFICA LOS DATOS QUE ESCRIBIO Y VUELVE A REPETIR EL PROCESO.',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'error'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/parcial-2';
              }
            });
          </script>";
}
}               
?>