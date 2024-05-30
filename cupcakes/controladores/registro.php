<script src="../js/sweetalert2@10.js"></script>
.
<?php
    require "../config/conexion.php";

   
    $cantidad = $_POST["cantidad"];
    $sub_total = $_POST["sub_total"];
    $total = $_POST["total"];

if($documento >= 0){
    $sql_insertar = "INSERT INTO cupcakes
(fecha_sys, cantidad, sub_total, total) 
VALUES (now(), '".$cantidad."', '".$sub_total."', '".$total."')";

    if($dbh->query($sql_insertar))
    {
         echo "<script>
            Swal.fire({
              title: 'LA COMPRA T FUE REGISTRADA CORRECTAMENTE.',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/preparcial/comprar';
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
                window.location.href = 'http://localhost/preparcial/comprar';
              }
            });
          </script>";
}else{
    echo "<script>
            Swal.fire({
              title: 'LA COMPRA  FUE REGISTRADA CORRECTAMENTE.',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/preparcial/comprar';
                }
            });
          </script>";
}
?>