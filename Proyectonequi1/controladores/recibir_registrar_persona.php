<?php
    require "../config/conexion.php";

    $celular = $_POST["number-phone"];
    $valor = $_POST["number"];
    $descripcion = $_POST["text"];

    $sql_insertar = "INSERT INTO nequi
        (fecha_sys,ingrese_celular,valor,descripcion) 
    VALUES (now(), '".$celular."', '".$valor."', '".$descripcion."')";

    if($dbh->query($sql_insertar))
    {
        echo "transferencia exitosa.";
    }else{
        echo "Error al trnsferir dinero, repite el proceso.";
    }
?>