
<?php
//Paso 1: Importar la libreria de la BD
require "config/conexion.php";

//Paso 2: Capturando variables


//Paso 3: Armo la sentencia sql que necesite
$sql =  "SELECT cod, nombre, fecha_sys
FROM persona
WHERE 1";

//Paso 4, recorrer el arreglo
foreach($conexion->query($sql) as $row)
{
     print "<tr>
	<td>".$row[0]."</td>
	<td>".$row[1]."</td>
  <td>".$row[2]."</td>
	</tr>  
     ";               
}
?>