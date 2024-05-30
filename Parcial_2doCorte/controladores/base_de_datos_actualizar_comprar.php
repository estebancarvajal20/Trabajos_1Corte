<script src="../js/sweetalert2@11.js"></script>
.

<?php
    require "../config/conexion.php";

    $code = $_POST["code"];
    $cantidad_cervezas = $_POST["cantidad_cervezas"];

    $total = $cantidad_cervezas * 3000;

    $sql_actualizar_compra = "UPDATE cervezas_compra SET cantidad='".$cantidad_cervezas."', valor='".$total."' WHERE cod='".$code."' ";

    if($total > 0){
        if($dbh->query($sql_actualizar_compra)) {
            echo "<script>
            Swal.fire({
                title: 'COMPRA ACTUALIZADA CORRECTAMENTE',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Actualizar_Compra.html';
                }
            });
            </script>";
        } else {
            echo "<script>
            Swal.fire({
                title: 'Oops...',
                text: 'ERROR AL ACTUALIZAR LA COMPRA.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Actualizar_Compra.html';
                }
            });
            </script>";
        }
    }else{
        echo "<script>
            Swal.fire({
                title: 'Oops...',
                text: 'Ingresa un valor valido para la compra.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Actualizar_Compra.html';
                }
            });
            </script>";
    }
?>