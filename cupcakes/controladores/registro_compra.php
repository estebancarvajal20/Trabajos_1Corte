<script src="../js/sweetalert2@10.js"></script>
.
<?php
    require "../config/conexion.php";

  
    $gasto = $_POST["gasto"];

if($gasto = 0){
    $sql_insertar = "INSERT INTO venta
( gasto) 
VALUES (now(), '".$gasto."')";

    if($dbh->query($sql_insertar))
    {
         echo "<script>
            Swal.fire({
              title: 'SE REGISTRO EL DINERO DE LA COMPRA DE LOS CONSUMOS.',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '';
              }
            });
          </script>";
    }else{}
}elseif($documento <= 0){
    echo "<script>
            Swal.fire({
              title:'ERROR AL REGISTRAR LA COMPRA. VERIFICA LOS DATOS QUE ESCRIBIO Y VUELVE A REPETIR EL PROCESO',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'error'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '';
              }
            });
          </script>";
}else{
    echo "<script>
            Swal.fire({
              title: 'LA COMPRA DE SU SOAT FUE REGISTRADA CORRECTAMENTE, YA PUEDE PASAR A PREGUNTAR SI ESTA LISTO.',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '';
                }
            });
          </script>";
}
?>