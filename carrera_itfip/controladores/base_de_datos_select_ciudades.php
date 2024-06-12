

<?php
    require "config/conexion.php";
$sql= "SELECT cod, fecha, valor_pagado, valor_restante 
FROM pago 
limit 50";
foreach($dbh->query($sql) as $row){
print "<tr>
 <th>".$row['cod']."</th>
 <th>".$row['fecha']."</th>
 <th>".$row['valor_pagado']."</th>
 <th>".$row['valor_restante']."</th>
 </tr>";
}
?>