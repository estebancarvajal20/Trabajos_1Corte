<?php
//paso1:llamas a la libreria de conexion a la BD
    require "../config/conexion.php";
//paso2:capturar variables
    $marca = $_POST["marca"];
    $referencia = $_POST["referencia"];
    $valor = $_POST["valor"];
//
    $sql_insertar = "INSERT INTO ventacelulares
    (fecha_sys, marca,valor, referencia)
VALUES (now(),'".$marca."','".$valor."','".$referencia."')";
//echo $sql_insertar;
    if($dbh->query($sql_insertar))
    {
        echo "A REALIZADO SU COMPRE EXITOSAMENTE";
    }else{
        echo "ERROR AL REALIZAR LA COMPRA";
    }
?>