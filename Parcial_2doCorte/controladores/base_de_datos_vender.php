<script src="../js/sweetalert2@11.js"></script>
.

<?php
    require "../config/conexion.php";

    $cantidad_cervezas = $_POST["cantidad_cervezas"];

    $subtotal = $cantidad_cervezas * 4000;
    $iva = $subtotal * 0.19;
    $total = $subtotal + $iva;

    if($cantidad_cervezas > 0){
        $sql_vender = "INSERT INTO cervezas_venta
            (fecha_sys, cantidad, subtotal, iva, total) 
        VALUES (now(), '".$cantidad_cervezas."', '".$subtotal."', '".$iva."', '".$total."')";
        
        if($dbh->query($sql_vender)){
            echo "<script>
            Swal.fire({
                title: 'VENTA REGISTRADA CORRECTAMENTE',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Vender.html';
                }
            });
            </script>";
        } else {
            echo "<script>
            Swal.fire({
                title: 'Oops...',
                text: 'ERROR AL REGISTRAR LA VENTA.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Vender.html';
                }
            });
            </script>";
        }
    }else{
        echo "<script>
            Swal.fire({
                title: 'Oops...',
                text: 'Ingresa un valor valido para la venta.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Vender.html';
                }
            });
            </script>";
    }
?>