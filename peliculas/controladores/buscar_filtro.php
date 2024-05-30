<?php
include "config/conexion.php";

$nombre_pelicula = $_POST["nombre_pelicula"];

$sql = "SELECT *
FROM registro_peliculas
WHERE nombre_pelicula like '%".$nombre_pelicula."%' ";

foreach($dbh->query($sql)as $row)
{
    $cod = $row['cod'];
    $nombre_pelicula = $row['nombre_pelicula'];
    $nombre_pelicula = strtoupper($nombre_pelicula);
    $categoria = $row['categoria'];
    $fecha_estreno = $row['fecha_estreno'];

    print "
    <tr>
    <td>".$cod."</td>
    <td>".$nombre_pelicula."</td>
    <td>".$categoria."</td>
    <td>".$fecha_estreno."</td>
  </tr>
    ";

}

?>