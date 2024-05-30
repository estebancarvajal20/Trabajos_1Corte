<script src="../js/sweetalert2@11.js"></script>
<style>
        body {
            background-color: grey;
            color: grey;
        }
</style>.

<?php
require "../config/conexion.php";

$cod = $_POST["cod"];
$nueva_cantidad = $_POST["cantidad"];

if($nueva_cantidad > 0 and $nueva_cantidad <= 230){
    $sql_actualizar = "UPDATE ventas SET cantidad='".$nueva_cantidad."' WHERE cod='".$cod."' ";

    if($dbh->query($sql_actualizar)) {
        echo "<script>
        Swal.fire({
            title: 'NUEVO VALOR DE VENTA REGISTRADO CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Update.html';
            }
        });
        </script>";
    }else{}
}elseif($cantidad <= 0){
    echo "<script>
            Swal.fire({
                title:'ERROR AL ACTUALIZAR.',
                text: 'Debe ingresar un valor valido en la cantidad de venta.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Update.html';
                }
            });
        </script>";
}else{
    echo "<script>
            Swal.fire({
                title: 'ERROR AL ACTUALIZAR.',
                text: 'El valor que ingreso supera el limite.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Update.html';
                }
            });
        </script>";
    }
?>