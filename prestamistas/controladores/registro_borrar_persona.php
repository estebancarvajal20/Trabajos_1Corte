
<script src="../js/sweetalert2@10.js"></script>

<?php
    require "../config/conexion.php";

   
    $documento = $_POST["documento"];

    $sql_eliminar = "DELETE FROM movistar2 WHERE cod=".$documento." ";
     
    if($dbh->query($sql_eliminar))
    {
        echo "<script>
            Swal.fire({
              title: 'ELIMINADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '../borrar_registro.html';
              }
            });
          </script>";
}else{
    echo "<script>
            Swal.fire({
              title: 'Error eliminando',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '../borrar_persona.html';
              }
            });
          </script>";
}
?>