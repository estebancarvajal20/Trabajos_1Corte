<?php
    require "../config/conexion.php";

    $nombre_completo = $_POST["text-name"];
    $documento = $_POST["cc-document"];
    $fecha_nacimiento = $_POST["birth-date"];
    $celular = $_POST["number-phone"];
    $genero = $_POST["gender"];

    $sql_insertar = "INSERT INTO personas 
        (fecha_sys, nombre, documento, fecha_nacimiento, celular, sexo) 
    VALUES (now(), '".$nombre_completo."', '".$documento."', '".$fecha_nacimiento."', '".$celular."', '.$genero.')";

    if($dbh->query($sql_insertar))
    {
        echo "Informacion registrada correctamente";
    }else{
        echo "Error registrando la informacion";
    }
?>