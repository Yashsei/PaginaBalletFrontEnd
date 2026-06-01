<?php
$host = "localhost";
$user = "root";
$contra = "";
$bd = "ballet";

$conectar = mysqli_connect($host, $user, $contra, $bd);

if($conectar->connect_error){
  echo ("Conexion a la BD fallida" . $conectar->connect_error);
  exit();
}
?>