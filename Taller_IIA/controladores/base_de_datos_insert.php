<script src="../js/sweetalert2@11.js"></script>
<style>
        body {
            background-color: grey;
            color: grey;
        }
</style>.

<?php
require "../config/conexion.php";

$cantidad = $_POST["cantidad"];

if($cantidad > 0 and $cantidad <= 230){
    $sql_insertar = "INSERT INTO ventas 
        (fecha_sys, cantidad) 
    VALUES (now(), '".$cantidad."')";

    if($dbh->query($sql_insertar)){
        echo "<script>
            Swal.fire({
                title: 'VENTA REGISTRADA CORRECTAMENTE',
                text: '¡Gracias por su comprar!',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Insert.html';
                }
            });
        </script>";
    }else{
        echo "<script>
            Swal.fire({
                title:'ERROR AL REGISTRAR.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Insert.html';
                }
            });
        </script>";
    }
}elseif($cantidad <= 0){
    echo "<script>
            Swal.fire({
                title:'ERROR AL REGISTRAR.',
                text: 'Debe ingresar un valor valido en la cantidad de venta.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Insert.html';
                }
            });
        </script>";
}else{
    echo "<script>
            Swal.fire({
                title: 'ERROR AL REGISTRAR.',
                text: 'El valor que ingreso supera el limite.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Insert.html';
                }
            });
        </script>";
    }
?>