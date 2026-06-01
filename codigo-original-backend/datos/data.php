<?php
require "conexion.php";

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$paquete = $_POST["paquete"];
$horario = $_POST["horario"];
$telefono = $_POST["telefono"];
$taller = $_POST["taller"];

$foto = $_FILES['foto']['name'];
$foto_temp = $_FILES['foto']["tmp_name"];
$files_foto = "files";
$fechahora =date('YmdHis');
$nombre_unico = $fechahora. '--'.$foto;
$foto_final = $files_foto.'/'. $nombre_unico;

$foto_tipo = $_FILES['foto']['type'];
if($foto_tipo == "image/png" || $foto_tipo == "image/jpeg" || $foto_tipo == "image/jpg"){
  move_uploaded_file($foto_temp,$foto_final);
}else {
  echo '
  <script>
    alert("No es una IMAGEN VALIDA");
    window.history.go(-1);
  </script>
  ';
  exit();
}
$foto_size = $_FILES['foto']['size'];
if($foto_size >1000000){
  echo'
  <script>
    alert("La imagen Supera 1 MB MUY PESADA");
    window.history.go(-1);
  </script>
  ';
  exit();
}

$insertar = "INSERT INTO alumnos (nombre,edad,paquete,horario,telefono,taller,foto)
VALUES ('$nombre','$edad','$paquete','$horario','$telefono','$taller','$foto_final')";

$query = mysqli_query($conectar,$insertar);
if($query){
  echo '
  <script>
    alert("Se guardaron los Datos Exitosamente")
    location.href = document.referrer;
  </script>
  ';
}else {
  echo '
  <script>
    alert("NO guardaron los Datos ERROR")
    window.history.go(-1);
  </script>
  ';
}
?>


