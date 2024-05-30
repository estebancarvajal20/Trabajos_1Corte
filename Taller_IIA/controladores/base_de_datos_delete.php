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

$sql_eliminar = "DELETE FROM ventas WHERE cod='".$cantidad."' ";
    
if($dbh->query($sql_eliminar))
{
    echo "<script>
        Swal.fire({
            title: 'VENTA ELIMINADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../Delete.html';
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
                window.location.href = '../Delete.html';
            }
        });
        </script>";
    }
?>