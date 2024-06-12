<script src="../js/sweetalert2@11.js"></script>
.

<?php
    require "../config/conexion.php";

    $nombre = $_POST["text_nombre"];
    $documento = $_POST["cc_documento"];
    $rol = $_POST["id_rol"];
    $participacion = $_POST["participacion"];

    $sql_insertar = "INSERT INTO registro_carrera
        (fecha_sys, nombre, documento, id_rol, participacion) 
    VALUES (now(), '".$nombre."', '".$documento."', '".$rol."','".$participacion."')";

    if($dbh->query($sql_insertar)) {
        echo "<script>
        Swal.fire({
            title: 'INSCRIPCION REGISTRADA CORRECTAMENTE',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../insertar.php';
            }
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'Oops...',
            text: 'ERROR AL REGISTRAR LOS DATOS.',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../insertar.php';
            }
        });
        </script>";
    }
?>