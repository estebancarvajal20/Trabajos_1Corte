<?php 
require "config/conexion.php";
//select es el nombre de la columna
//from es el nombre de la tabla
$sql = "SELECT estado
FROM config
WHERE 1";

foreach($dbh->query($sql) as $row){
   $estado = $row["estado"];
   if ($estado==0)
   {
       die("lo siento, inscripciones cerradas.");
   }else{

   }
}
?>