
<script src="../js/sweetalert2@10.js"></script>

.

<?php
    require "../config/conexion.php";

   
    $cantidad = $_POST["cantidad"];

    $sql_eliminar = "DELETE FROM ventas WHERE cod=".$cantidad." ";
     
    if($dbh->query($sql_eliminar))
    {
        echo "<script>
            Swal.fire({
              title: 'DATOS ELIMINADOS CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/taller1cort2/eliminar';
              }
            });
          </script>";
    }else{
        echo "<script>
            Swal.fire({
              title: 'ERROR AL ELIMINAR LA VENTA',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/taller1cort2/eliminar';
              }
            });
          </script>";
}
?>