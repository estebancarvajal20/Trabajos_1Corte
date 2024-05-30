<?php
include "config/conexion.php";

$nombre = $_POST["txt_nombre"];

$sql = "SELECT *
FROM personas
WHERE nombre like '%".$nombre."%' ";

foreach($dbh->query($sql)as $row)
{
    $cod = $row['cod'];
    $nombre = $row['nombre'];
    $nombre = strtoupper($nombre);
    $fecha = $row['fecha_nacimiento'];
    $celular = $row['celular'];

    print "
    <tr>
    <td>".$cod."</td>
    <td>".$nombre."</td>
    <td>".$fecha."</td>
    <td>".$celular."</td>
  </tr>
    ";

}

?>