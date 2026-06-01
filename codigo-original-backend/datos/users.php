<?php
require "seguridad.php";
require "conexion.php";

$user = $_POST["user"];
$contra = $_POST["contra"];
$rango = $_POST["rango"];

$insertar = "INSERT INTO usuariosinfo (user,contra,rango)
VALUES ('$user','$contra','$rango')";

$query = mysqli_query($conectar,$insertar);
if($query){
  echo '
  <script>
    alert("Se guardaron los Datos Exitosamente")
    location.href="../dash/verUsers.php"
  </script>
  ';
}else {
  echo '
  <script>
    alert("NO guardaron los Datos ERROR")
    location.href="../dash/verUsers.php"
  </script>
  ';
}
?>

?>
