<?php
require "conexion.php";
session_start();

$user = $_POST['user'];
$contra = $_POST['contra'];

$consulta = "SELECT * FROM usuariosinfo WHERE user = '$user' AND contra = '$contra'";
$resultado = mysqli_query($conectar, $consulta);
$filas = mysqli_num_rows($resultado);

if($filas > 0) {
    $_SESSION["autentificado"] = "SI";
    $_SESSION["user"] = $user;
    header("Location: ../dash/index.php");
} else {
    echo '
    <script>
      alert("Usuario o contraseña incorrectos");
      location.href = "../index.php";
    </script>
    ';
}
mysqli_free_result($resultado);
mysqli_close($conectar);
?>