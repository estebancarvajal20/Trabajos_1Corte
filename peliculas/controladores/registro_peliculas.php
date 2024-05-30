<script src="../js/sweetalert2@11.js"></script>
.
<?php
    require "../config/conexion.php";

   
    $nombre_pelicula = $_POST["nombre_pelicula"];
    $categoria = $_POST["categoria"];
    $fecha_estreno = $_POST["fecha_estreno"];


if($nombre_pelicula != ""){
  $sql_insertar="INSERT INTO registro_peliculas(fecha_sys, nombre_pelicula, categoria, fecha_estreno) VALUES ( now(), '".$nombre_pelicula."', '".$categoria."', '".$fecha_estreno."')";
                
  if($dbh->query($sql_insertar)){
          echo "<script>
            Swal.fire({
              title: 'Su pelicula fue registrada.',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '../registro.html';
              }
            });
          </script>";
}else{
    echo "<script>
            Swal.fire({
              title:'ERROR AL REGISTRAR, VERIFICA LOS DATOS QUE ESCRIBIO Y VUELVE A REPETIR EL PROCESO.',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'error'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/peliculas';
              }
            });
          </script>";
}
}               
?>