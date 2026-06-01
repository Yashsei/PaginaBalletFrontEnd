<?php
require "seguridad.php";
require "conexion.php";
$id = $_GET['id'];
$consulta = "DELETE FROM alumnos WHERE id = '$id'";
$resultado = mysqli_query($conectar, $consulta);

if($resultado) {
  echo '
  <script>
  alert("Alumno eliminado correctamente");
  location.href="../dash/verAlu.php";
  </script>
  ';
} else {
  echo '
  <script>
  alert("Error al eliminar");
  location.href="../dash/verAlu.php";
  </script>
  ';
}
?>?>