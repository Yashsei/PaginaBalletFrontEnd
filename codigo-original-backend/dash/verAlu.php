<?php
require "../datos/seguridad.php";
require "../datos/conexion.php";
$consulta = "SELECT * FROM alumnos";
$query = mysqli_query($conectar,$consulta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Panel Administrativo</title>
</head>
<body>
  <?php include "header.php" ?>
  <?php include "menu.php" ?>
  <div class="contGeneral">
    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Disciplina</th>
        <th>Horario</th>
        <th>Telefono</th>
        <th>Taller</th>
        <th>Foto</th>
        <th>Eliminar</th>
      </tr>
      <?php  while($fila = mysqli_fetch_assoc($query)):?>
        <tr>
          <td><?php echo $fila['id']?></td>
          <td><?php echo $fila['nombre']?></td>
          <td><?php echo $fila['edad']?></td>
          <td><?php echo $fila['paquete']?></td>
          <td><?php echo $fila['horario']?></td>
          <td><?php echo $fila['telefono']?></td>
          <td><?php echo $fila['taller']?></td>
          <td><img src="/ballet/datos/<?php echo $fila['foto']; ?>" alt="<?php echo $fila['nombre']; ?>" class="foto"></td>
          <td><a href="../datos/eliminar.php?id=<?php echo $fila['id']; ?>" onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">Eliminar</td>
        </tr>
        <?php endwhile; ?>
    </table>
  </div>
</body>
</html>