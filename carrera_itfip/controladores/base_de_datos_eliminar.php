<script src="../js/sweetalert2@11.js"></script>
.
<?php

require "../config/conexion.php";

$codigo = $_POST["codigo"];

$sql_eliminar = "DELETE FROM registro_carrera
        WHERE cod='".$codigo."'";

if($dbh->query($sql_eliminar)) {
    echo "<script>
        Swal.fire({
            title: 'REGISTRO ELIMINADO',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../eliminar.html';
            }
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'Oops...',
            text: 'ERROR AL ELIMINAR.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../eliminar.html';
            }
        });
        </script>";
    }
?>