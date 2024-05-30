<?php
    require "../config/conexion.php";

    $nompropietario = $_POST["name"];
    $documento = $_POST["number"];
    $numero = $_POST["number-cel"];
    $valor = $_POST["val"];

    $sql_insertar = "INSERT INTO movistar2
        (fecha_sys,nompropietario, documento, numero, valor) 
    VALUES (now(), '".$nompropietario."', '".$documento."', '".$numero."', '".$valor."')";

    if($dbh->query($sql_insertar))
    {
        echo "RECARGA REALIZADA, DISFRUTALA.";
    }else{
        echo "Error intenta de nuevo.";
    }
?>