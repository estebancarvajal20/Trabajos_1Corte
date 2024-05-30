<script src="../js/sweetalert2@10.js"></script>
.
<?php
    require "../config/conexion.php";

   
    $cantidad = $_POST["cantidad"];

if($cantidad > 0 and $cantidad <= 230){
    $sql_insertar = "INSERT INTO ventas 
(fecha, cantidad) 
VALUES (now(), '".$cantidad."')";

    if($dbh->query($sql_insertar))
    {
         echo "<script>
            Swal.fire({
              title: 'VENTA REGISTRADA CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/taller1cort2/venta';
              }
            });
          </script>";
    }else{}
}elseif($cantidad <= 0){
    echo "<script>
            Swal.fire({
              title:'ERROR AL REGISTRAR LA VENTA. TIENE QUE INGRESAR UN VALIDO A LA CANTIDAD DEL PRODUCTO QUE DESEA COMPRAR',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/taller1cort2/venta';
              }
            });
          </script>";
}else{
    echo "<script>
            Swal.fire({
              title: 'ERROR AL REGISTRAR LA VENTA, EL VALOR QUE INGRESO SUPERA EL LIMITE.',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/taller1cort2/venta';
                }
            });
          </script>";
}
?>