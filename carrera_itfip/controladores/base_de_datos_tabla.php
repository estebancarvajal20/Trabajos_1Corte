<?php 
require "config/conexion.php";

#SE CUMPLE SI HAY UNA LETRA/NUMERO MINIMO EN EL BUSCADOR
if(isset($_POST["busqueda"]))
{
    $buscador = $_POST["busqueda"];

    $sql = "SELECT *
    FROM registro_carrera
    WHERE cod LIKE '%".$buscador."%' or 
    fecha_sys LIKE '%".$buscador."%' or 
    nombre LIKE '%".$buscador."%' or
    documento LIKE '%".$buscador."%' or
    id_rol LIKE '%".$buscador."%' or
    participacion LIKE '%".$buscador."%'
    LIMIT 25";

foreach($dbh->query($sql) as $row){
    print "
    <tr>
        <td>".$row['cod']."</td>
        <td>".$row['fecha_sys']."</td>
        <td>".$row['nombre']."</td>
        <td>".$row['documento']."</td>
        <td>".$row['id_rol']."</td>
        <td>".$row['participacion']."</td>
    </tr>
    ";
}
#SE CUMPLE SI NO HAY UNA LETRA/NUMERO MINIMO EN EL BUSCADOR
}else{
    $sql = "SELECT *
    FROM registro_carrera
    WHERE 1
    LIMIT 25";

    foreach($dbh->query($sql) as $row){
        print "
        <tr>
            <td>".$row['cod']."</td>
            <td>".$row['fecha_sys']."</td>
            <td>".$row['nombre']."</td>
            <td>".$row['documento']."</td>
            <td>".$row['id_rol']."</td>
            <td>".$row['participacion']."</td>
        </tr>
        ";
    }
}
?>