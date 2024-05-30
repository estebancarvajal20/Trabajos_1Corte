<script src="../js/sweetalert2@11.js"></script>
<style>
        body {
            color: #999999;
        }
</style>.

<?php
    require "../config/conexion.php";

    $code = $_POST["code"];

    $sql_eliminar_venta = "DELETE FROM cervezas_venta WHERE cod='".$code."' ";

    if($dbh->query($sql_eliminar_venta)){
        echo "<script>
        Swal.fire({
            title: 'LA VENTA HA SIDO BORRADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Eliminar_Venta.html';
            }
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'Oops...',
            text: 'ERROR AL BORRAR LA VENTA.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Eliminar_Venta.html';
            }
        });
        </script>";
    }
?>