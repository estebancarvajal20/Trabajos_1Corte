<script src="../js/sweetalert2@11.js"></script>
.

<?php
    require "../config/conexion.php";

    $cantidad_cervezas = $_POST["cantidad_cervezas"];

    $total = $cantidad_cervezas * 3000;

    if($cantidad_cervezas > 0){
        $sql_comprar = "INSERT INTO cervezas_compra
            (fecha_sys, cantidad, valor) 
        VALUES (now(), '".$cantidad_cervezas."', '".$total."')";
        
        if($dbh->query($sql_comprar)){
            echo "<script>
            Swal.fire({
                title: 'COMPRA REGISTRADA CORRECTAMENTE',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Comprar.html';
                }
            });
            </script>";
        } else {
            echo "<script>
            Swal.fire({
                title: 'Oops...',
                text: 'ERROR AL REGISTRAR LA COMPRA.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Comprar.html';
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
                    window.location.href = '../Comprar.html';
                }
            });
            </script>";
    }
?>