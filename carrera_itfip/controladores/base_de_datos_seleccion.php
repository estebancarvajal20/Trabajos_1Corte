<?php 
require "config/conexion.php";

$sql = "SELECT rol
FROM roles
WHERE 1";

foreach($dbh->query($sql) as $row){
    print "
    <option value='".$row['rol']."'>".$row['rol']."</option>
    ";
}
?>