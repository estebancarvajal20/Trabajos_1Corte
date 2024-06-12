<script src="../js/sweetalert2@11.js"></script>.
<?php
require "../config/conexion.php";

$nm = $_POST["name"];
$doc = $_POST["document"];
$rol = $_POST["rol"];
$part = $_POST["carrera"];

$sql = "UPDATE registro_carrera
        SET nombre = '".$nm."', documento ='".$doc."', id_rol='".$rol."', participacion='".$part."'
        WHERE documento = '".$doc."'";

if($dbh->query($sql)) {
    echo "<script>
    Swal.fire({
        title: 'SU REGISTRO FUE ACTUALIZADO CORRECTAMENTE.',
        icon: 'success',

        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../actualizar.php';
        }
    });
    </script>";
} else {
    echo "<script>
    Swal.fire({
        title: 'Oops...',
        text: 'ERROR, VERIFICA BIEN LOS PASOS.',
        icon: 'error',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '../actualizar.php';
        }
    });
    </script>";
}
?>