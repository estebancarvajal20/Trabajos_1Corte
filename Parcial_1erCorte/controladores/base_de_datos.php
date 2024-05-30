<script src="../js/sweetalert2@11.js"></script>
<style>
        body {
            background-color: grey;
            color: grey;
        }
</style>.

<?php
require "../config/conexion.php";

$documento = $_POST["doc"];
$nombre = $_POST["full_name"];
$fecha = $_POST["birth"];
$celular = $_POST["phone"];
$genero = $_POST["gender"];

$edad = 2024 - $fecha; 

if($edad >= 18 && $edad <= 120){
    $sql_insertar = "INSERT INTO onlyfans
        (fecha_sys, documento, nombre, fecha, celular, genero) 
    VALUES (now(), '".$documento."', '".$nombre."', '".$fecha."', '".$celular."', '".$genero."')";

    try{
        if($dbh->query($sql_insertar)){
        echo "<script>
                Swal.fire({
                    title: 'DATOS REGISTRADOS CORRECTAMENTE',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../Index.html';
                    }
                });
            </script>";
        }else{
            echo "<script>
                Swal.fire({
                    title: 'ERROR AL REGRISTRAR LOS DATOS',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../Index.html';
                    }
                });
            </script>";
        }
    }catch(PDOException $e){
        if ($e->getCode() == 23000 && $e->errorInfo[1] == 1062) {
                echo "<script>
                    Swal.fire({
                        title: 'SE HA DETECTADO UNA DUPLICACIÓN',
                        text: 'Ya existe un registro con ese documento en la base de datos.',
                        icon: 'error',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Aceptar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '../Index.html';
                        }
                    });
                </script>";
        }else{
                echo "<script>
                Swal.fire({
                    title:'ERROR AL REGISTRAR.',
                    text: '¿Error?..',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../Index.html';
                    }
                });
            </script>";
        }
    }
}elseif($edad > 0 && $edad < 18){
    echo "<script>
            Swal.fire({
                title:'ERROR AL REGISTRAR.',
                text: 'Debes ser mayor de edad para continuar con el registro.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../Index.html';
                }
            });
        </script>";
}else{
    echo "<script>
            Swal.fire({
                title:'ERROR AL REGISTRAR.',
                text: 'Debe ingresar una edad valida.',
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