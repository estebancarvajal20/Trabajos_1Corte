<script src="../js/sweetalert2@10.js"></script>
<?php
    require "../config/conexion.php";

    $cod = $_POST["cod"];
    $nueva_cantidad = $_POST["canti"];

    $sql_actualizar = "UPDATE ventas SET cantidad='$nueva_cantidad' WHERE cod='".$cod."'";

    if($dbh->query($sql_actualizar))
    {
         echo "<script>
            Swal.fire({
              title: 'ACTUALIZACION REALIZADA CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/taller1cort2/editar';
              }
            });
          </script>";
    }else{
         echo "<script>
            Swal.fire({
              title: 'ACTUALIZACION REALIZADA CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/taller1cort2/editar';
              }
            });
          </script>";
    }
?>