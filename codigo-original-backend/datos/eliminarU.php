<?php
require "seguridad.php";
require "conexion.php";
$id = $_GET['id'];
$consulta = "DELETE FROM usuariosinfo WHERE id = '$id'";
$resultado = mysqli_query($conectar, $consulta);

if($resultado) {
  echo '
  <script>
  alert("Alumno eliminado correctamente");
  location.href="../dash/verUsers.php";
  </script>
  ';
} else {
  echo '
  <script>
  alert("Error al eliminar");
  location.href="../dash/verUsers.php";
  </script>
  ';
}
?>?>