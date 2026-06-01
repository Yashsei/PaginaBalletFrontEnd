<?php
require "../datos/seguridad.php";
require "../datos/conexion.php";
$consulta = "SELECT * FROM usuariosinfo";
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
        <th>Usuario</th>
        <th>Rango</th>
        <th>Eliminar</th>
      </tr>
      <?php  while($fila = mysqli_fetch_assoc($query)):?>
        <tr>
          <td><?php echo $fila['id']?></td>
          <td><?php echo $fila['user']?></td>
          <td><?php echo $fila['rango']?></td>
          <td><a href="../datos/eliminarU.php?id=<?php echo $fila['id']; ?>" onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">Eliminar</td>
        </tr>
        <?php endwhile; ?>
    </table>
  </div>
</body>
</html>