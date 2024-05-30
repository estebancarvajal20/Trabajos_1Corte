<script src="../js/sweetalert2@10.js"></script>
.
<?php
    require "../config/conexion.php";

    $matricula = $_POST["matricula"];
    $vehiculo = $_POST["tipo"];

    $sql_actualizar = "UPDATE ventsoat SET vehiculo='".$vehiculo."' WHERE matricula='".$matricula."'";

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